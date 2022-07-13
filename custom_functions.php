<?php

/**
 * webhook endpoint
 */

add_action('rest_api_init', function () {
  register_rest_route('tix-webhook/v1', '/webhook', array(
    'methods'  => 'POST',
    'callback' => 'webhook_callback',
    'permission_callback' => '__return_true'
  ));
});

function webhook_callback(WP_REST_Request $request)
{
  $url = get_home_url() . '/data.json';
  $response = wp_remote_get($url);

  if (is_wp_error($response)) {
    return new WP_Error('can_not_fetch_data', 'Can not fetch data from tix', ['status' => 400]);
  }

  $body = json_decode($response['body'], true);
  $error = '';

  foreach ($body as $post) {
    $existing_post = get_posts([
      'post_type' => 'post',
      's' => $post['title']
    ]);

    $post_args = [
      'post_type' => 'post',
      'post_title' => $post['title'],
      'post_status' => 'publish'
    ];

    if ($existing_post[0]) {
      $post_args['ID'] = $existing_post[0]->ID;
    }

    $post_id = wp_insert_post($post_args, true);

    if (is_wp_error($post_id)) {
      $error = $post_id->get_error_message();
      break;
    }
  }

  if ($error) {
    return new WP_Error('error_post_update', 'Post updating error', ['status' => 500]);
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
