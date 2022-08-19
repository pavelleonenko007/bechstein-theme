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
                        <div class="p-20-30">Time to go</div><a href="#" class="calendar-btn w-inline-block">
                          <img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt="" class="img-calendar" />
                          <div>calendar</div>
                        </a>
                      </div>
                      <div class="filters-bottom-div">
                        <label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                          <input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1" />
                          <span class="filter-cbx w-form-label" for="checkbox">today</span>
                        </label>
                        <label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                          <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" />
                          <span class="filter-cbx w-form-label" for="checkbox-2">tomorrow</span>
                        </label>
                        <label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                          <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" />
                          <span class="filter-cbx w-form-label" for="checkbox-2">this weekend</span>
                        </label>
                        <label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                          <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" />
                          <span class="filter-cbx w-form-label" for="checkbox-2">next week</span>
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
                          <?php foreach ($genres as $genre) : ?>
                            <label class="w-checkbox cbx-mom">
                              <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div>
                              <input data-filter="checkbox" type="checkbox" id="checkbox-<?php echo $genre->term_id; ?>" name="genre[]" data-name="<?php echo $genre->slug; ?>" value="<?php echo $genre->slug; ?>" style="opacity:0;position:absolute;z-index:-1" />
                              <span class="filter-cbx ischbx w-form-label" for="checkbox-<?php echo $genre->term_id; ?>"><?php echo $genre->name; ?></span>
                            </label>
                          <?php endforeach; ?>
                          <a href="#" class="show-all-btn">show all</a>
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
                    <div class="filters-div">
                      <div class="filters-top-div">
                        <div class="p-20-30">Specials and Festivals</div>
                      </div>
                      <div class="filters-bottom-div"><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">autumn festival ‘22</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">winter piano festival</span>
                        </label></div>
                    </div>
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
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
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
                <?php $tickets = get_posts([
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