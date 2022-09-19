<?php
/*
Template name: Press office template
*/
?>
    <!DOCTYPE html>
    <!-- This site was created in Webflow. https://www.webflow.com -->
    <!-- Last Published: Wed Aug 24 2022 15:21:23 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="625fd286caf248048073c07c" data-wf-site="624c5364ec3046603b0a108f">
<?php get_template_part( "header_block", "" ); ?>

<body <?php body_class( "body" ); ?>>
<?php wp_body_open(); ?>
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

            .images-grid a:nth-child(1) {
            }

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

            .event-row_right-col > h2 {
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

            .filter-chek .w--redirected-checked ~ span {
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

                .event-row_right-col > * {
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
<?php get_header();
the_post(); ?>
    <main class="wrapper">
        <section class="section wf-section">
            <div class="breadcrumbs-line">
				<?php if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				} ?>
            </div>
        </section>
        <section class="section wf-section">
            <div class="catalog-row m-revert">
                <div class="festival-column yvisit">
                    <div class="yvisit-styk yvis">
						<?php $hide_sidebar = get_field( 'hide_original_sidebar' );
						! $hide_sidebar && dynamic_sidebar( 'custom_bechstein_sidebar' );
						?>
						<?php $sidebar_items = get_field( 'sidebar_flexible_content' );
						if ( ! empty( $sidebar_items ) ) : ?>
							<?php foreach ( $sidebar_items as $sidebar_item ) : ?>
								<?php if ( $sidebar_item['acf_fc_layout'] === 'list_block' ) : ?>
                                    <div class="page-sidebar-block">
                                        <div id="w-node-b4f2a2bf-0315-f758-a56f-5ed7b3867d97-e526159f"
                                             class="p-30-40 med w35">
											<?php echo $sidebar_item['heading']; ?>
                                        </div>
                                        <div class="page-sidebar-block__content">
											<?php foreach ( $sidebar_item['link_list'] as $list_item ) : ?>
                                                <a href="<?php echo $sidebar_item['item_link']; ?>"
                                                   class="ui-yourvisit_link-in w-inline-block" target="_blank">
                                                    <div class="p-20-30 med w20"><?php echo $list_item['item_title']; ?></div>
                                                    <div class="p-17-25 mar10"><?php echo $list_item['item_short_description']; ?></div>
                                                </a>
											<?php endforeach; ?>
                                        </div>
                                    </div>
								<?php elseif ( $sidebar_item['acf_fc_layout'] === 'small_text_block' ) : ?>
                                    <div class="page-sidebar-block">
                                        <div id="w-node-b4f2a2bf-0315-f758-a56f-5ed7b3867d97-e526159f"
                                             class="p-30-40 med w35">
											<?php echo $sidebar_item['heading']; ?>
                                        </div>
                                        <div class="page-sidebar-block__content">
                                            <div class="small-text-content">
												<?php echo $sidebar_item['small_text']; ?>
                                            </div>
                                        </div>
                                    </div>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
                    </div>
                </div>
                <div class="pressres-column">
                    <h1 class="h1-75-90"><?php the_title(); ?></h1>
                    <h2 class="h2-50-65 w70">Press releases</h2>
					<?php $args = [
						'post_type'      => 'post',
						'posts_per_page' => 1,
						'post_status'    => 'publish'
					];
					$posts      = new WP_Query( $args );

					if ( $posts->have_posts() ) : ?>
						<?php $tags = get_terms( [
							'taxonomy'   => 'post_tag',
							'hide_empty' => false,
							'parent'     => 0
						] ); ?>
                        <div class="filter-press">
                            <form id="press-filter-form" class="form-filter-press tabs-menu">
                                <input type="submit" value="Submit" data-wait="Please wait..."
                                       class="hidden-input w-button">
                                <label class="filter-chek w-radio">
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom none w-radio-input"></div>
                                    <input type="radio" data-name="tag" id="tag-0" name="tag" value=""
                                           style="opacity:0;position:absolute;z-index:-1" checked><span
                                            class="radio-button-label w-form-label" for="tag-0">all</span>
                                </label>
								<?php foreach ( $tags as $tag ) : ?>
                                    <label class="filter-chek w-radio">
                                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom none w-radio-input"></div>
                                        <input type="radio" data-name="tag" id="tag-<?php echo $tag->term_id; ?>"
                                               name="tag" value="<?php echo $tag->slug; ?>"
                                               style="opacity:0;position:absolute;z-index:-1">
                                        <span class="radio-button-label w-form-label"
                                              for="tag-<?php echo $tag->term_id; ?>"><?php echo $tag->name; ?></span>
                                    </label>
								<?php endforeach; ?>
                                <input type="hidden" name="page" value="1"/>
                                <input type="hidden" name="action" value="get_press_release_posts"/>
                            </form>
                        </div>
                        <div id="press-office-container">
                            <div class="cms-press-ajax">
								<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="ui-pressrelease-a w-inline-block">
                                        <div class="p-20-30 w20"><?php echo get_the_date( 'j F Y' ); ?></div>
                                        <div class="p-25-40 mar13"><?php the_title(); ?></div>
                                    </a>
								<?php endwhile;
								wp_reset_postdata(); ?>
                            </div>
							<?php if ( $posts->max_num_pages > 1 ) : ?>
                                <a href="#" class="showmore-btn w-inline-block">
                                    <div>SHOW MORE</div>
                                </a>
							<?php endif; ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="foo-mom">
            <div class="footer-container top-container">
                <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79a4-2bcc79a3" class="footer-col _1 top-col"><a
                            href="/whats-on" class="link-foo-big">What’s on?</a><a href="#" class="link-foo-small">Schedule</a><a
                            href="#" class="link-foo-small">Priority booking</a>
                    <div class="foo-marger"></div>
                    <a href="/festival" class="link-foo-whats_last w-inline-block"><img
                                src="<?php echo get_template_directory_uri() ?>/images/625032fe74f84b30f4448559_Rectangle2039.jpg"
                                loading="lazy" alt class="img-cover foters">
                        <div class="text-block">Autumn Festival ‘22</div>
                    </a><a href="#" class="link-foo-small no-mob">Rachmaninov Days at Bechstein Hall</a>
                </div>
                <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79ba-2bcc79a3" class="footer-col top-col center-col"><a
                            href="/your-visit" class="link-foo-big">your visit</a><a href="/box-office"
                                                                                     class="link-foo-small">Health and
                        safety</a>
                    <div class="foo-marger"></div>
                    <a href="/box-office" class="link-foo-small">Ticketing Info</a><a href="#" class="link-foo-small">Getting
                        here</a><a href="#" class="link-foo-small">Security & Rules</a><a href="#"
                                                                                          class="link-foo-small">Contact
                        Us</a>
                    <div class="foo-marger"></div>
                    <a href="/about" class="link-foo-small">Around Bechstein Hall</a><a href="#" class="link-foo-small">Tours</a><a
                            href="#" class="link-foo-small">Eat & drink</a><a href="#" class="link-foo-small">Venue &
                        seating plan</a>
                    <div class="foo-marger"></div>
                    <a href="#" class="link-foo-small">Accesible facilities</a><a href="#" class="link-foo-small">Accesibility
                        statement</a><a href="/contacts" class="link-foo-small">Contacts</a>
                    <div class="foo-bottom no-pc"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a
                                href="#" class="link-foo-small last">Privacy policy</a></div>
                </div>
                <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79dd-2bcc79a3" class="footer-col _3 top-col"><a
                            href="/history" class="link-foo-big _2">History</a><a href="#" class="link-foo-big _2">friends</a><a
                            href="/press-office" aria-current="page" class="link-foo-big _2 w--current">Press</a><a
                            href="#" class="link-foo-big _2">hire the hall</a></div>
            </div>
            <div class="footer-container bottom">
                <div class="footer-col _1">
                    <div class="div-block-2">
                        <div class="p-20-27">(020) 1234 5678 support@bechsteinhall.com London, W1U 2RJ, 22–28 Wigmore
                            St.
                        </div>
                    </div>
                    <div class="foo-soc-line"><a href="#" class="link-soc w-inline-block"></a><a href="#"
                                                                                                 class="link-soc w-inline-block"></a><a
                                href="#" class="link-soc w-inline-block"></a><a href="#"
                                                                                class="link-soc w-inline-block"></a>
                    </div>
                </div>
                <div class="footer-col no-mob">
                    <div class="foo-bottom nz"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#"
                                                                                                                class="link-foo-small last">Privacy
                            policy</a></div>
                </div>
                <div class="footer-col _3">
                    <div class="foo-bottomer">
                        <div>© 2022, Bechstein Hall</div>
                        <a href="#" class="funk-link">Website made by Func. ↗</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-z"></div>
    </footer>
<!--[if lte IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script>
        let headwidth;

        $(".b-menu").click(function () {

            headwidth = $(".navbar").width();
            console.log(headwidth);
            $(".header").css({
                "max-width": headwidth
            });

            if ($(".body").hasClass("menuopen")) {
                $(".body").removeClass("menuopen");
                $(".navbar").removeClass("grey-head");
            } else {
                $(".body").addClass("menuopen");
                $(".navbar").addClass("grey-head");
            }

        });


        document.addEventListener("DOMContentLoaded", function () {
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
<?php get_template_part( "footer_block", "" ); ?>