<?php
/*
Template name: Contacts
*/
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="62bc3fe7d9cc61f84a261597" data-wf-site="62bc3fe7d9cc6134bf261592">
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

            .body.menuopen .b-line:nth-child(1) {
                transform: rotate(45deg) translateY(15rem) translateX(12.5rem);
                transform-origin: 50% 50%;
            }

            .body.menuopen .b-line:nth-child(2) {
                opacity: 0;
            }

            .body.menuopen .b-line:nth-child(3) {
                transform: rotate(-45deg) translateY(-5rem) translateX(2.5rem);
                transform-origin: 50% 50%;
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
                background: url(https://uploads-ssl.webflow.com/624c5364ec3046603b0a108f/6298d10708a1a15575de79c0_Subtract.svg);
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
                background: url(https://uploads-ssl.webflow.com/624c5364ec3046603b0a108f/62a09552973cac62813658dd_Subtract.svg);
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

                .navbar.grey-head {
                    background-color: transparent;
                }


                .navbar {
                    background-image: linear-gradient(180deg, #f5f5f0 30%, #f5f5f005 65%, transparent);
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
                    background: url(https://uploads-ssl.webflow.com/624c5364ec3046603b0a108f/62b317d53ecbe881bb1e3e39_rotation.png);
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
    <main class="wrapper">
        <section class="section wf-section">
            <div class="breadcrumbs-line">
                <?php if (function_exists('bcn_display')) bcn_display(); ?>
            </div>
            <div class="catalog-row m-revert cont">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="filter-column vis">
                            <div class="marer"></div>
                            <?php $sidebar_contacts = get_field('sidebar_contacts');
                            if (!empty($sidebar_contacts)) : ?>
                                <div class="cont-styk">
                                    <?php foreach ($sidebar_contacts as $sidebar_contact) : ?>
                                        <div class="cont-line">
                                            <div class="p-35-45 w40">
                                                <?php echo $sidebar_contact['contact_header']; ?>
                                            </div>
                                            <a href="<?php echo 'mailto:' . $sidebar_contact['contact_text']; ?>" class="p-20-30 w20">
                                                <?php echo $sidebar_contact['contact_text']; ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="catalog-column cont">
                            <h1 class="h1-75-90 cont-h">
                                <?php the_title(); ?>
                            </h1>
                            <div class="p-25-40 cont">
                                <?php echo get_field('address') ?>
                            </div>
                            <div class="p-25-40 cont">
                                <?php echo get_field('telephone') ?>
                            </div>
                            <div class="map-embe w-embed">
                                <?php echo do_shortcode(get_field('map_html_code')) ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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
    <?php get_template_part("footer_block", ""); ?>