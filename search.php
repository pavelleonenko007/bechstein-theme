<?php
/*
Template name: Whats on - search results
*/
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Wed Aug 24 2022 15:21:23 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="62503ae70435302bb070be82" data-wf-site="624c5364ec3046603b0a108f">
<?php get_template_part("header_block", ""); ?>

<body <?php body_class("body"); ?>>
  <?php wp_body_open(); ?>
  <?php get_template_part('inc/components/loader'); ?>
  <div class="page-wrapper">
    <?php get_header(); ?>
    <?php
    global $wp_query;
    ?>
    <main class="wrapper">
      <section class="section wf-section">
        <div class="search-row">
          <div class="filter-column"></div>
          <div class="search-column">
            <h1 class="h1-75-90 searh">SEARCH RESULTS <span class="search-span"><?php echo count($wp_query->posts); ?></span></h1>
            <form method="get" action="<?php echo home_url('/') ?>" class="search w-form">
              <input type="search" class="search0page-line w-input" autofocus="true" maxlength="256" value="<?php echo get_search_query() ?>" name="s" placeholder="search by keyword…" id="search" required>
              <input type="submit" value="Search" class="search-button w-button">
            </form>
            <?php $sorted_tickets = bech_sort_tickets($wp_query->posts); ?>
            <div class="cms-tems">
              <?php if (!empty($sorted_tickets)) :
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
            <h2 class="h2-cms no-events">there's no events</h2>
          </div>
        </div>
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
  <script type="text/javascript" src="//thevogne.ru/bech/script-cus.js?ver=6.0.1" id="script-cus-js"></script>
  <?php get_template_part("footer_block", ""); ?>