<?php
add_action('wp_enqueue_scripts', 'bech_add_scripts');
function bech_add_scripts()
{
  wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', ['main'], rand());
  wp_enqueue_style('style-css', '//thevogne.ru/bech/style-cus.css', ['custom'], rand());
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery'], false, true);
  wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js', ['main'], false, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', ['main'], false, true);
  wp_enqueue_script('script-cus', '//thevogne.ru/bech/script-cus.js', ['custom'], false, true);
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
    'methods'  => 'GET',
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
      'get' => 'all',
      'meta_key' => 'event_group_id',
      'meta_value' => $event['EventGroupId']
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

    update_field('field_62fa240659e1f', $event['EventGroupId'], 'event_cat_' . $category_res['term_id']);
    update_field('field_62e114041c431', $event['EventImagePath'], 'event_cat_' . $category_res['term_id']);
    update_field('field_62e116751c432', $event['FeaturedImagePath'], 'event_cat_' . $category_res['term_id']);
    update_field('field_62e116931c433', $event['PosterImagePath'], 'event_cat_' . $category_res['term_id']);
    update_field('field_62e112e21c42e', bech_purchase_url_format_data($event['PurchaseUrls']), 'event_cat_' . $category_res['term_id']);

    foreach ($event['Dates'] as $tiket) {
      $existing_tiket = get_posts([
        'post_type' => 'event',
        'meta_key' => 'eventid',
        'meta_value' => $tiket['EventId']
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

      $event_id_field = 'field_62fa1a2a5e949';
      $sale_status_field = 'field_62fa1a3a5e94a';
      $sold_out_field = 'field_62fa1aee5e94b';
      $waiting_list_field = 'field_62fa1b775e94c';
      $duration_field = 'field_62fa1cd95e94d';
      $online_sale_start_field = 'field_62d6800f618cb';
      $online_sale_end_field = 'field_62d68403618cc';
      $online_date_start_field = 'field_62fa1f3b5e94f';
      $online_date_end_field = 'field_62fa1f755e950';
      $min_price_field = 'field_62d68426618cd';
      $max_price_field = 'field_62d68451618ce';
      $purchase_urls_field = 'field_62d684c2618cf';

      /* Update Online Sale Start Field */

      update_field($event_id_field, $tiket['EventId'], $ticket_id);
      update_field($sale_status_field, $tiket['SaleStatus'], $ticket_id);
      update_field($duration_field, $tiket['Duration'], $ticket_id);
      update_field($sold_out_field, $tiket['SoldOut'], $ticket_id);
      update_field($waiting_list_field, $tiket['WaitingList'], $ticket_id);
      update_field($online_date_start_field, $tiket['StartDate'], $ticket_id);
      update_field($online_date_end_field, $tiket['EndDate'], $ticket_id);
      update_field($online_sale_start_field, $tiket['OnlineSaleStart'], $ticket_id);
      update_field($online_sale_end_field, $tiket['OnlineSaleEnd'], $ticket_id);
      update_field($min_price_field, $tiket['MinPrice'], $ticket_id);
      update_field($max_price_field, $tiket['MaxPrice'], $ticket_id);
      update_field($max_price_field, $tiket['MaxPrice'], $ticket_id);
      update_field($purchase_urls_field, bech_purchase_url_format_data($tiket['PurchaseUrls']), $ticket_id);
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

function bech_sort_tickets($tickets)
{
  $sorted_tickets = [];

  foreach ($tickets as $ticket) {
    $date_time = new DateTime(get_field('start_date', $ticket->ID));
    $ticket_date = $date_time->format('Y-m-d');
    $sorted_tickets[$ticket_date][] = $ticket;
  }

  return $sorted_tickets;
}

function bech_get_ticket_from_to_price($post_id)
{
  $from_price = get_field('min_price', $post_id);
  $to_price = get_field('max_price', $post_id);

  if ($from_price === '' || $to_price === '') {
    switch (true) {
      case $from_price === '' && $to_price === '':
        return 'No price yet';
      case $from_price === '':
        return "from £" . $to_price;
      default:
        return "from £" . $from_price;
    }
  } else {
    return 'from £' . $from_price . ' to £' . $to_price;
  }
}

function bech_get_ticket_times($post_id)
{
  $start_date = new DateTime(get_field('start_date', $post_id));
  $end_date = new DateTime(get_field('end_date', $post_id));
  $start_time = $start_date->format('H:i');
  $end_time = $end_date->format('H:i');

  switch (true) {
    case $start_time !== '' && $end_time !== '':
      return $start_time . '—' . $end_time;
    case $end_time === '':
      return 'start from ' . $start_time;
    case $start_time === '':
      return 'ends at ' . $end_time;
    default:
      return '–';
  }
}

function bech_get_custom_taxonomies($taxonomy)
{
  $terms = get_terms([
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
    'parent' => 0,
  ]);

  return $terms;
}

/* What's on filters */

add_action('rest_api_init', function () {
  register_rest_route('tix-webhook/v1', '/whats-on-filter', array(
    'methods'  => 'POST',
    'callback' => 'bech_filter_whats_on_tickets',
    'permission_callback' => '__return_true'
  ));
});

function bech_filter_whats_on_tickets(WP_REST_Request $request)
{
  $params = $request->get_params();
  $selected_string = '';

  foreach ($params as $prop => $param) {
    if ($prop === 'genre' || $prop === 'instrument') {
      $selected_string .= is_array($param) ? implode(', ', $param) : $param;
      $selected_string .= ', ';
    }
  }

  $selected_string = mb_substr($selected_string, 0, -2);

  $args = [
    'post_type' => 'event',
    'post_status' => 'publish',
    'numberposts' => 10,
    'orderby' => 'meta_value',
    'meta_key' => 'start_date',
    'order' => 'ASC',
    'meta_query' => [
      [
        'key' => 'start_date',
        'value' => date('Y.m.d H:i'),
        'compare' => '>=',
        'type' => 'DATETIME'
      ]
    ]
  ];

  if (isset($params['genre'])) {
    $args['tax_query'][] = [
      'taxonomy' => 'genres',
      'field' => 'slug',
      'terms' => $params['genre']
    ];
  }

  if (isset($params['instrument'])) {
    $args['tax_query'][] = [
      'taxonomy' => 'instruments',
      'field' => 'slug',
      'terms' => $params['instrument']
    ];
  }

  $tickets = get_posts($args);
  $sorted_tickets = bech_sort_tickets($tickets);
  $data = "<p class='no-event-message'>There is no events — we're working on a concert program. Now you can read about Bechstein Hall.</p>";
  ob_start();
  if (!empty($sorted_tickets)) :
    foreach ($sorted_tickets as $date => $tickets) :
?>
      <div class="cms-ul">
        <div class="cms-heading">
          <h2 class="h2-cms"><?php echo date('d F', strtotime($date)); ?></h2>
          <h2 class="h2-cms day"><?php echo date('l', strtotime($date)); ?></h2>
        </div>
        <div class="cms-ul-events">
          <?php foreach ($tickets as $ticket) :
            $category = get_the_terms($ticket->ID, 'event_cat')[0]; ?>
            <div class="cms-li">
              <div class="cms-li_mom-img">
                <img src="<?php echo get_field('feature_image', $category); ?>" alt="<?php echo get_the_title($ticket); ?>" class="cms-li_img" />
                <?php $sale_status = get_field('sale_status', $ticket->ID);
                if ($sale_status['value'] !== '0') :
                ?>
                  <div class="cms-li_sold-out-banner"><?php echo $sale_status['label']; ?></div>
                <?php endif; ?>
              </div>
              <div class="cms-li_content">
                <div class="cms-li_time-div">
                  <div class="p-30-45"><?php echo bech_get_ticket_times($ticket->ID); ?></div>
                  <div class="p-17-25 italic"><?php echo get_field('duration', $ticket->ID); ?></div>
                </div>
                <div class="p-20-30 title-event"><?php echo get_the_title($ticket); ?></div>
                <p class="p-17-25"><?php echo get_field('event_subheader', $ticket->ID); ?></p>
                <div class="cms-li_tags-div">
                  <?php $tags = wp_get_object_terms($ticket->ID, ['event_tag', 'genres', 'instruments']);
                  foreach ($tags as $tag) : ?>
                    <a href="#" class="cms-li_tag-link"><?php echo $tag->name; ?></a>
                  <?php endforeach; ?>
                </div>
                <div class="cms-li_actions-div">
                  <?php if ($sale_status['value'] === '0' || $sale_status['value'] === '1') : ?>
                    <a bgline="1" href="<?php echo get_field('purchase_urls', $category)[0]['link']; ?>" class="booktickets-btn">
                      <strong>Book tickets</strong>
                    </a>
                  <?php else : ?>
                    <a bgline="2" href="#" class="booktickets-btn sold-out">
                      <strong><?php echo $sale_status['label']; ?></strong>
                    </a>
                  <?php endif; ?>
                  <a href="<?php echo get_term_link($category); ?>" class="readmore-btn w-inline-block">
                    <div>read more</div>
                    <div> →</div>
                  </a>
                </div>
                <div class="cms-li_price"><?php echo bech_get_ticket_from_to_price($ticket->ID); ?></div>
              </div>
              <div class="cms-li_actions-div biger">
                <a bgline="1" href="<?php echo get_field('purchase_urls', $category)[0]['link']; ?>" class="booktickets-btn">
                  <strong>Book tickets</strong>
                </a>
                <div class="cms-li_price"><?php echo bech_get_ticket_from_to_price($ticket->ID); ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
<?php
    endforeach;
    $data = ob_get_clean();
  endif;

  $rest_response = rest_ensure_response([
    'code' => 'success',
    'message' => 'Data succesfully updated',
    'data' => [
      'status' => 200,
      'html' => $data,
      'selected_string' => $selected_string,
    ]
  ]);

  $rest_response->set_status(200);

  return $rest_response;
}

/* What's on filters */
