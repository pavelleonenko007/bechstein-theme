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
  <div class="css w-embed">
    <style>
      html {
        font-size: 1px
      }

      .booktickets-btn.sold-out {
        pointer-events: none
      }

      .yourvisit-column .ui-boxoffice-block:nth-child(1) .t-line {
        display: none
      }

      .tmp3 .yourvisit-column .ui-boxoffice-block:nth-child(1) {
        padding-top: 0px
      }

      .grey-z,
      .white-z {
        top: calc(100vh - 80rem)
      }

      .images-grid a:nth-child(1) {}

      .images-grid a:nth-child(6n+1) {
        -ms-grid-column: span 3 !Important;
        grid-column-start: span 3 !Important;
        -ms-grid-column-span: 3 !Important;
        grid-column-end: span 3 !Important;
        -ms-grid-row: span 1;
        grid-row-start: span 1;
        -ms-grid-row-span: 1;
        grid-row-end: span 1;
      }

      .images-grid a:nth-child(6n+2) {
        -ms-grid-column: span 2 !Important;
        grid-column-start: span 2 !Important;
        -ms-grid-column-span: 2 !Important;
        grid-column-end: span 2 !Important;
        -ms-grid-row: span 1;
        grid-row-start: span 1;
        -ms-grid-row-span: 1;
        grid-row-end: span 1;
      }

      .b-line {
        transition: all 300ms ease
      }

      .body.menuopen .b-line:nth-child(2) {
        opacity: 0;
      }

      .body.menuopen .header {
        background: #030e14
      }

      *[bgline] * {
        position: relative;
        z-index: 3
      }

      *[bgline="1"]:after,
      *[bgline="1"]:before {
        content: "";
        position: absolute;
        pointer-events: none;
        width: 50%;
        height: 100%;
        background: red;
        top: 0;
        background: url(https://assets.website-files.com/624c5364ec3046603b0a108f/6298d10708a1a15575de79c0_Subtract.svg);
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-position-x: left;
        left: 1px;
      }

      *[bgline="1"]:before {
        right: 1px;
        background-position-x: right;
        left: auto;
      }


      *[bgline="2"]:after,
      *[bgline="2"]:before {
        content: "";
        position: absolute;
        pointer-events: none;
        width: 50%;
        height: 100%;
        background: red;
        top: 0;
        background: url(https://assets.website-files.com/624c5364ec3046603b0a108f/624d7883da82bf2a87ea1653_soldoutbg.svg);
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-position-x: left;
        left: 1px;
      }

      *[bgline="2"]:before {
        right: 1px;
        background-position-x: right;
        left: auto;
      }




      *[bgline="3"]:after,
      *[bgline="3"]:before {
        content: "";
        position: absolute;
        pointer-events: none;
        width: 50%;
        height: 100%;
        background: red;
        top: 0;
        background: url(https://assets.website-files.com/624c5364ec3046603b0a108f/62a09552973cac62813658dd_Subtract.svg);
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-position-x: left;
        left: 1px;
      }

      *[bgline="3"]:before {
        right: 1px;
        background-position-x: right;
        left: auto;
      }


      .year-horizontal.first,
      .cursor {
        pointer-events: none
      }

      .breadcrumbs-link:after {
        content: " → ";
        white-space: pre;
      }

      .breadcrumbs-link:nth-last-child(1):after {
        display: none
      }

      .search-line-input {
        background-position-y: calc(100% - 4rem);
      }

      .catalog-column:after {
        content: "";

        content: "";
        position: absolute;
        z-index: -1;
        background: white;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        top: 42rem;
        border-radius: 60px 0px 0px 0px;
      }

      .catalog-column.fest-col:after {
        top: 0rem;
      }

      .cms-tems .cms-ul:nth-last-child(1) .cms-li:nth-last-child(1) {
        border: none
      }

      .cms-li_tags-div.in-left .cms-li_tag-link {
        border-radius: 5px;
        margin-right: 10rem
      }

      .ui_alert-block a:after {
        content: " →"
      }

      .event-row_right-col>h2 {
        margin-top: 55rem;
      }

      .yvisit-styk a:nth-child(2) {
        margin-top: 19rem
      }

      a,
      * {
        text-decoration-skip-ink: none;
      }

      .payment-tabs {
        width: calc(100% + 40rem)
      }

      p strong {
        font-weight: 500
      }

      .rich.cont p {
        font-size: 20rem;
        line-height: 30rem;
        color: #030E14;
        margin-bottom: 10rem
      }

      .rich.cont p a {
        color: #030E14;
        text-decoration: none;
        font-weight: 500
      }

      .form-filter-press .filter-chek {
        margin-right: 20rem
      }

      .filter-chek .w--redirected-checked~span {
        text-decoration: underline
      }

      .black-theme * {
        color: white
      }

      .navbar.grey-head *,
      .navbar.grey-head-scroll * {
        color: white
      }

      .navbar.grey-head,
      .navbar.grey-head-scroll {
        transition: all 500ms ease;
        background-color: #030e14;
      }

      .navbar.grey-head .r-head-sec a,
      .navbar.grey-head-scroll .r-head-sec a {
        color: white;
        filter: invert(1)
      }

      .navbar.grey-head .r-head-sec a div,
      .navbar.grey-head-scroll .r-head-sec a div {
        color: black;
      }

      .history-page header .right-header *,
      .history-page .navbar {
        transition: all 500ms ease;
      }

      .history-page .navbar {
        background-color: #f5f5f0;
      }

      .ready-hist header .right-header * {
        color: white;
      }

      .ready-hist .navbar {
        background-color: transparent;
      }

      .year-lottie g g:nth-child(1) path {
        stroke: #dcca99;
        stroke-opacity: 0.3;
        stroke-width: 5px;
      }

      .year-lottie g g:nth-child(2) path {
        stroke: #dcca99;
        stroke-width: 8px;
      }

      .year-btn {
        height: 10rem;
      }

      .year-btn .year-in-counter {
        transform: scale(0);
        opacity: 0;
      }

      .year-btn .year-img {
        opacity: 1
      }

      .year-btn.active {
        height: 100rem;
      }

      .year-btn.active .year-in-counter {
        transform: scale(1);
        opacity: 1;
      }

      .year-btn.active .year-img {
        opacity: 0
      }

      .year-big-counter {
        transition: all 500ms cubic-bezier(1, .258, .45, .913)
      }

      .year-big-counter {
        color: #030E14;
      }

      .year-big-counter.second-con {
        color: #030E1410;
      }

      .year-big-counter.strk {
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: #DCCA99;
        color: transparent;
      }

      .scroll-view.-touchable {
        overflow: hidden;
        height: 100vh;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
      }

      .slider-days_month-days {
        counter-reset: slidercard;
      }

      .slider-days_rad .slider-days_rad-ins:after {
        counter-increment: slidercard;
        content: counter(slidercard);
      }

      .w-form-formradioinput--inputType-custom.w--redirected-checked {
        border-top-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
        border-right-width: 0px;
      }

      .slider-days_rad-ins {
        box-shadow: none !Important
      }

      .slider-wvwnts_slide {
        min-width: calc(100% - 20rem)
      }

      .splide__pagination.splide__pagination--ltr,
      .splide__arrows.splide__arrows--ltr,
      .slide_sr {
        display: none !important
      }

      .splide__track span {
        font-size: 0px
      }

      .burger-menu * {
        color: white
      }

      .burger-menu .foo-marger {
        background-color: rgb(255 255 255 / 20%);
      }

      .burger-menu .link-soc {
        border-color: rgb(255 255 255 / 50%);
      }

      .search-row .cms-li_tag-link {
        background: white
      }

      .cms-li_actions-div.biger .booktickets-btn {
        margin-bottom: 12rem;
        margin-right: 0px
      }

      @media screen and (min-width: 1920px) {

        .cms-li_content .booktickets-btn,
        .cms-li_content .cms-li_price {
          display: none
        }

        .event-row_right-col>* {
          max-width: 755rem;
          margin-left: auto;
          margin-right: auto
        }
      }

      @media screen and (min-width: 1280px) {

        .head-event-content {
          min-height: calc(100vh - 146rem);
        }

      }

      @media screen and (max-width: 991px) {

        .catalog-column .h1-75-90 {
          margin-left: -30rem
        }

        .cms-li_time-div .p-30-45 {
          min-width: 190rem
        }

      }


      @media screen and (max-width: 765px) {

        .center-col .link-foo-small,
        .center-col .foo-marger {
          display: none
        }

        .navbar.grey-head {
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(30%, #030e14), color-stop(65%, rgb(3 14 20 / 80%)), to(transparent));
          background-image: linear-gradient(180deg, #030e14 30%, rgb(3 14 20 / 80%) 65%, transparent);

        }

        .navbar.grey-head-scroll {
          background-color: transparent;
          background-image: linear-gradient(180deg, #030e14 30%, rgb(3 14 20 / 98%) 65%, transparent);
        }



        .navbar.grey-head {
          background-color: transparent;
        }


        .payment-tabs {
          width: 100%;
        }
      }

      @media screen and (max-width: 495px) {
        .head-event-content {
          min-height: calc(100vh - 160rem)
        }

        .catalog-column .h1-75-90 {
          margin-left: 20rem;
        }

        .catalog-column:after {
          content: "";
          position: absolute;
          z-index: -1;
          background: white;
          left: 0px;
          right: 0px;
          top: 0px;
          bottom: 0px;
          top: 25rem;
          border-radius: 60px 0px 0px 0px;
        }

        .payment-tabs {
          width: calc(100% + 20rem);
        }

        .form-filter-press .filter-chek {
          margin-right: 0rem;
        }

      }


      @media only screen and (orientation: landscape) and (max-height: 495px) {
        .body * {
          opacity: 0
        }

        .body:after {
          content: "";
          content: "";
          background: url(https://assets.website-files.com/624c5364ec3046603b0a108f/62b317d53ecbe881bb1e3e39_rotation.png);
          position: fixed;
          width: 100%;
          height: 100%;
          top: 0;
          background-position: center;
          background-repeat: no-repeat;
          background-size: 40px;
          transform: rotateY(180deg);
        }
      }
    </style>
  </div>
  <?php get_header(); ?>
  <?php
  global $wp_query;
  // echo '<pre>';
  // var_dump($wp_query->posts);
  // echo '</pre>'; 
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