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
                      <div class="filters-top-div">
                        <div class="p-20-30">Time to go</div>
                        <input type="text" id="filter-date" class="calendar-btn__input" placeholder="Calendar" name="time">
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
                                <input data-filter="checkbox" type="checkbox" id="checkbox-<?php echo $genre->term_id; ?>" name="genre[]" data-name="<?php echo $genre->slug; ?>" value="<?php echo $genre->slug; ?>" style="opacity:0;position:absolute;z-index:-1" />
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
                              <input data-filter="checkbox" type="checkbox" id="checkbox-<?php echo $instrument->term_id; ?>" name="instrument[]" data-name="<?php echo $instrument->slug; ?>" value="<?php echo $instrument->slug; ?>" style="opacity:0;position:absolute;z-index:-1" />
                              <span class="filter-cbx ischbx w-form-label" for="checkbox-<?php echo $instrument->term_id; ?>"><?php echo $instrument->name; ?></span>
                            </label>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php $festivals = get_posts([
                      'post_type' => 'festivals',
                      'post_status' => 'publish',
                      'numberposts' => -1
                    ]);

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
                    <?php endif; ?>
                    <div class="filters-div">
                      <div class="filters-top-div">
                        <div class="p-20-30">Event</div>
                      </div>
                      <div class="filters-bottom-div"><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">contemporary</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">minimalism</span>
                        </label></div>
                    </div>
                    <?php wp_nonce_field('bech_filter_nonce_action', 'bech_filter_nonce'); ?>
                    <input type="submit" value="Submit" data-wait="Please wait..." class="hidden-input w-button" />
                  </div>
                </div>
              </form>
            </div>
            <div class="catalog-column">
              <h1 class="h1-75-90"><?php the_title(); ?></h1>
              <div id="selected-filters" class="filters-line-text">
                <div>you choose &#x27;<span data-filter="choosen">25 nov 2022—26 nov 2022.</span>’ in filters.</div><a id="clear" href="#" class="clearfilter-btn"> clear filters</a>
              </div>
              <div id="tickets-container" class="cms-tems">
                <?php
                $tickets = get_posts([
                  'post_type' => 'tickets',
                  'post_status' => 'publish',
                  'numberposts' => 10,
                  'orderby' => 'meta_value',
                  'meta_key' => '_bechtix_ticket_start_date',
                  'order' => 'ASC',
                ]);

                $sorted_tickets = bech_sort_tickets($tickets);

                if (!empty($sorted_tickets)) :
                  foreach ($sorted_tickets as $date => $tickets) : ?>
                    <div class="cms-ul">
                      <div class="cms-heading">
                        <h2 class="h2-cms"><?php echo date('d F', strtotime($date)); ?></h2>
                        <h2 class="h2-cms day"><?php echo date('l', strtotime($date)); ?></h2>
                      </div>
                      <div class="cms-ul-events">
                        <?php foreach ($tickets as $ticket) :
                          $event = get_post(get_post_meta($ticket->ID, '_bechtix_event_relation', true));
                          $purchase_urls = get_post_meta($ticket->ID, '_bechtix_purchase_urls', true);
                          $purchase_urls_normal = json_decode($purchase_urls, true);
                          $benefits_json = get_post_meta($ticket->ID, '_bechtix_ticket_benefits', true);
                          $benefits = _wp_specialchars($benefits_json, ENT_QUOTES, 'UTF-8', true);
                        ?>
                          <div class="cms-li" data-ticket_benefits="<?php echo $benefits; ?>">
                            <div class="cms-li_mom-img">
                              <?php echo wp_get_attachment_image(
                                get_post_meta($event->ID, '_bechtix_event_image', true),
                                'medium',
                                false,
                                [
                                  'class' => 'cms-li_img',
                                  'style' => 'max-height: 270rem'
                                ]
                              ); ?>
                              <?php $sale_status = get_post_meta($ticket->ID, '_bechtix_sale_status', true);
                              $sale_statuses = [
                                'No Status',
                                'Few tickets',
                                'Sold out',
                                'Cancelled',
                                'Not scheduled'
                              ];
                              if ($sale_status === '2' || $sale_status === '3') :
                              ?>
                                <div class="cms-li_sold-out-banner"><?php echo $sale_statuses[intval($sale_status)]; ?></div>
                              <?php endif; ?>
                            </div>
                            <div class="cms-li_content">
                              <div class="cms-li_time-div">
                                <div class="p-30-45"><?php echo bech_get_ticket_times($ticket->ID); ?></div>
                                <div class="p-17-25 italic"><?php echo get_post_meta($ticket->ID, '_bechtix_duration', true); ?></div>
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
                                <?php
                                if ($sale_status === '' || $sale_status === '0' || $sale_status === '1') : ?>
                                  <a bgline="1" href="<?php echo $purchase_urls_normal[0]['link']; ?>" class="booktickets-btn">
                                    <strong>Book tickets</strong>
                                  </a>
                                <?php else : ?>
                                  <a bgline="2" href="#" class="booktickets-btn sold-out">
                                    <strong><?php echo $sale_statuses[intval($sale_status)]; ?></strong>
                                  </a>
                                <?php endif; ?>
                                <a href="<?php echo get_the_permalink($event->ID); ?>" class="readmore-btn w-inline-block">
                                  <div>read more</div>
                                  <div> →</div>
                                </a>
                              </div>
                              <?php if ($sale_status === '' || $sale_status === '0') : ?>
                                <div class="cms-li_price"><?php echo bech_get_ticket_from_to_price($ticket->ID); ?></div>
                              <?php elseif ($sale_status === '1') : ?>
                                <div class="cms-li_price" style="color: #B47171;"><?php echo $sale_statuses[intval($sale_status)]; ?></div>
                              <?php endif; ?>
                            </div>
                            <div class="cms-li_actions-div biger">
                              <a bgline="1" href="<?php echo $purchase_urls_normal[0]['link']; ?>" class="booktickets-btn">
                                <strong>Book tickets</strong>
                              </a>
                              <?php if ($sale_status === '' || $sale_status === '0') : ?>
                                <div class="cms-li_price"><?php echo bech_get_ticket_from_to_price($ticket->ID); ?></div>
                              <?php elseif ($sale_status === '1') : ?>
                                <div class="cms-li_price" style="color: #B47171;"><?php echo $sale_statuses[intval($sale_status)]; ?></div>
                              <?php endif; ?>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                <?php endforeach;
                endif; ?>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>
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