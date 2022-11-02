<?php
require get_template_directory() . '/inc/widgets/class-bech-repeater-links-widget/class-bech-repeater-links-widget.php';
require get_template_directory() . '/inc/widgets/class-bech-contact-widget/class-bech-contact-widget.php';

add_theme_support('custom-logo');
add_theme_support('widgets');

add_action('wp_enqueue_scripts', 'bech_add_scripts');
function bech_add_scripts(): void
{
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', ['main'], rand());
	wp_enqueue_style('style-css', '//thevogne.ru/bech/style-cus.css', ['custom'], rand());
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery'], time(), true);
	wp_enqueue_script('add-to-calendar-button', '//cdn.jsdelivr.net/npm/add-to-calendar-button@1', ['main'], false, true);
	wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js', ['main'], false, true);
	wp_enqueue_script('splide', '//cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', ['front'], false, true);
	wp_enqueue_script('tween-max', '//thevogne.ru/wp-content/themes/twentyfifteen/js/TweenMax.min.js', ['front'], false, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', ['front'], false, true);
	wp_enqueue_script('script-cus', '//thevogne.ru/bech/script-cus.js', ['custom'], false, true);
	wp_localize_script('custom', 'bech_var', array(
		'url'      => admin_url('admin-ajax.php'),
		'nonce'    => wp_create_nonce('ajax-nonce'),
		'home_url' => get_home_url()
	));
}

add_action('widgets_init', 'bech_register_sidebar');
function bech_register_sidebar(): void
{
	register_sidebar([
		'name' => 'Bechstein Sidebar',
		'id'   => 'custom_bechstein_sidebar',
	]);
}

/* Tix Utils Functions */

function bech_format_date($str = '', $format = 'Y-m-d H:i:s'): string
{
	$date = new DateTime($str);

	return $date->format($format);
}

function bech_purchase_url_format_data($arr): array
{
	$formatted_arr = [];

	foreach ($arr as $item) {
		$formatted_item                       = [];
		$formatted_item['two_letter_culture'] = $item['TwoLetterCulture'];
		$formatted_item['link']               = $item['Link'];

		$formatted_arr[] = $formatted_item;
	}

	return $formatted_arr;
}

function bech_get_events_number($array, $word)
{
	switch (true) {
		case count($array) < 1:
			return 'there is no ' . $word . 's';
		case count($array) % 10 > 1:
			return count($array) . ' ' . $word . 's';
		case count($array) % 10 === 1:
			return count($array) . ' ' . $word;
	}
}

function bech_get_current_url()
{
	global $wp;
	return home_url($wp->request);
}

function bech_is_current_url($url)
{
	$formatted_url = '';
	if (substr($url, -1) !== '/') {
		$formatted_url = $url;
	} else {
		$formatted_url = substr($url, 0, -1);
	}

	return bech_get_current_url() === $formatted_url;
}

// add_action('init', 'bech_register_post_types');

function bech_register_post_types()
{
	register_post_type('team', [
		'label'         => null,
		'labels'        => [
			'name'               => 'Team', // основное название для типа записи
			'singular_name'      => 'Teammate', // название для одной записи этого типа
			'add_new'            => 'Add new', // для добавления новой записи
			'add_new_item'       => 'Add new teammate', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => "Edit teammate's info", // для редактирования типа записи
			'new_item'           => 'New teammate', // текст новой записи
			'view_item'          => 'View teammate', // для просмотра записи этого типа.
			'search_items'       => 'Search teammates', // для поиска по этим типам записи
			'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not Found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Team', // название меню
		],
		'description'   => '',
		'public'        => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'  => null,
		// показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'  => null,
		// добавить в REST API. C WP 4.7
		'rest_base'     => null,
		// $post_type. C WP 4.7
		'menu_position' => null,
		'menu_icon'     => 'dashicons-groups',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'  => false,
		'supports'      => ['title', 'editor', 'thumbnail'],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'    => [],
		'has_archive'   => false,
		'rewrite'       => true,
		'query_var'     => true,
	]);
}

/* Tix Utils Functions */

/**
 * webhook endpoint
 */

// add_action('rest_api_init', function () {
// 	register_rest_route('tix-webhook/v1', '/webhook', array(
// 		'methods'             => 'GET',
// 		'callback'            => 'bech_webhook_callback',
// 		'permission_callback' => '__return_true'
// 	));
// });

function bech_webhook_callback(WP_REST_Request $request)
{
	require_once ABSPATH . 'wp-admin/includes/file.php';
	$url      = 'https://eventapi.tix.uk/v2/Events?key=39c4703fb4a64c7e';
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

	$body  = json_decode($response['body'], true);
	$error = '';

	foreach ($body as $event) {
		$category_res = '';

		$existing_category = get_terms([
			'taxonomy'   => 'event_cat',
			'get'        => 'all',
			'meta_key'   => 'event_group_id',
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
				'post_type'  => 'event',
				'meta_key'   => 'eventid',
				'meta_value' => $tiket['EventId']
			]);

			$tiket_args = [
				'post_type'    => 'event',
				'post_title'   => $tiket['Name'],
				'post_status'  => 'publish',
				'post_author'  => 1,
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

			$event_id_field          = 'field_62fa1a2a5e949';
			$sale_status_field       = 'field_62fa1a3a5e94a';
			$sold_out_field          = 'field_62fa1aee5e94b';
			$waiting_list_field      = 'field_62fa1b775e94c';
			$duration_field          = 'field_62fa1cd95e94d';
			$online_sale_start_field = 'field_62d6800f618cb';
			$online_sale_end_field   = 'field_62d68403618cc';
			$online_date_start_field = 'field_62fa1f3b5e94f';
			$online_date_end_field   = 'field_62fa1f755e950';
			$min_price_field         = 'field_62d68426618cd';
			$max_price_field         = 'field_62d68451618ce';
			$purchase_urls_field     = 'field_62d684c2618cf';

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
		'code'    => 'success',
		'message' => 'Data succesfully updated',
		'data'    => [
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
		$date_time                        = new DateTime(get_field('_bechtix_ticket_start_date', $ticket->ID));
		$ticket_date                      = $date_time->format('Y-m-d');
		$sorted_tickets[$ticket_date][] = $ticket;
	}

	return $sorted_tickets;
}

function bech_get_ticket_from_to_price($post_id)
{
	$from_price = get_field('_bechtix_min_price', $post_id);
	$to_price   = get_field('_bechtix_max_price', $post_id);

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

function bech_get_ticket_times($post_id): string
{
	$start_date = new DateTime(get_field('_bechtix_ticket_start_date', $post_id));
	$end_date   = new DateTime(get_field('_bechtix_ticket_end_date', $post_id));
	$start_time = $start_date->format('H:i');
	$end_time   = $end_date->format('H:i');

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
	$terms = array_filter(get_terms([
		'taxonomy'   => $taxonomy,
		'hide_empty' => true,
		'parent'     => 0,
	]), function ($term) {
		$tickets = get_posts([
			'post_type' => 'tickets',
			'post_status' => 'publish',
			'tax_query' => [
				[
					'taxonomy' => $term->taxonomy,
					'field' => 'slug',
					'terms' => $term->slug
				]
			]
		]);

		// var_dump([$term->slug => count($tickets)]);

		return !empty($tickets);
	});

	return $terms;
}

function bech_get_specials_filters()
{
	$events = get_posts([
		'post_type' => 'events',
		'post_status' => 'publish',
		'fields' => 'ids',
		'meta_query' => [
			[
				'key' => '_bechtix_festival_relation',
				'value' => '',
				'compare' => '!='
			]
		]
	]);

	$festivals = array_map(function ($event) {
		return get_post(get_post_meta($event, '_bechtix_festival_relation', true));
	}, $events);

	return array_unique($festivals, SORT_REGULAR);
}

function bech_get_selected_filters_string($params)
{
	$selected_string = '';

	if (!empty($params['from'])) {
		$dates_values = array_values(array_filter($params, function ($value, $param) {
			return $param === 'from' || ($param === 'to' && $value !== '');
		}, ARRAY_FILTER_USE_BOTH));

		$formatted_dates = array_map(function ($date) {
			$date_time = new DateTime($date);
			return $date_time->format('j M Y');
		}, $dates_values);

		$selected_string .= implode('–', $formatted_dates) . ', ';
	}

	foreach ($params as $prop => $param) {
		if ($prop === 'genres' || $prop === 'instruments' || $prop === 'time' || $prop === 'festival') {
			if ($prop === 'festival') {
				foreach ($param as $festival_id) {
					$festival = get_post($festival_id);
					$selected_string .= $festival->post_title;
					$selected_string .= ', ';
				}
			} else {
				$selected_string .= is_array($param) ? implode(', ', $param) : $param;
				$selected_string .= ', ';
			}
		}
	}

	$selected_string = mb_substr($selected_string, 0, -2);

	return $selected_string;
}

function bech_get_smaller_date($param)
{
	if ($param === 'today' || $param === 'tomorrow') {
		$date_time = new DateTime($param);
		return $date_time->format('l');
	} elseif ($param === 'next-week') {
		$date_time = new DateTime();
		$date_time->setISODate($date_time->format('o'), absint($date_time->format('W')) + 1);
		$periods = new DatePeriod($date_time, new DateInterval('P1D'), 7);
		$days    = array_map(function ($datetime) {
			return $datetime->format('j M');
		}, iterator_to_array($periods));

		return $days[0] . '-' . $days[count($days) - 1];
	} elseif ($param === 'weekend') {
		$date_time             = new DateTime('next Saturday');
		$periods               = new DatePeriod($date_time, new DateInterval('P1D'), 2);
		$days                  = array_map(function ($datetime) {
			return $datetime->format('j M');
		}, iterator_to_array($periods));

		return $days[0] . '-' . $days[count($days) - 1];
	}
}

/* What's on filters */

add_action('rest_api_init', function () {
	register_rest_route('tix-webhook/v1', '/whats-on-filter', array(
		'methods'             => 'POST',
		'callback'            => 'bech_filter_whats_on_tickets',
		'permission_callback' => '__return_true'
	));
});

function bech_filter_whats_on_tickets(WP_REST_Request $request)
{
	$params = $request->get_params();

	// if (!wp_verify_nonce($params['bech_filter_nonce'], 'bech_filter_nonce_action')) {
	//   $rest_response = rest_ensure_response([
	//     'code' => 'fail',
	//     'message' => 'Something goes wrong',
	//     'data' => [
	//       'status' => 400
	//     ]
	//   ]);

	//   $rest_response->set_status(400);

	//   return $rest_response;
	// }

	$selected_string = bech_get_selected_filters_string($params);

	$args = [
		'post_type' => 'tickets',
		'post_status' => 'publish',
		'numberposts' => 10,
		'orderby' => 'meta_value',
		'meta_key' => '_bechtix_ticket_start_date',
		'order' => 'ASC',
		// 'meta_query'  => [
		// 	[
		// 		'key'     => 'start_date',
		// 		'value'   => date('Y.m.d H:i'),
		// 		'compare' => '>=',
		// 		'type'    => 'DATETIME'
		// 	]
		// ]
	];

	if (!empty($params['from'])) {
		$dt = new DateTime($params['from']);
		$args['meta_query'][] = [
			'key'     => '_bechtix_ticket_start_date',
			'value'   => $dt->format('Y-m-d H:i:s'),
			'compare' => '>=',
			'type'    => 'DATETIME'
		];

		if (!empty($params['to'])) {
			$dt = new DateTime($params['to']);
			$args['meta_query'][] = [
				'key'     => '_bechtix_ticket_start_date',
				'value'   => $dt->format('Y-m-d H:i:s'),
				'compare' => '<=',
				'type'    => 'DATETIME'
			];
		}
	} else {
		if (!empty($params['time'])) {
			if ($params['time'] === 'today') {
				$datetime  = new DateTime('today');
				$next_date = new DateTime('tomorrow');

				$args['meta_query'][] = [
					'key'     => '_bechtix_ticket_start_date',
					'value'   => [$datetime->format('Y-m-d H:i:s'), $next_date->format('Y-m-d H:i:s')],
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				];
			} elseif ($params['time'] === 'tomorrow') {
				$datetime  = new DateTime('tomorrow');
				$next_date = new DateTime('tomorrow');
				$next_date->modify('+1 day');

				$args['meta_query'][] = [
					'key'     => '_bechtix_ticket_start_date',
					'value'   => [$datetime->format('Y-m-d H:i:s'), $next_date->format('Y-m-d H:i:s')],
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				];
			} elseif ($params['time'] === 'next-week') {
				$dt = new DateTime();
				$dt->setISODate($dt->format('o'), absint($dt->format('W')) + 1);
				$periods = new DatePeriod($dt, new DateInterval('P1D'), 7);
				$days    = array_map(function ($datetime) {
					return $datetime->format('Y-m-d H:i:s');
				}, iterator_to_array($periods));

				$args['meta_query'][] = [
					'key'     => '_bechtix_ticket_start_date',
					'value'   => [$days[0], $days[7]],
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				];
			} elseif ($params['time'] === 'weekend') {
				$dt                    = new DateTime('next Saturday');
				$periods               = new DatePeriod($dt, new DateInterval('P1D'), 2);
				$days                  = array_map(function ($datetime) {
					return $datetime->format('Y-m-d H:i:s');
				}, iterator_to_array($periods));
				$args['meta_query'][] = [
					'key'     => '_bechtix_ticket_start_date',
					'value'   => $days,
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				];
			} /* else {
				$dt                    = new DateTime(str_replace('.', '/', $params['time']));
				$next_date = new DateTime(str_replace('.', '/', $params['time']));
				$next_date->modify('+1 day');
				$args['meta_query'][] = [
					'key'     => '_bechtix_ticket_start_date',
					'value'   => [$dt->format('Y-m-d H:i:s'), $next_date->format('Y-m-d H:i:s')],
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				];
			}*/
		}
	}

	if (isset($params['genres'])) {
		$args['tax_query'][] = [
			'taxonomy' => 'genres',
			'field'    => 'slug',
			'terms'    => $params['genres']
		];
	}

	if (isset($params['instruments'])) {
		$args['tax_query'][] = [
			'taxonomy' => 'instruments',
			'field'    => 'slug',
			'terms'    => $params['instruments']
		];
	}

	if (isset($params['festival'])) {
		$events = get_posts([
			'post_type' => 'events',
			'post_status' => 'publish',
			'numberposts' => -1,
			'fields' => 'ids',
			'meta_query' => [
				[
					'key' => '_bechtix_festival_relation',
					'value'    => $params['festival'],
					'compare' => 'IN'
				]
			]
		]);

		$args['meta_query'][] = [
			'key' => '_bechtix_event_relation',
			'value'    => $events,
			'compare' => 'IN'
		];
	}

	if (!empty($params['s'])) {
		$args['s'] = $params['s'];
	}

	$tickets = get_posts($args);
	$data           = "<p class='no-event-message'>There is no events — we're working on a concert program. Now you can read about Bechstein Hall.</p>";

	if (!empty($params['time']) && empty($params['from'])) {
		$date_map = [
			'today' => 'Today',
			'tomorrow' => 'Tomorrow',
			'weekend' => 'This Weekend',
			'next-week' => 'Next Week'
		];
		ob_start(); ?>
		<div class="cms-ul">
			<div class="cms-heading">
				<h2 class="h2-cms"><?php echo $date_map[$params['time']]; ?></h2>
				<h2 class="h2-cms day"><?php echo bech_get_smaller_date($params['time']); ?></h2>
			</div>
			<div class="cms-ul-events">
				<?php foreach ($tickets as $ticket) :
				?>
					<?php get_template_part('inc/components/whats-on-ticket', '', [
						'ticket' => $ticket->ID
					]); ?>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
		$data = ob_get_clean();
	} else {
		$sorted_tickets = bech_sort_tickets($tickets);
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
						?>
							<?php get_template_part('inc/components/whats-on-ticket', '', [
								'ticket' => $ticket->ID
							]); ?>
						<?php endforeach; ?>
					</div>
				</div>
	<?php
			endforeach;
			$data = ob_get_clean();
		endif;
	}

	$rest_response = rest_ensure_response([
		'code'    => 'success',
		'message' => 'Data succesfully updated',
		'data'    => [
			'status'          => 200,
			'html'            => $data,
			'selected_string' => $selected_string,
		]
	]);

	$rest_response->set_status(200);

	return $rest_response;
}

/* What's on filters */

function bech_get_youtube_video_id_from_link($link = '')
{
	preg_match('/watch\?v=(.+)/', $link, $matches);

	return $matches[1];
}

function bech_custom_logo($return = false)
{
	$logo_img = '';
	if ($custom_logo_id = get_theme_mod('custom_logo')) {
		$logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
			'class'    => 'logo custom-logo',
			'itemprop' => 'logo',
		));
	}

	if ($return) {
		return $logo_img;
	} else {
		echo $logo_img;
	}
}


add_action('wp_ajax_get_press_release_posts', 'bech_get_press_release_posts');
add_action('wp_ajax_nopriv_get_press_release_posts', 'bech_get_press_release_posts');

function bech_get_press_release_posts(): void
{
	$args = [
		'post_type'      => 'post',
		'posts_per_page' => 10,
		'post_status'    => 'publish'
	];

	if (!empty($_POST['tag'])) {
		$args['tax_query'][] = [
			'taxonomy' => 'post_tag',
			'field'    => 'slug',
			'terms'    => trim($_POST['tag'])
		];
	}

	if (!empty($_POST['page'])) {
		$args['paged'] = intval($_POST['page']);
	}

	$press_query = new WP_Query($args);

	ob_start();
	?>
	<div class="cms-press-ajax">
		<?php
		if ($press_query->have_posts()) {
			while ($press_query->have_posts()) {
				$press_query->the_post(); ?>
				<a href="<?php echo get_the_permalink(); ?>" class="ui-pressrelease-a w-inline-block">
					<div class="p-20-30 w20"><?php echo get_the_date('j F Y'); ?></div>
					<div class="p-25-40 mar13"><?php echo get_the_title(); ?></div>
				</a>
			<?php }
			wp_reset_postdata();

			if ($press_query->max_num_pages > 1 && intval($_POST['page']) < $press_query->max_num_pages) { ?>
				<a href="#" class="showmore-btn w-inline-block">
					<div>SHOW MORE</div>
				</a>
			<?php }
		} else { ?>
			<p>NO POSTS</p>
		<?php } ?>
	</div>
	<?php
	$html     = ob_get_clean();
	$response = [
		'status' => 'success',
		'html'   => $html
	];
	wp_send_json($response, 200);
	wp_die();
}

add_action('wp_ajax_get_homepage_slider_items', 'bech_get_homepage_slider_items');
add_action('wp_ajax_nopriv_get_homepage_slider_items', 'bech_get_homepage_slider_items');

function bech_get_homepage_slider_items()
{
	if (!wp_verify_nonce($_POST['home_filter_action'], 'home_filter_action_nonce')) {
		return wp_send_json([
			'status'  => 'bad',
			'message' => 'Something went wrong. Please try again later'
		], 400);
	}

	$args = [
		'post_type'      => 'event',
		'posts_per_page' => -1,
		'post_status'    => 'publish'
	];

	if (!empty($_POST['instruments'])) {
		$args['tax_query'][] = [
			'taxonomy' => 'instruments',
			'field'    => 'slug',
			'terms'    => $_POST['instruments']
		];
	}

	if (!empty($_POST['genres'])) {
		$args['tax_query'][] = [
			'taxonomy' => 'genres',
			'field'    => 'slug',
			'terms'    => $_POST['genres']
		];
	}

	if (!empty($_POST['event_tag'])) {
		$args['tax_query'][] = [
			'taxonomy' => 'event_tag',
			'field'    => 'slug',
			'terms'    => $_POST['event_tag']
		];
	}

	if (!empty($_POST['start_date'])) {
		$args['meta_query'][] = [
			'key'     => 'start_date',
			'value'   => $_POST['start_date'],
			'compare' => '>=',
			'type'    => 'DATETIME'
		];
	}

	$tickets_query = new WP_Query($args);
	ob_start();
	if ($tickets_query->have_posts()) {
		while ($tickets_query->have_posts()) {
			$tickets_query->the_post(); ?>
			<div class="slider-wvwnts_slide wo-slider_item wo-slide">
				<div class="link-block">
					<div class="slider-wvwnts_top">
						<?php
						global $post;
						$event_cat = get_the_terms($post, 'event_cat'); ?>
						<img src="<?php echo get_field('event_image', $event_cat[0]); ?>" loading="eager" alt class="img-cover">
						<?php $term_query = wp_get_object_terms($post->ID, [
							'event_tag',
							'genres',
							'instruments'
						]); ?>
						<div class="slider-wvwnts_top-cats">
							<?php foreach ($term_query as $term) : ?>
								<a href="#" class="slider-wvwnts_top-cats_a"><?php echo $term->name; ?></a>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="slider-wvwnts_bottom">
						<div class="p-20-30 w20"><?php echo date('d F', strtotime(get_field('start_date'))); ?></div>
						<div class="p-30-45 bold"><?php the_title(); ?></div>
						<div class="p-17-25 home-card">Couperin, Mesian, Brahms</div>
						<?php $purchase_urls = get_field('purchase_urls'); ?>
						<a bgline="1" href="<?php echo $purchase_urls[0]['link']; ?>" class="booktickets-btn home-page">
							<strong>Book tickets</strong>
						</a>
					</div>
				</div>
			</div>
		<?php }
	} else { ?>
		<p>There is no tickets with this filter parameters</p>
<?php }
	$html = ob_get_clean();

	wp_send_json([
		'status' => 'success',
		'html'   => $html
	]);
	wp_die();
}


function bech_get_format_date_for_whats_on_slide($post_id)
{
	$start_date = strtotime(get_post_meta($post_id, '_bechtix_ticket_start_date', true));
	$end_date = strtotime(get_post_meta($post_id, '_bechtix_ticket_end_date', true));
	$long_date = date('j F', $start_date);
	$time = ', ' . date('H:i', $start_date) . '—' . date('H:i', $end_date);

	return $long_date . $time;
}

function bech_get_ticket_event_data_for_calendar($ticket)
{
	$start_date_unix = strtotime(get_post_meta($ticket->ID, '_bechtix_ticket_start_date', true));
	$end_date_unix = strtotime(get_post_meta($ticket->ID, '_bechtix_ticket_end_date', true));
	return _wp_specialchars(wp_json_encode([
		'name' => $ticket->post_title,
		'description' => $ticket->post_content,
		'startDate' => gmdate('Y-m-d', $start_date_unix),
		'endDate' => gmdate('Y-m-d', $end_date_unix),
		'startTime' => gmdate('H:i', $start_date_unix),
		'endTime' => gmdate('H:i', $end_date_unix),
		'timeZone' => "Europe/Berlin",
		'location' => 'Bechstein Hall',
		'iCalFileName' => $ticket->post_title,
	]), ENT_QUOTES, 'UTF-8', true);
}

function bech_get_purchase_urls($ticket_id)
{
	return json_decode(get_post_meta($ticket_id, '_bechtix_purchase_urls', true), true);
}

function bech_get_purchase_urls_attribute($ticket_id)
{
	return _wp_specialchars(get_post_meta($ticket_id, '_bechtix_purchase_urls', true), ENT_QUOTES, 'UTF-8', true);
}

function bech_get_sale_status_string_value($sale_status)
{
	$sale_statuses = [
		'No Status',
		'Few tickets',
		'Sold out',
		'Cancelled',
		'Not scheduled'
	];

	return $sale_statuses[$sale_status];
}
