<?php
/*
Template name: Copy of Bechstein Hall
*/
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="624c5364ec30465eea0a1090" data-wf-site="624c5364ec3046603b0a108f">
<?php get_template_part("header_block", ""); ?>

<body <?php body_class("body"); ?>>
    <?php get_template_part('inc/components/loader'); ?>
	<div class="page-wrapper">
		<?php get_header(); ?>
		<main class="wrapper home-wrapper">
			<section class="section home-grey wf-section" data-type="cursor-area">
				<div class="head-event-container">
					<div class="head-event-content">
                        <img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61d3bb2615e6_img.jpg" loading="lazy" alt class="img-fw mob-cover">
                        <a href="/single-event" class="head-event-content_in home-slid w-inline-block">
							<div class="left-event-col home-slid">
								<div class="home-slid-timer">21 December, 19:00</div>
								<h1 class="h1-75-90 event-h">Daniil Trifonov</h1>
								<div class="p-25-40">Prokofiev, Szymanowski, Debussy, Brahms</div>
							</div>
						</a>
                    </div>
				</div>
                <div data-type="cursor" bgline="3" class="book-pseudo-b">
                    <div><strong>Book tickets</strong></div>
                </div>
				<div class="grey-z top-z"></div>
			</section>
			<section class="section home-grey wf-section">
				<div class="container-home-slider">
					<h2 class="h2-50-65 white">What’s on at friday night and this weekend?</h2>
					<div class="calendar-container">
						<div class="calendar-wiget w-form">
							<form id="email-form" name="email-form" data-name="Email Form" method="get" class="form">
								<div class="p-20-30 white">What do you like?</div>
								<div class="filter-flex">
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="contemporary"></div>
										<input type="checkbox" id="contemporary" name="contemporary" data-name="contemporary" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="contemporary">contemporary</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">vocal</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">chamber music</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">choral</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">violin</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">string quartet</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">piano</span>
									</label>
									<label class="w-checkbox filter-flex-btn">
										<div class="w-checkbox-input w-checkbox-input--inputType-custom filter-flex-bg" for="checkbox-2"></div>
										<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="w-form-label" for="checkbox-2">recital</span>
									</label>
								</div>
								<div class="calendar-devider"></div>
								<div class="p-20-30 white">When would you like to visit?</div>
								<input id="date" type="hidden" name="start_date" value="<?php echo date('Y.m.d H:i'); ?>" />
								<div id="calendar" class="cal-slider">
									<!-- <div class="top-slider-line">
										<div data-delay="4000" data-animation="slide" class="slider-month w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
											<div class="slider-month_mask w-slider-mask">
												<div class="w-slide">
													<div class="text-block-2" data-ix="slider-month">August 2022</div>
												</div>
												<div class="w-slide">
													<div class="text-block-2" data-ix="slider-month">September 2022</div>
												</div>
											</div>
											<div class="slider-month_la w-slider-arrow-left">
												<div class="text-block-3">←</div>
											</div>
											<div class="slider-month_ra w-slider-arrow-right">
												<div class="text-block-3">→</div>
											</div>
											<div class="none w-slider-nav w-round"></div>
										</div>
									</div>
									<div class="bottom-slider-line">
										<div data-delay="4000" data-animation="outin" class="slider-days w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
											<div class="slider-days_mask w-slider-mask">
												<div class="slider-days_slide w-slide">
													<div class="slider-days_month-days">
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio" id="radio" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">2</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-2">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-3">1</span>
														</label>
													</div>
												</div>
												<div class="slider-days_slide w-slide">
													<div class="slider-days_month-days">
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">2</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
														<label class="slider-days_rad w-radio">
															<div class="w-form-formradioinput w-form-formradioinput--inputType-custom slider-days_rad-ins w-radio-input"></div>
															<input type="radio" data-name="Radio 4" id="radio-4" name="radio" value="Radio" style="opacity:0;position:absolute;z-index:-1"><span class="slider-days_text w-form-label" for="radio-4">1</span>
														</label>
													</div>
												</div>
											</div>
											<div class="slider-days_la w-slider-arrow-left">
												<div class="w-icon-slider-left"></div>
											</div>
											<div class="slider-days_ra w-slider-arrow-right">
												<div class="w-icon-slider-right"></div>
											</div>
											<div class="none w-slider-nav w-round"></div>
										</div>
									</div> -->
								</div>
								<input type="submit" value="Submit" data-wait="Please wait..." class="hidden w-button">
							</form>
							<div class="w-form-done">
								<div>Thank you! Your submission has been received!</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<?php $args = [
							'post_type' => 'event',
							'posts_per_page' => -1,
							'post_status' => 'publish'
						];

						// $datetime = new DateTime('today');
						// $next_date = new DateTime('tomorrow');

						// $args['meta_query'][0] = [
						// 	'key' => 'start_date',
						// 	'value' => [$datetime->format('Y.m.d H:i'), $next_date->format('Y.m.d H:i')],
						// 	'compare' => 'BETWEEN',
						// 	'type' => 'DATETIME'
						// ];

						$query = new WP_Query($args);

						// var_dump($query->posts); 
						?>
						<div class="slider-wvwnts-home">
							<div class="slider-wvwnts">
								<div class="slider-wvwnts_mask wo-slider">


									<?php while ($query->have_posts()) : $query->the_post(); ?>
										<div class="slider-wvwnts_slide wo-slider_item wo-slide">
											<div class="link-block">
												<div class="slider-wvwnts_top">
													<?php $event_cat = get_the_terms($post, 'event_cat'); ?>
													<img src="<?php echo get_field('event_image', $event_cat[0]); ?>" loading="eager" alt class="img-cover">
													<?php $term_query = wp_get_object_terms($post->ID, ['event_tag', 'genres', 'instruments']); ?>
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
									<?php endwhile;
									wp_reset_postdata(); ?>
									<div class="slider-wvwnts_slide wo-slider_item wo-slide">
										<div class="link-block">
											<div class="slider-wvwnts_top"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6103852615c8_img-event.jpg" loading="eager" alt class="img-cover">
												<div class="slider-wvwnts_top-cats"><a href="#" class="slider-wvwnts_top-cats_a">baroque</a><a href="#" class="slider-wvwnts_top-cats_a">piano</a></div>
											</div>
											<div class="slider-wvwnts_bottom">
												<div class="p-20-30 w20">20 December, 22:00—00:00</div>
												<div class="p-30-45 bold">Angela Hewitt</div>
												<div class="p-17-25 home-card">Couperin, Mesian, Brahms</div><a bgline="1" href="#" class="booktickets-btn home-page"><strong>Book tickets</strong></a>
											</div>
										</div>
									</div>
									<div class="slider-wvwnts_slide wo-slider_item wo-slide">
										<div class="link-block">
											<div class="slider-wvwnts_top"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6103852615c8_img-event.jpg" loading="eager" alt class="img-cover">
												<div class="slider-wvwnts_top-cats"><a href="#" class="slider-wvwnts_top-cats_a">baroque</a><a href="#" class="slider-wvwnts_top-cats_a">piano</a></div>
											</div>
											<div class="slider-wvwnts_bottom">
												<div class="p-20-30 w20">20 December, 22:00—00:00</div>
												<div class="p-30-45 bold">Angela Hewitt</div>
												<div class="p-17-25 home-card">Couperin, Mesian, Brahms</div><a bgline="1" href="#" class="booktickets-btn home-page"><strong>Book tickets</strong></a>
											</div>
										</div>
									</div>
									<div class="slider-wvwnts_slide wo-slider_item wo-slide">
										<div class="link-block">
											<div class="slider-wvwnts_top"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6103852615c8_img-event.jpg" loading="eager" alt class="img-cover">
												<div class="slider-wvwnts_top-cats"><a href="#" class="slider-wvwnts_top-cats_a">baroque</a><a href="#" class="slider-wvwnts_top-cats_a">piano</a></div>
											</div>
											<div class="slider-wvwnts_bottom">
												<div class="p-20-30 w20">20 December, 22:00—00:00</div>
												<div class="p-30-45 bold">Angela Hewitt</div>
												<div class="p-17-25 home-card">Couperin, Mesian, Brahms</div><a bgline="1" href="#" class="booktickets-btn home-page"><strong>Book tickets</strong></a>
											</div>
										</div>
									</div>
									<div class="slider-wvwnts_slide wo-slider_item wo-slide">
										<div class="link-block">
											<div class="slider-wvwnts_top"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6103852615c8_img-event.jpg" loading="eager" alt class="img-cover">
												<div class="slider-wvwnts_top-cats"><a href="#" class="slider-wvwnts_top-cats_a">baroque</a><a href="#" class="slider-wvwnts_top-cats_a">piano</a></div>
											</div>
											<div class="slider-wvwnts_bottom">
												<div class="p-20-30 w20">20 December, 22:00—00:00</div>
												<div class="p-30-45 bold">Angela Hewitt</div>
												<div class="p-17-25 home-card">Couperin, Mesian, Brahms</div><a bgline="1" href="#" class="booktickets-btn home-page"><strong>Book tickets</strong></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="w-node-_0c687936-78a2-7976-2297-97e720f86e4e-89261594" class="slider-wvwnts-home_bottom">
							<div class="p-20-30 white">35 events</div><a href="#" class="link-20 home">WHAT’S ON →</a>
						</div>
					</div>
				</div>
				<div class="grey-z"></div>
			</section>
			<section class="section reder homer home-white wf-section">
				<h2 data-w-id="0ced73ca-e65f-2bb3-0ae8-df703d949277" class="h2-75-90">
					<?php echo get_field('bechstein_hall_header_1st_line') ?>
				</h2>
				<div class="his-container homet">
					<div class="his-left home-page">
						<div class="his-left-imagemom home"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61f4852615de_Rectangle2026-min.png" loading="lazy" data-w-id="0ced73ca-e65f-2bb3-0ae8-df703d94927c" alt class="img-cover"></div>
					</div>
					<div class="his-right homepage">
						<h2 data-w-id="0ced73ca-e65f-2bb3-0ae8-df703d94927e" class="h2-75-90 _2 no-tab">
							<?php echo get_field('bechstein_hall_header_2nd_line') ?>
						</h2>
						<div data-w-id="3956ba2f-4390-87fa-389c-350f9d52c59c" class="p-20-35 w910 w-richtext">
							<?php echo get_field('short_history') ?>
						</div><a href="<?php echo get_field('link_to_history') ?>" class="link-20">History of bechstein hall →</a>
					</div>
				</div>
				<div class="white-z"></div>
			</section>
			<section class="section home-white wf-section">
				<div class="splide">
					<div class="splide__track">
						<?php if (have_rows('slider')) { ?>
							<div class="splide__list">
								<?php global $parent_id;
								$parent_id = $loop_id;
								$loop_index = 0;
								$loop_title = "Slider";
								$loop_field = "slider";
								while (have_rows('slider')) {
									global $loop_id;
									$loop_index++;
									$loop_id++;
									the_row(); ?>
									<div class="splide__slide"><img src="<?php $field = get_sub_field('slider_img');
																												if (isset($field['url'])) {
																													echo ($field['url']);
																												} elseif (is_numeric($field)) {
																													echo (wp_get_attachment_image_url($field, 'full'));
																												} else {
																													echo ($field);
																												} ?>" loading="eager" alt="<?php echo esc_attr($field['alt']); ?>" class="image-4" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>"></div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="white-z"></div>
			</section>
			<section class="section home-grey wf-section">
				<div class="container-home-slider _2">
					<div class="bottom-links-container">
						<div id="w-node-_232af724-2b60-16c2-c638-e9eaf3767da9-89261594" class="div-block-17">
							<h2 class="h2-50-65 white h-60-75">
								<?php echo get_field('your_visit_header') ?>
							</h2>
							<div class="his-left-imagemom _2"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61f4852615de_Rectangle2026-min.png" loading="lazy" data-w-id="afdf782d-d2d7-0bbe-4a93-4da5d84cc8b2" alt class="img-cover"></div>
						</div>
						<div id="w-node-f68b1e07-4cf2-4c60-76f8-48cbef9b803c-89261594" class="div-block-16"><a data-w-id="2f72eb80-2a8c-9b7d-2cf8-2b029d419185" href="<?php echo get_field('getting_here_link') ?>" class="home-but-link w-inline-block">
								<div><?php echo get_field('getting_here_text') ?></div>
							</a>
							<div data-w-id="0a29acdc-7f6a-f365-9b49-b48c411c22cd" class="devider-but"></div><a data-w-id="63653c19-eb20-5e7d-99bb-36203865bed8" href="<?php echo get_field('around_link') ?>" class="home-but-link w-inline-block">
								<div><?php echo get_field('around_text') ?></div>
							</a>
							<div class="devider-but"></div><a data-w-id="864c5c2b-0c2b-b4a9-5cc9-04ae5df778f7" href="<?php echo get_field('accesibility_link') ?>" class="home-but-link w-inline-block">
								<div><?php echo get_field('accesibility_text') ?></div>
							</a>
							<div class="devider-but"></div><a data-w-id="3633954b-6047-8770-86f4-118c9f8d4003" href="<?php echo get_field('tickets_link') ?>" class="home-but-link w-inline-block">
								<div><?php echo get_field('tickets_text') ?></div>
							</a>
							<div class="devider-but"></div><a data-w-id="ef6822ff-480a-758e-b105-2831eb599714" href="<?php echo get_field('friendship_link') ?>" class="home-but-link w-inline-block">
								<div><?php echo get_field('friendship_text') ?></div>
							</a>
							<div class="devider-but"></div>
							<div id="ball" class="cursor">
								<div class="cursor-mom"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61223c2615e1_img-min20(1).jpg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="947e45a5-ca5f-a28e-a049-21a0175e70e6" alt class="image-cursor"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61183e2615d9_img-2-min.jpg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="89aa9b38-760f-c5ec-16d5-9f1ae26ad59f" alt class="image-cursor"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61f4852615de_Rectangle2026-min.png" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="16750c43-c631-2779-61ea-5b3be611245a" alt class="image-cursor"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61e31e2615e0_2img-min.jpg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="70aa6f49-2517-4b9a-3f3b-1e5de238aeeb" alt class="image-cursor"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6142fa2615d0_img-yourvisit.jpg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="ed1bcf43-9212-cdda-faa0-08583c0a8af7" alt class="image-cursor"></div>
							</div><a href="<?php echo get_field('your_visit_link') ?>" class="link-20 white">your visit →</a>
						</div>
					</div>
				</div>
				<div class="grey-z"></div>
			</section>
		</main>
		<?php get_footer(); ?>
	</div><a href="#" class="button clear-cookie w-button">clear cache</a>
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
	<!-- F’in sweet Webflow Hacks -->
	<style>
		/*The page-wrapper is initially hidden*/
		.page-wrapper {
			display: none;
		}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
	<script src="https://thevogne.ru/wp-content/themes/twentyfifteen/js/TweenMax.min.js"></script>
	<script>
		// document.addEventListener("DOMContentLoaded", function(event) {
		// 	// get a reference to the page wrapper
		// 	const pageWrapper = document.querySelector(".page-wrapper");
		// 	// get a reference to the loading wrapper
		// 	const loadingWrapper = document.querySelector('.loader');
        //
		// 	// get the 'seenAnimation' cookie and store in a seenAnimation variable
		// 	const seenAnimation = Cookies.get('seenAnimation');
		// 	// if the 'seenAnimation' cookie is undefined
		// 	if (!seenAnimation) {
		// 		// display the loading-wrapper
		// 		loadingWrapper.style.display = "flex";
		// 		// show the page-wrapper
		// 		// after a set duration of 3000 milliseconds
		// 		// (the time it takes to show the loading-wrapper in this case)
		// 		setTimeout(() => {
		// 			// pageWrapper.style.display = "block";
		// 			// loadingWrapper.style.display = "none";
		// 		}, 3000);
		// 		// set the 'seenAnimation' cookie
		// 		Cookies.set('seenAnimation', 1, {
		// 			expires: 1
		// 		});
		// 	} else {
		// 		// else if the 'seenAnimation' cookie exists
		// 		// the user has already seen the animation
		// 		// and so
		// 		// hide the loading-wrapper
		// 		loadingWrapper.style.display = "none";
		// 		// show the page-wrapper
		// 		pageWrapper.style.display = "block";
		// 	}
        //
		// 	//This is for the "Clear my 24 hour cookie" button on this Hacks template
		// 	// this is not needed on your live site
        //
		// 	// when .clear-cookie is clicked
		// 	$('.clear-cookie').click(() => {
		// 		// remove the 'seenGif' cookie
		// 		// the animation can now play again since
		// 		//'seenAnimation' becomes undefined
		// 		Cookies.remove('seenAnimation');
		// 	});
		// });
	</script>
	<script>
		function muteVideo() {

			$(".skip-btn").click(function() {
				$(".my_video").prop('muted', true);
			});


			$(".mute-btn").click(function() {

				if ($(".my_video").prop('muted')) {

					$(".my_video").prop('muted', false);
					$(".mute-btn").text("mute");
				} else {
					$(".my_video").prop('muted', true);
					$(".mute-btn").text("unmute");
				}

			});

		}

		$(".slider-month_la").click(function() {
			$(".slider-days_la").click();
		});

		$(".slider-month_ra").click(function() {
			$(".slider-days_ra").click();
		});


		function sldes() {
			new Splide('.splide', {

				perPage: 1,
				perMove: 1,
				focus: 'center',
				type: 'loop',
				gap: '20px',
				breakpoints: {

					991: {
						perPage: 1,
						focus: 'left'
					},
					479: {
						perPage: 1,
						focus: 'left'
					}
				}
			}).mount();

		};


		document.addEventListener("DOMContentLoaded", function() {
			// muteVideo();
			sldes();
		});



		window.onload = () => {



			var mouse = {
				x: 0,
				y: 0
			};
			var pos = {
				x: 0,
				y: 0
			};



			var ratio = 0.2;
			var active = false;
			var ball = document.getElementById("ball");
			TweenLite.set(ball, {
				xPercent: -50,
				yPercent: -50
			});


			window.addEventListener("mousemove", mouseMove);

			function mouseMove(e) {
				mouse.x = e.clientX;
				mouse.y = e.clientY;
			}
			TweenLite.ticker.addEventListener("tick", updatePosition);

			function updatePosition() {
				if (!active) {
					pos.x += (mouse.x - pos.x) * ratio;
					pos.y += (mouse.y - pos.y) * ratio;
					TweenLite.set(ball, {
						x: pos.x,
						y: pos.y
					});



				}
			}
		}


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
	<?php get_template_part("footer_block", ""); ?>