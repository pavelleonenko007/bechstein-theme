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

  $file = fopen(get_home_path() . 'tix-logs/logs.txt', "w");
  fwrite($file, '=== Start: ' . date('l jS \of F Y h:i:s A') . '=== ||');
  fwrite($file, json_encode($request->get_body_params()));

  fwrite($file, '==||==');

  fwrite($file, json_encode($request->get_body()));
  fwrite($file, '|| === End ===');
  fclose($file);

  $body = json_decode($response['body'], true);
  $error = '';

  foreach ($body as $item) {
    $events = $item['Dates'];
    foreach ($events as $event) {
      $existing_event = get_posts([
        'post_type' => 'event',
        's' => $post['title']
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
    }
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
