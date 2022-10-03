<?php
/*
Template name: Copy of Bechstein Hall
*/
?>
    <!DOCTYPE html>
    <!-- This site was created in Webflow. https://www.webflow.com -->
    <!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="624c5364ec30465eea0a1090" data-wf-site="624c5364ec3046603b0a108f">
<?php get_template_part( "header_block", "" ); ?>

<body <?php body_class( "body" ); ?>>
<?php get_template_part( 'inc/components/loader' ); ?>
    <div class="page-wrapper">
		<?php get_header(); ?>
        <main class="wrapper home-wrapper">
            <!-- Key events slider start -->
			<?php $slider = get_field( 'home_slider' );
			if ( ! empty( $slider ) ): ?>
                <section class="section home-grey wf-section" data-type="cursor-area">
                    <div class="head-event-container">
                        <div class="bech-slider" data-type="slider">
                            <div class="bech-slider__slides">
								<?php foreach ( $slider as $slide ): ?>
                                    <div class="bech-slider__slide" data-type="slide">
                                        <div class="head-event-content">
											<?php echo wp_get_attachment_image( $slide['background_image']['ID'], 'large', false, [
												'class' => 'img-fw mob-cover'
											] ); ?>
                                            <a href="<?php echo $slide['link']; ?>"
                                               class="head-event-content_in home-slid w-inline-block">
                                                <div class="left-event-col home-slid">
													<?php if ( $slide['date_sign'] ): ?>
                                                        <div class="home-slid-timer"><?php echo $slide['date_sign']; ?></div>
													<?php endif; ?>
                                                    <h1 class="h1-75-90 event-h"><?php echo $slide['slide_heading']; ?></h1>
                                                    <div class="p-25-40"><?php echo $slide['slide_description']; ?></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
								<?php endforeach; ?>
                            </div>
                            <div class="bech-slider__controls">
                                <div class="bech-slider__counter">
                                    <div data-type="current">0</div>
                                    <div class="bech-slider__separator">–</div>
                                    <div data-type="count">0</div>
                                </div>
                                <button type="button" class="bech-slider__arrow arrow-button" data-type="prev">
                                    ←
                                </button>
                                <button type="button" class="bech-slider__arrow arrow-button" data-type="next">
                                    <svg width="100%" height="100%" viewPort="0 0 100 100" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle r="24" cx="24" cy="24" fill="transparent" stroke-dasharray="150.79"
                                                stroke-dashoffset="0"></circle>
                                        <circle class="arrow-button__progress" r="24" cx="24" cy="24" fill="transparent"
                                                stroke-dasharray="150.79" stroke-dashoffset="0"></circle>
                                    </svg>
                                    →
                                </button>
                            </div>
                            <div data-type="cursor" bgline="3" class="book-pseudo-b">
                                <div><strong>Book tickets</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="grey-z top-z"></div>
                </section>
			<?php endif; ?>
            <!-- Key events slider end -->
            <!-- Calendar and weekend events block start -->
			<?php $calendar_events_block = get_field( 'calendar_and_weekend_events_block' ); ?>
            <section class="section home-grey wf-section">
                <div class="container-home-slider">
                    <h2 class="h2-50-65 white"><?php echo $calendar_events_block['heading']; ?></h2>
                    <div class="calendar-container">
                        <div class="calendar-wiget">
                            <form id="home-filter-form" class="form">
                                <div class="p-20-30 white">What do you like?</div>
								<?php
								// TODO: hide_empty => true
								$tags_args = [
									'taxonomy'   => [ 'event_tag', 'genres', 'instruments' ],
									'hide_empty' => false
								];
								$tags      = get_terms( $tags_args );
								if ( ! empty( $tags ) ): ?>
                                    <div class="filter-flex">
										<?php foreach ( $tags as $tag ): ?>
                                            <label class="w-checkbox filter-flex-btn">
                                                <div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg"
                                                     for="tag_<?php echo $tag->term_id; ?>"></div>
                                                <input
                                                        type="checkbox"
                                                        id="tag_<?php echo $tag->term_id; ?>"
                                                        name="<?php echo $tag->taxonomy; ?>[]"
                                                        value="<?php echo $tag->slug; ?>"
                                                        style="opacity:0;position:absolute;z-index:-1">
                                                <span class="w-form-label"
                                                      for="contemporary"><?php echo $tag->name; ?></span>
                                            </label>
										<?php endforeach; ?>
                                    </div>
								<?php endif; ?>
                                <div class="calendar-devider"></div>
                                <div class="p-20-30 white">When would you like to visit?</div>
                                <input id="date" type="hidden" name="start_date"
                                       value="<?php echo date( 'Y.m.d H:i' ); ?>"/>
                                <input type="hidden" name="action" value="get_homepage_slider_items"/>
								<?php echo wp_nonce_field( 'home_filter_action_nonce', 'home_filter_action' ); ?>
                                <div id="calendar" class="cal-slider"></div>
                                <input type="submit" value="Submit" data-wait="Please wait..." class="hidden w-button">
                            </form>
                        </div>
						<?php $args = [
							'post_type'      => 'event',
							'posts_per_page' => - 1,
							'post_status'    => 'publish'
						];

						// $datetime = new DateTime('today');
						// $next_date = new DateTime('tomorrow');

						// $args['meta_query'][0] = [
						// 	'key' => 'start_date',
						// 	'value' => [$datetime->format('Y.m.d H:i'), $next_date->format('Y.m.d H:i')],
						// 	'compare' => 'BETWEEN',
						// 	'type' => 'DATETIME'
						// ];

						$query = new WP_Query( $args );

						// var_dump($query->posts); 
						?>
                        <div class="slider-wvwnts-home">
                            <div class="slider-wvwnts">
                                <div class="slider-wvwnts_mask wo-slider">
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                        <div class="slider-wvwnts_slide wo-slider_item wo-slide">
                                            <div class="link-block">
                                                <div class="slider-wvwnts_top">
													<?php $event_cat = get_the_terms( $post, 'event_cat' ); ?>
                                                    <img src="<?php echo get_field( 'event_image', $event_cat[0] ); ?>"
                                                         loading="eager" alt class="img-cover">
													<?php $term_query = wp_get_object_terms( $post->ID, [
														'event_tag',
														'genres',
														'instruments'
													] ); ?>
                                                    <div class="slider-wvwnts_top-cats">
														<?php foreach ( $term_query as $term ) : ?>
                                                            <a href="#"
                                                               class="slider-wvwnts_top-cats_a"><?php echo $term->name; ?></a>
														<?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="slider-wvwnts_bottom">
                                                    <div class="p-20-30 w20"><?php echo date( 'd F', strtotime( get_field( 'start_date' ) ) ); ?></div>
                                                    <div class="p-30-45 bold"><?php the_title(); ?></div>
                                                    <div class="p-17-25 home-card">Couperin, Mesian, Brahms</div>
													<?php $purchase_urls = get_field( 'purchase_urls' ); ?>
                                                    <a bgline="1" href="<?php echo $purchase_urls[0]['link']; ?>"
                                                       class="booktickets-btn home-page">
                                                        <strong>Book tickets</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
									<?php endwhile;
									wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_0c687936-78a2-7976-2297-97e720f86e4e-89261594"
                             class="slider-wvwnts-home_bottom">
                            <div class="p-20-30 white">35 events</div>
                            <a href="#" class="link-20 home">WHAT’S ON →</a>
                        </div>
                    </div>
                </div>
                <div class="grey-z"></div>
            </section>
            <!-- Calendar and weekend events block end -->
            <!-- “About Bechstein Hall” block start -->
			<?php $about_bechstein_hall_block = get_field( 'about_bechstein_hall_block' ); ?>
            <section class="section reder homer home-white wf-section">
                <h2 data-w-id="0ced73ca-e65f-2bb3-0ae8-df703d949277" class="h2-75-90">
					<?php echo $about_bechstein_hall_block['heading_1st_line']; ?>
                </h2>
                <div class="his-container homet">
                    <div class="his-left home-page">
                        <div class="his-left-imagemom home">
							<?php echo wp_get_attachment_image( $about_bechstein_hall_block['sticky_image']['ID'], 'large', false, [
								'class' => 'img-cover'
							] ); ?>
                        </div>
                    </div>
                    <div class="his-right homepage">
                        <h2 data-w-id="0ced73ca-e65f-2bb3-0ae8-df703d94927e" class="h2-75-90 _2 no-tab">
							<?php echo $about_bechstein_hall_block['heading_2nd_line']; ?>
                        </h2>
                        <div data-w-id="3956ba2f-4390-87fa-389c-350f9d52c59c" class="p-20-35 w910 w-richtext">
							<?php echo $about_bechstein_hall_block['description']; ?>
                        </div>
						<?php $link = $about_bechstein_hall_block['link'];
						if ( ! empty( $link['link_url'] ) ): ?>
                            <a href="<?php echo $link['link_url']; ?>"
                               class="link-20"><?php echo $link['link_title'] ? $link['link_title'] : $link['link_url']; ?></a>
						<?php endif; ?>
                    </div>
                </div>
                <div class="white-z"></div>
            </section>
			<?php $infinite_carousel = $about_bechstein_hall_block['infinite_carousel'];
			if ( ! empty( $infinite_carousel ) ): ?>
                <section class="section home-white wf-section">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
								<?php foreach ( $infinite_carousel as $image ): ?>
                                    <div class="splide__slide">
										<?php echo wp_get_attachment_image( $image['image']['ID'], 'large', false, [
											'class'   => 'image-4',
											'loading' => 'eager'
										] ); ?>
                                    </div>
								<?php endforeach; ?>
                            </div>
                        </div>
                        <div id="splide-cursor" class="splide__cursor"></div>
                    </div>
                    <div class="white-z"></div>
                </section>
			<?php endif; ?>
            <!-- “About Bechstein Hall” block end -->
            <!-- “Your Visit” block start -->
			<?php $your_visit_block = get_field( 'your_visit_block' ); ?>
            <section class="section home-grey wf-section">
                <div class="container-home-slider _2">
                    <div class="bottom-links-container">
                        <div id="w-node-_232af724-2b60-16c2-c638-e9eaf3767da9-89261594" class="div-block-17">
							<?php if ( ! empty( $your_visit_block['heading'] ) ): ?>
                                <h2 class="h2-50-65 white h-60-75">
									<?php echo $your_visit_block['heading']; ?>
                                </h2>
							<?php endif; ?>
                            <div class="his-left-imagemom _2">
                                <?php $sticky_image = $your_visit_block['sticky_image'];
                                if (!empty($sticky_image)) {
                                    echo wp_get_attachment_image($sticky_image['ID'], 'large', false, [
                                            'class' => 'img-cover'
                                    ]);
                                } ?>
                                </div>
                        </div>
                        <div id="w-node-f68b1e07-4cf2-4c60-76f8-48cbef9b803c-89261594" class="div-block-16">
                            <?php $data_w_ids = [
                                    '2f72eb80-2a8c-9b7d-2cf8-2b029d419185',
                                '63653c19-eb20-5e7d-99bb-36203865bed8',
                                '864c5c2b-0c2b-b4a9-5cc9-04ae5df778f7',
                                '3633954b-6047-8770-86f4-118c9f8d4003',
                                'ef6822ff-480a-758e-b105-2831eb599714'
                            ];

                            $data_images_w_ids = [
                                    '947e45a5-ca5f-a28e-a049-21a0175e70e6',
                                '89aa9b38-760f-c5ec-16d5-9f1ae26ad59f',
                                '16750c43-c631-2779-61ea-5b3be611245a',
                                '70aa6f49-2517-4b9a-3f3b-1e5de238aeeb',
	                            'ed1bcf43-9212-cdda-faa0-08583c0a8af7'
                            ];

                            $links = $your_visit_block['links'];

                            foreach ($links as $index => $link): ?>
                            <a
                                    data-w-id="<?php echo $data_w_ids[$index] ?? ''; ?>"
                                    href="<?php echo $link['link_url']; ?>"
                                    class="home-but-link w-inline-block">
                                <div><?php echo $link['link_title']; ?></div>
                            </a>
                            <div data-w-id="0a29acdc-7f6a-f365-9b49-b48c411c22cd" class="devider-but"></div>
                            <?php endforeach; ?>
                            <div id="ball" class="cursor">
                                <div class="cursor-mom">
                                    <?php foreach ($links as $index => $link): ?>
                                        <?php echo wp_get_attachment_image($link['hover_image']['ID'], 'large', false, [
                                                'class' => 'image-cursor',
                                            'data-w-id' => $data_images_w_ids[$index] ?? '',
                                            'style' => '-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0'
                                        ]); ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <a href="<?php echo get_the_permalink(26); ?>" class="link-20 white">your visit</a>
                        </div>
                    </div>
                </div>
                <div class="grey-z"></div>
            </section>
            <!-- “Your Visit” block end -->
        </main>
		<?php get_footer(); ?>
    </div>
    <a href="#" class="button clear-cookie w-button">clear cache</a>
<!--[if lte IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script>
      let headwidth;

      $(".b-menu").click(function () {

        headwidth = $(".navbar").width();
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
    <!-- F’in sweet Webflow Hacks -->
    <style>
        /*The page-wrapper is initially hidden*/
        .page-wrapper {
            display: none;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
    <script>
      // window.onload = () => {
      //
      //
      //   var mouse = {
      //     x: 0,
      //     y: 0
      //   };
      //   var pos = {
      //     x: 0,
      //     y: 0
      //   };
      //
      //
      //   var ratio = 0.2;
      //   var active = false;
      //   var ball = document.getElementById("ball");
      //   TweenLite.set(ball, {
      //     xPercent: -50,
      //     yPercent: -50
      //   });
      //
      //
      //   window.addEventListener("mousemove", mouseMove);
      //
      //   function mouseMove(e) {
      //     mouse.x = e.clientX;
      //     mouse.y = e.clientY;
      //   }
      //
      //   TweenLite.ticker.addEventListener("tick", updatePosition);
      //
      //   function updatePosition() {
      //     if (!active) {
      //       pos.x += (mouse.x - pos.x) * ratio;
      //       pos.y += (mouse.y - pos.y)w * ratio;
      //       TweenLite.set(ball, {
      //         x: pos.x,
      //         y: pos.y
      //       });
      //
      //
      //     }
      //   }
      // }


      document.querySelectorAll('.grey-z').forEach(trigger => {
        new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {

            if (entry.isIntersecting) {
              console.log(entry.isIntersecting);
              $(".navbar").addClass('grey-head-scroll');

            } else {
              //$(".navbar").removeClass('grey-head');
            }

          });
        }, {
          threshold: 1
        }).observe(trigger);
      });


      document.querySelectorAll('.white-z').forEach(trigger => {
        new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {

            if (entry.isIntersecting) {
              console.log(entry.isIntersecting);
              $(".navbar").removeClass('grey-head-scroll');

            } else {
              //$(".navbar").removeClass('grey-head');
            }

          });
        }, {
          threshold: 1
        }).observe(trigger);
      });
    </script>
<?php get_template_part( "footer_block", "" ); ?>