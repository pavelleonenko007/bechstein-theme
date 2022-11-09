<?php
/*
Template name: What's on
*/
?>

<!DOCTYPE html>

<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="62bc3fe7d9cc6100802615a2" data-wf-site="62bc3fe7d9cc6134bf261592">

<?php get_template_part("header_block", ""); ?>

<body <?php body_class("body"); ?>>
  <?php get_template_part('inc/components/loader'); ?>
  <div class="page-wrapper">
    <?php get_header(); ?>
    <main class="wrapper">
      <section class="section wf-section">
        <div class="breadcrumbs-line">
          <?php if (function_exists('bcn_display')) bcn_display(); ?>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="catalog-row">
              <div class="filter-column">
                <form data-filter="form" class="filter-styk">
                  <div class="search-filter">
                    <input type="search" value="<?php echo get_search_query() ?>" class="search-line-input w-input" maxlength="256" name="s" placeholder="search by keyword…" id="s" required="" />
                    <input type="submit" value="Search" class="search-line-btn w-button" />
                  </div>
                  <div class="filters-form">
                    <div>
                      <div class="filters-div">
                        <input class="visually-hidden" name="from" value="<?php echo !empty($_GET['from']) ? $_GET['from'] : ''; ?>" />
                        <input class="visually-hidden" name="to" value="<?php if (!empty($_GET['to'])) echo $_GET['to']; ?>" />

                        <div class="filters-top-div">
                          <div class="p-20-30">Time to go</div>
                          <div id="calendar-widget"></div>
                          <!-- <a href="#" class="calendar-btn w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt="" class="img-calendar" />

                            <button class="calendar-btn__reset" data-type="reset">✕</button>
                            <div class="calendar-btn__close">Close</div>
                            <div id="filter-calendar" class="filter-calendar"></div>
                          </a> -->
                        </div>
                        <div class="filters-bottom-div">
                          <label class="w-radio cbx-mom">
                            <div class="w-radio-input w-radio-input--inputType-custom cbx"></div>
                            <input type="radio" id="today" name="time" value="today" style="opacity:0;position:absolute;z-index:-1" />
                            <span class="filter-cbx w-form-label" for="today">today</span>
                          </label>
                          <label class="w-radio cbx-mom">
                            <div class="w-radio-input w-radio-input--inputType-custom cbx"></div>
                            <input type="radio" id="tomorrow" name="time" value="tomorrow" style="opacity:0;position:absolute;z-index:-1" />
                            <span class="filter-cbx w-form-label" for="tomorrow">tomorrow</span>
                          </label>
                          <label class="w-radio cbx-mom">
                            <div class="w-radio-input w-radio-input--inputType-custom cbx"></div>
                            <input type="radio" id="weekend" name="time" value="weekend" style="opacity:0;position:absolute;z-index:-1" />
                            <span class="filter-cbx w-form-label" for="weekend">this weekend</span>
                          </label>
                          <label class="w-radio cbx-mom">
                            <div class="w-radio-input w-radio-input--inputType-custom cbx"></div>
                            <input type="radio" id="next-week" name="time" value="next-week" style="opacity:0;position:absolute;z-index:-1" />
                            <span class="filter-cbx w-form-label" for="next-week">next week</span>
                          </label>
                        </div>
                      </div>
                      <?php $genres = bech_get_custom_taxonomies('genres');
                      if (!empty($genres)) : ?>
                        <div class="filters-div">
                          <div class="filters-top-div">
                            <div class="p-20-30">Genre</div>
                          </div>
                          <div class="filters-bottom-div">
                            <?php
                            $counter = 0;
                            foreach ($genres as $index => $genre) :
                              if ($counter <= 4) : ?>
                                <label class="w-checkbox cbx-mom">
                                  <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                                  <input data-filter="checkbox" type="checkbox" id="checkbox-<?php echo $genre->term_id; ?>" name="genres[]" data-name="<?php echo $genre->slug; ?>" value="<?php echo $genre->slug; ?>" <?php if (isset($_GET['genres']) && in_array($genre->slug, $_GET['genres'])) echo 'checked'; ?> style="opacity:0;position:absolute;z-index:-1" />
                                  <span class="filter-cbx ischbx w-form-label" for="checkbox-<?php echo $genre->term_id; ?>"><?php echo $genre->name; ?></span>
                                </label>
                            <?php
                                $counter++;
                              endif;
                            endforeach; ?>
                            <?php if (count($genres) > 5) : ?>
                              <a href="#" class="show-all-btn">show all</a>
                            <?php endif; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      <?php $instruments = bech_get_custom_taxonomies('instruments');
                      if (!empty($instruments)) : ?>
                        <div class="filters-div">
                          <div class="filters-top-div">
                            <div class="p-20-30">Instruments</div>
                          </div>
                          <div class="filters-bottom-div">
                            <?php foreach ($instruments as $instrument) : ?>
                              <label class="w-checkbox cbx-mom">
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                                <input data-filter="checkbox" type="checkbox" id="checkbox-<?php echo $instrument->term_id; ?>" name="instruments[]" data-name="<?php echo $instrument->slug; ?>" value="<?php echo $instrument->slug; ?>" <?php if (isset($_GET['instruments']) && in_array($instrument->slug, $_GET['instruments'])) echo 'checked'; ?> style="opacity:0;position:absolute;z-index:-1" />
                                <span class="filter-cbx ischbx w-form-label" for="checkbox-<?php echo $instrument->term_id; ?>"><?php echo $instrument->name; ?></span>
                              </label>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      <?php
                      $festivals = bech_get_specials_filters();
                      if (!empty($festivals)) : ?>
                        <div class="filters-div">
                          <div class="filters-top-div">
                            <div class="p-20-30">Specials and Festivals</div>
                          </div>
                          <div class="filters-bottom-div">
                            <?php foreach ($festivals as $festival) : ?>
                              <label class="w-checkbox cbx-mom">
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                                <input type="checkbox" id="festival-<?php echo $festival->ID; ?>" name="festival[]" style="opacity:0;position:absolute;z-index:-1" value="<?php echo $festival->ID; ?>" />
                                <span class="filter-cbx ischbx w-form-label" for="festival-<?php echo $festival->ID; ?>"><?php echo $festival->post_title; ?></span>
                              </label>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      <?php endif;
                      $event_tags = bech_get_custom_taxonomies('event_tag');
                      if (!empty($event_tags)) : ?>
                        <div class="filters-div">
                          <div class="filters-top-div">
                            <div class="p-20-30">Event</div>
                          </div>
                          <div class="filters-bottom-div">
                            <?php foreach ($event_tags as $event_tag) : ?>
                              <label class="w-checkbox cbx-mom">
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                                <input type="checkbox" id="event_tag-<?php echo $event_tag->term_id; ?>" name="event_tag[]" value="<?php echo $event_tag->slug; ?>" style="opacity:0;position:absolute;z-index:-1" />
                                <span class="filter-cbx ischbx w-form-label" for="event_tag-<?php echo $event_tag->term_id; ?>"><?php echo $event_tag->name; ?></span>
                              </label>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      <input type="hidden" name="action" value="get_filtered_tickets">
                      <?php wp_nonce_field('bech_filter_nonce_action', 'bech_filter_nonce'); ?>
                      <input type="submit" value="Submit" data-wait="Please wait..." class="hidden-input w-button" />
                    </div>
                  </div>
                </form>
              </div>
              <div class="catalog-column">
                <h1 class="h1-75-90"><?php the_title(); ?></h1>
                <?php $selected_filter_string = bech_get_selected_filters_string($_GET); ?>
                <div id="selected-filters" class="filters-line-text <?php echo !empty($selected_filter_string) ? 'filters-line-text--active' : ''; ?>">
                  <div>you choose &#x27;<span data-filter="choosen"><?php echo $selected_filter_string; ?></span>’ in filters.</div><a id="clear" href="#" class="clearfilter-btn"> clear filters</a>
                </div>
                <div id="tickets-container" class="cms-tems">
                  <?php
                  $events_args = [
                    'post_type' => 'events',
                    'post_status' => 'publish',
                    'numberposts' => 10,
                    'fields' => 'ids',
                  ];

                  if (!empty($_GET['genres'])) {
                    $events_args['tax_query'][] = [
                      'taxonomy' => 'genres',
                      'field'    => 'slug',
                      'terms'    => $_GET['genres']
                    ];
                  }

                  if (!empty($_GET['instruments'])) {
                    $events_args['tax_query'][] = [
                      'taxonomy' => 'instruments',
                      'field'    => 'slug',
                      'terms'    => $_GET['instruments']
                    ];
                  }

                  $event_ids = get_posts($events_args);

                  $tickets_args = [
                    'post_type' => 'tickets',
                    'post_status' => 'publish',
                    'numberposts' => 10,
                    'orderby' => 'meta_value',
                    'meta_key' => '_bechtix_ticket_start_date',
                    'order' => 'ASC',
                    'meta_query' => [
                      [
                        'key' => '_bechtix_event_relation',
                        'value' => $event_ids,
                        'compare' => 'IN'
                      ]
                    ]
                  ];

                  if (!empty($_GET['from'])) {
                    $dt = new DateTime($_GET['from']);
                    $tickets_args['meta_query'][] = [
                      'key'     => '_bechtix_ticket_start_date',
                      'value'   => $dt->format('Y-m-d H:i:s'),
                      'compare' => '>=',
                      'type'    => 'DATETIME'
                    ];
                  }

                  if (!empty($_GET['to'])) {
                    $dt = new DateTime($_GET['to']);
                    $tickets_args['meta_query'][] = [
                      'key'     => '_bechtix_ticket_start_date',
                      'value'   => $dt->format('Y-m-d H:i:s'),
                      'compare' => '<=',
                      'type'    => 'DATETIME'
                    ];
                  }

                  $tickets = get_posts($tickets_args);

                  $sorted_tickets = bech_sort_tickets($tickets);

                  if (!empty($sorted_tickets)) :
                    foreach ($sorted_tickets as $date => $tickets) : ?>
                      <div class="cms-ul">
                        <div class="cms-heading">
                          <h2 class="h2-cms"><?php echo date('d F', strtotime($date)); ?></h2>
                          <h2 class="h2-cms day"><?php echo date('l', strtotime($date)); ?></h2>
                        </div>
                        <div class="cms-ul-events">
                          <?php foreach ($tickets as $ticket) : ?>
                            <?php get_template_part('inc/components/whats-on-ticket', '', [
                              'ticket' => $ticket->ID
                            ]); ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    <?php endforeach;
                  else : ?>
                    <p class="no-event-message">There is no events — we're working on a concert program. Now you can read about Bechstein Hall.</p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </section>
    </main>
    <?php get_footer(); ?>
  </div>
  <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script>
    let headwidth;

    $(".b-menu").click(function() {

      headwidth = $(".navbar").width();
      console.log(headwidth);
      $(".header").css({
        "max-width": headwidth
      });

      if ($(".body").hasClass("menuopen"))

      {
        $(".body").removeClass("menuopen");
        $(".navbar").removeClass("grey-head");
      } else

      {
        $(".body").addClass("menuopen");
        $(".navbar").addClass("grey-head");
      }

    });



    document.addEventListener("DOMContentLoaded", function() {
      function reportWindowSize() {
        headwidth = $(".navbar").width();
        console.log(headwidth);
        $(".header").css({
          "max-width": headwidth
        });
      }

      window.onresize = reportWindowSize;
    });
  </script>
  <?php get_template_part("footer_block", ""); ?>