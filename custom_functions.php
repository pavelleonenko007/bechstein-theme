<?php
add_action('wp_enqueue_scripts', 'bech_add_scripts');
function bech_add_scripts()
{
  wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', ['main'], rand());
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery'], false, true);
  wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js', ['main'], false, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', ['main'], false, true);
  wp_localize_script('custom', 'bech_var', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('ajax-nonce'),
    'home_url' => get_home_url()
  ));
}

/* Tix Utils Functions */

function bech_format_date($str = '', $format = 'Y-m-d H:i:s')
{
  $date = new DateTime($str);
  return $date->format($format);
}

function bech_purchase_url_format_data($arr)
{
  $formatted_arr = [];

  foreach ($arr as $item) {
    $formatted_item = [];
    $formatted_item['two_letter_culture'] = $item['TwoLetterCulture'];
    $formatted_item['link'] = $item['Link'];

    $formatted_arr[] = $formatted_item;
  }

  return $formatted_arr;
}

/* Tix Utils Functions */

/**
 * webhook endpoint
 */

add_action('rest_api_init', function () {
  register_rest_route('tix-webhook/v1', '/webhook', array(
    'methods'  => 'POST',
    'callback' => 'bech_webhook_callback',
    'permission_callback' => '__return_true'
  ));
});

function bech_webhook_callback(WP_REST_Request $request)
{
  require_once ABSPATH . 'wp-admin/includes/file.php';
  $url = 'https://eventapi.tix.uk/v2/Events?key=39c4703fb4a64c7e';
  $response = wp_remote_get($url);

  if (is_wp_error($response)) {
    return new WP_Error('can_not_fetch_data', 'Can not fetch data from tix', ['status' => 400]);
  }

  if (is_dir(get_home_path() . 'tix-logs') === false) {
    mkdir(get_home_path() . 'tix-logs');
  }

  $file = fopen(get_home_path() . 'tix-logs/logs.txt', "a");
  fwrite($file, '=== Start: ' . date('l jS \of F Y h:i:s A') . '=== ||');
  fwrite($file, json_encode($request->get_body_params()));

  fwrite($file, '==||==');

  fwrite($file, json_encode($request->get_body()));
  fwrite($file, '|| === End ===');
  fclose($file);

  $body = json_decode($response['body'], true);
  $error = '';

  foreach ($body as $event) {
    $category_res = '';

    $existing_category = get_terms([
      'taxonomy' => 'event_cat',
      'name' => trim($event['Name']),
      'get' => 'all'
    ]);

    if ($existing_category[0]) {
      $category_res = wp_update_term($existing_category[0]->term_id, 'event_cat', [
        'description' => $event['Description'],
      ]);
    } else {
      $category_res = wp_insert_term($event['Name'], 'event_cat', [
        'description' => $event['Description'],
      ]);
    }

    if (is_wp_error($category_res)) {
      $error = $category_res->get_error_message();
      break;
    }

    foreach ($event['Dates'] as $tiket) {
      $existing_tiket = get_posts([
        'post_type' => 'event',
        's' => $tiket['Name']
      ]);

      $tiket_args = [
        'post_type' => 'event',
        'post_title' => $tiket['Name'],
        'post_status' => 'publish',
        'post_author' => 1,
        'post_content' => '<p></p>',
      ];

      if ($existing_tiket[0]) {
        $tiket_args['ID'] = $existing_tiket[0]->ID;
      }

      $ticket_id = wp_insert_post($tiket_args, true);

      if (is_wp_error($ticket_id)) {
        $error = $ticket_id->get_error_message();
        break 2;
      }

      $cat_id = wp_set_object_terms($ticket_id, $category_res['term_id'], 'event_cat', false);

      if (is_wp_error($cat_id)) {
        $error = $cat_id->get_error_message();
        break 2;
      }

      $online_sale_start_field = 'field_62d6800f618cb';
      $online_sale_end_field = 'field_62d68403618cc';
      $min_price_field = 'field_62d68426618cd';
      $max_price_field = 'field_62d68451618ce';
      $purchase_urlsfield = 'field_62d684c2618cf';

      /* Update Online Sale Start Field */

      update_field($online_sale_start_field, bech_format_date($tiket['OnlineSaleStart'], 'Y-m-d H:i:s'), $ticket_id);
      update_field($online_sale_end_field, bech_format_date($tiket['OnlineSaleEnd'], 'Y-m-d H:i:s'), $ticket_id);
      update_field($min_price_field, $tiket['MinPrice'], $ticket_id);
      update_field($max_price_field, $tiket['MaxPrice'], $ticket_id);
      update_field($max_price_field, $tiket['MaxPrice'], $ticket_id);
      update_field($purchase_urlsfield, bech_purchase_url_format_data($tiket['PurchaseUrls']), $ticket_id);
    }
  }

  if ($error) {
    return new WP_Error('error_post_update', $error, ['status' => 500]);
  }

  $rest_response = rest_ensure_response([
    'code' => 'success',
    'message' => 'Data succesfully updated',
    'data' => [
      'status' => 201
    ]
  ]);

  $rest_response->set_status(201);

  return $rest_response;
}
