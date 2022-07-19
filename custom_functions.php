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

  $events = $body[0]['Dates'];

  foreach ($events as $event) {
    $existing_event = get_posts([
      'post_type' => 'event',
      's' => $event['Name']
    ]);

    $event_args = [
      'post_type' => 'event',
      'post_title' => sanitize_text_field($event['Name']),
      'post_status' => 'publish',
      'tax_input' => [
        'event_tag' => is_array($event['Tags']) ? $event['Tags'] : [$event['Tags']]
      ],
      'post_author' => 1,
      'post_content' => '<p></p>'
    ];

    if ($existing_event[0]) {
      $event_args['ID'] = $existing_event[0]->ID;
      $event_args['post_content'] = $existing_event[0]->post_content;
    }

    $event_id = wp_insert_post($event_args, true);

    if (is_wp_error($event_id)) {
      $error = $event_id->get_error_message();
      break;
    }

    $online_sale_start_field = 'field_62d6800f618cb';
    $online_sale_end_field = 'field_62d68403618cc';
    $min_price_field = 'field_62d68426618cd';
    $max_price_field = 'field_62d68451618ce';
    $purchase_urlsfield = 'field_62d684c2618cf';

    /* Update Online Sale Start Field */

    update_field($online_sale_start_field, bech_format_date($event['OnlineSaleStart'], 'Y-m-d H:i:s'), $event_id);
    update_field($online_sale_end_field, bech_format_date($event['OnlineSaleEnd'], 'Y-m-d H:i:s'), $event_id);
    update_field($min_price_field, $event['MinPrice'], $event_id);
    update_field($max_price_field, $event['MaxPrice'], $event_id);
    update_field($max_price_field, $event['MaxPrice'], $event_id);
    update_field($purchase_urlsfield, bech_purchase_url_format_data($event['PurchaseUrls']), $event_id);
  }

  if ($error) {
    return new WP_Error('error_post_update', 'Event updating error', ['status' => 500]);
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
