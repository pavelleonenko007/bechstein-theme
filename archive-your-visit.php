<?php
/*
Template name: Your Visit archive template
*/
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="62bc3fe7d9cc6167a126159e" data-wf-site="62bc3fe7d9cc6134bf261592">
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
	<?php get_header();
	the_post(); ?>
	<main class="wrapper">
		<section class="section wf-section">
			<div class="breadcrumbs-line">
				<?php if (function_exists('bcn_display')) bcn_display(); ?>
			</div>
		</section>
		<section class="section wf-section">
			<div class="catalog-row m-revert">
				<div class="festival-column yvisit">
					<div class="yvisit-styk yvis">
						<div id="w-node-e2a4b54f-db07-d972-40d4-89e5e03639ea-a126159e" class="p-30-40 med w35">
							<?php echo get_field('sidebar_header') ?>
						</div>
						<?php if (have_rows('sidebar_loop')) { ?>
							<div>
								<?php global $parent_id;
								$parent_id = $loop_id;
								$loop_index = 0;
								$loop_title = "Sidebar loop";
								$loop_field = "sidebar_loop";
								while (have_rows('sidebar_loop')) {
									global $loop_id;
									$loop_index++;
									$loop_id++;
									the_row(); ?><a href="<?php echo get_sub_field('link') ?>" class="ui-yourvisit_link-in w-inline-block">
										<div class="p-20-30 med w20"><?php echo get_sub_field('header') ?></div>
										<div class="p-17-25 mar10"><?php echo get_sub_field('description') ?></div>
									</a>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="yourvisit-column">
					<h1 class="h1-75-90 yv-page"><?php the_title(); ?></h1>
					<p class="p-25-40 your-visit"><?php echo get_field('description'); ?></p>
					<?php
					$args = [
						'post_type' => 'your-visit',
						'post_status' => 'publish'
					];
					$your_visit_query = new WP_Query($args);

					if ($your_visit_query->have_posts()) : while ($your_visit_query->have_posts()) : $your_visit_query->the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="ui-yourvisit w-inline-block">
								<div class="ui-yourvisit_mom-div">
									<?php the_post_thumbnail('full', [
										'class' => 'img-cover'
									]); ?>
								</div>
								<div class="ui-yourvisit_content">
									<div class="p-35-45 w40"><?php the_title(); ?></div>
									<div class="p-17-25 mar13"><?php echo strip_tags(get_the_excerpt()); ?></div>
								</div>
							</a>
					<?php endwhile;
						wp_reset_postdata();
					endif; ?>
					<?php $constructor_sections = get_field('site_sections'); ?>
					<!-- <pre>
						<?php
						var_dump($constructor_sections); ?>
					</pre> -->

					<div class="layouts">
						<?php foreach ($constructor_sections as $constructor_section) : ?>
							<div class="ui-boxoffice-block">
								<?php if ($constructor_section['acf_fc_layout'] === 'gallery_section') : ?>
									<div class="images-grid">
										<?php foreach ($constructor_section['gallery_loop'] as $image) : ?>
											<a href="#" id="w-node-be76ccd2-22c2-a8c7-2d8e-13da192216fe-a126159e" class="link-grid w-inline-block w-lightbox">
												<?php echo wp_get_attachment_image($image['image']['ID'], 'large', false, [
													'class' => "img-cover",
													'loading' => 'lazy'
												]); ?>
												<script type="application/json" class="w-json">
													<?php
													$item = $image['image'];
													if (isset($item['url'])) {
														$image_url = $item['url'];
													} elseif (is_numeric($item)) {
														$image_url = wp_get_attachment_image_url($item, 'full');
													} else {
														$image_url = $item;
													}
													$items = array();
													$items[] = [
														'url' => $image_url,
														'type' => 'image',
														'caption' => isset($item['caption']) ? $item['caption'] : ''
													];
													echo json_encode([
														'group' => 'parent_id',
														'items' => $items
													], JSON_UNESCAPED_SLASHES);
													?>
												</script>
											</a>
										<?php endforeach; ?>
									</div>
								<?php elseif ($constructor_section['acf_fc_layout'] === 'information_grid_listing') : ?>
									<div class="wig-block">
										<div class="div-block-23">
											<h2 class="h2-35-45">
												<?php echo $constructor_section['header']; ?>
											</h2>
										</div>
										<div class="cms-about">
											<?php foreach ($constructor_section['grid_blocks'] as $grid_block) : ?>
												<div class="ui-about">
													<div class="ui-about_mom-div">
														<?php echo wp_get_attachment_image($grid_block['image']['ID'], 'large', false, [
															'class' => 'img-cover',
															'loading' => 'lazy'
														]); ?>
													</div>
													<div class="ui-yourvisit_content">
														<div class="p-25-40 bold">
															<?php echo $grid_block['header']; ?>
														</div>
														<div class="html-embed-4 w-embed">
															<svg width="91" height="16" viewbox="0 0 91 16" fill="none">
																<path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="#030E14"></path>
																<path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z" fill="#030E14"></path>
																<path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z" fill="#030E14"></path>
																<path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z" fill="#030E14"></path>
																<path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z" fill="#030E14"></path>
															</svg>
														</div>
														<div class="p-17-25 mar20">
															<?php echo $grid_block['description']; ?>
														</div>
														<a rel="nofollow" href="<?php echo $grid_block['link']; ?>" target="_blank" class="ui-about_link"><?php echo $grid_block['link']; ?></a>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
										<div class="t-line"></div>
									</div>
								<?php elseif ($constructor_section['acf_fc_layout'] === 'dropdown_section') : ?>
									<div class="div-block-23">
										<h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
										</h2>
									</div>
									<div class="cms-drops">
										<?php foreach ($constructor_section['dropdowns_loop'] as $dropdown) : ?>
											<div class="ui-drop-container">
												<div class="ui-drop-container_btn">
													<div class="p-20-30 med w20">
														<?php echo $dropdown['dropdown_header']; ?>
													</div>
													<div class="ui-drop-container_ico-mom">
														<div class="ui-drop-container_ico-mom_down">→</div>
														<div class="ui-drop-container_ico-mom_top">→</div>
													</div>
												</div>
												<div class="ui-drop-container_content">
													<p class="p-17-25">
														<?php echo $dropdown['text']; ?>
													</p>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
									<div class="t-line fw"></div>
								<?php elseif ($constructor_section['acf_fc_layout'] === 'text_section') : ?>
									<div class="text-block-ui">
										<h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
										</h2>
										<div class="p-17-25 mar20 w-richtext">
											<?php echo $constructor_section['text']; ?>
										</div>
									</div>
								<?php elseif ($constructor_section['acf_fc_layout'] === 'text_quote_section') : ?>
									<div class="text-block-ui bloq1">
										<div class="p-17-25-2 w-richtext">
											<?php echo $constructor_section['text_with_quote']; ?>
										</div>
									</div>
								<?php elseif ($constructor_section['acf_fc_layout'] === 'quote_with_image') : ?>
									<div class="text-block-ui bloq2">
										<?php echo wp_get_attachment_image($constructor_section['image']['ID'], 'large', false, [
											'class' => "image-5",
											'loading' => 'lazy',
											'style' => 'height: auto'
										]); ?>
										<div class="bloq-right">
											<blockquote class="block-quote p-17-25 bloq2">
												<?php echo $constructor_section['quote_text']; ?>
											</blockquote>
											<div class="text-block-7">
												<?php echo $constructor_section['author']; ?>
											</div>
											<div class="html-embed-5 w-embed">
												<svg width="25" height="17" viewbox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.03906 12.7761L8.49506 16.2321L11.8791 12.7761L8.49506 9.39207L11.8791 0.752071L11.4471 0.320068L5.03906 12.7761ZM14.1831 12.7761L17.6391 16.2321L21.0231 12.7761L17.6391 9.39207L21.0231 0.752071L20.6631 0.320068L14.1831 12.7761Z" fill="#030E14"></path>
												</svg>
											</div>
										</div>
									</div>

								<?php elseif ($constructor_section['acf_fc_layout'] === 'contacts_section') : ?>
									<div class="div-block-23">
										<h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
										</h2>
										<p class="p-17-25 mar20">
											<?php echo $constructor_section['text']; ?>
										</p>
									</div>
									<div class="t-line fw"></div>
								<?php elseif ($constructor_section['acf_fc_layout'] === 'booking_tabs_section') : ?>
									<div class="div-block-23">
										<h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
										</h2>
										<div class="payment-tabs">
											<?php foreach ($constructor_section['tabs'] as $index => $tab) : ?>
												<div data-current="Tab 0" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
													<div class="tabs-menu w-tab-menu">
														<?php foreach ($constructor_section['tabs'] as $index => $tab) : ?>
															<a data-w-tab="Tab <?php echo $index; ?>" class="tab-payments w-inline-block w-tab-link <?php if (get_row_index() === 1) echo 'w--current'; ?>">
																<div><?php echo $tab['tab_header']; ?></div>
															</a>
														<?php endforeach; ?>
													</div>
													<div class="tabs-content w-tab-content">
														<?php foreach ($constructor_section['tabs'] as $index => $tab) : ?>
															<div data-w-tab="Tab <?php echo $index; ?>" class="w-tab-pane <?php if ($index === 0) echo 'w--tab-active'; ?>">
																<div class="rich w-richtext">
																	<?php echo $tab['tab_description']; ?>
																</div>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="t-line fw"></div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>

					<?php /* if (have_rows('site_sections')) { ?>
						<div class="layouts">
							<?php global $parent_id;
							$parent_id = $loop_id;
							$loop_index = 0;
							$loop_title = "Site sections";
							$loop_field = "site_sections";
							while (have_rows('site_sections')) {
								global $loop_id;
								$loop_index++;
								$loop_id++;
								the_row(); ?>
								<?php if (get_row_layout() == 'information_listing' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<?php if (have_rows('blocks')) { ?>
											<div>
												<?php global $parent_id;
												$parent_id = $loop_id;
												$loop_index = 0;
												$loop_title = "Blocks";
												$loop_field = "blocks";
												while (have_rows('blocks')) {
													global $loop_id;
													$loop_index++;
													$loop_id++;
													the_row(); ?>
													<a href="<?php echo get_sub_field('link') ?>" class="ui-yourvisit w-inline-block">
														<div class="ui-yourvisit_mom-div">
															<img src="<?php $field = get_sub_field('image');
																				if (isset($field['url'])) {
																					echo ($field['url']);
																				} elseif (is_numeric($field)) {
																					echo (wp_get_attachment_image_url($field, 'full'));
																				} else {
																					echo ($field);
																				} ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="img-cover" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
														</div>
														<div class="ui-yourvisit_content">
															<div class="p-35-45 w40"><?php echo get_sub_field('header') ?></div>
															<div class="p-17-25 mar13"><?php echo get_sub_field('description') ?></div>
														</div>
													</a>
												<?php } ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'gallery_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<?php if (have_rows('gallery_loop')) { ?>
											<div class="images-grid">
												<?php global $parent_id;
												$parent_id = $loop_id;
												$loop_index = 0;
												$loop_title = "Gallery loop";
												$loop_field = "gallery_loop";
												while (have_rows('gallery_loop')) {
													global $loop_id;
													$loop_index++;
													$loop_id++;
													the_row(); ?><a href="#" id="w-node-be76ccd2-22c2-a8c7-2d8e-13da192216fe-a126159e" class="link-grid w-inline-block w-lightbox"><img src="<?php $field = get_sub_field('image');
																																																																																		if (isset($field['url'])) {
																																																																																			echo ($field['url']);
																																																																																		} elseif (is_numeric($field)) {
																																																																																			echo (wp_get_attachment_image_url($field, 'full'));
																																																																																		} else {
																																																																																			echo ($field);
																																																																																		} ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="img-cover" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
														<script type="application/json" class="w-json">
															<?php
															$item = get_sub_field('image');
															if (isset($item['url'])) {
																$image_url = $item['url'];
															} elseif (is_numeric($item)) {
																$image_url = wp_get_attachment_image_url($item, 'full');
															} else {
																$image_url = $item;
															}
															$items = array();
															$items[] = [
																'url' => $image_url,
																'type' => 'image',
																'caption' => isset($item['caption']) ? $item['caption'] : ''
															];
															echo json_encode([
																'group' => 'parent_id',
																'items' => $items
															], JSON_UNESCAPED_SLASHES);
															?>
														</script>
													</a>
												<?php } ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'information_grid_listing' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="wig-block">
											<div class="div-block-23">
												<h2 class="h2-35-45">
													<?php echo get_sub_field('header') ?>
												</h2>
											</div>
											<?php if (have_rows('grid_blocks')) { ?>
												<div class="cms-about">
													<?php global $parent_id;
													$parent_id = $loop_id;
													$loop_index = 0;
													$loop_title = "Grid Blocks";
													$loop_field = "grid_blocks";
													while (have_rows('grid_blocks')) {
														global $loop_id;
														$loop_index++;
														$loop_id++;
														the_row(); ?>
														<div class="ui-about">
															<div class="ui-about_mom-div"><img src="<?php $field = get_sub_field('image');
																																			if (isset($field['url'])) {
																																				echo ($field['url']);
																																			} elseif (is_numeric($field)) {
																																				echo (wp_get_attachment_image_url($field, 'full'));
																																			} else {
																																				echo ($field);
																																			} ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="img-cover" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>"></div>
															<div class="ui-yourvisit_content">
																<div class="p-25-40 bold">
																	<?php echo get_sub_field('header') ?>
																</div>
																<div class="html-embed-4 w-embed">
																	<svg width="91" height="16" viewbox="0 0 91 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="#030E14"></path>
																		<path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z" fill="#030E14"></path>
																		<path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z" fill="#030E14"></path>
																		<path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z" fill="#030E14"></path>
																		<path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z" fill="#030E14"></path>
																	</svg>
																</div>
																<div class="p-17-25 mar20">
																	<?php echo get_sub_field('description') ?>
																</div><a rel="nofollow" href="<?php echo get_sub_field('link_to_location') ?>" target="_blank" class="ui-about_link"><?php echo get_sub_field('link_to_location_text') ?></a>
															</div>
														</div>
													<?php } ?>
												</div>
											<?php } ?>
											<div class="t-line"></div>
										</div>
										<div class="wig-block">
											<div class="div-block-23">
												<h2 class="h2-35-45">Restaurants</h2>
											</div>
											<div class="cms-about">
												<div class="ui-about">
													<div class="ui-about_mom-div"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6142fa2615d0_img-yourvisit.jpg" loading="lazy" alt class="img-cover"></div>
													<div class="ui-yourvisit_content">
														<div class="p-25-40 bold">Les 110 de Taillevent London</div>
														<div class="html-embed-4 w-embed">
															<svg width="91" height="16" viewbox="0 0 91 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="#030E14"></path>
																<path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z" fill="#030E14"></path>
																<path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z" fill="#030E14"></path>
																<path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z" fill="#030E14"></path>
																<path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z" fill="#030E14"></path>
															</svg>
														</div>
														<div class="p-17-25 mar20">French Restaurant in the heart of central London, minutes away from both Oxford Street and Regent Street.<br><br>Following the tradition of the Michelin two-star Taillevent in Paris, Les 110 de Taillevent in London offers both classic and modern French dishes along with a choice of perfectly paired wines by the glass.<br><br>The one hundred and ten wines by the glass, along with a wine list of over 1100 bins can be enjoyed in the modern styled restaurant or on the al fresco terrace for lunch, dinner, drinks and private parties, Monday to Friday and Saturday dinner.</div><a href="#" class="ui-about_link">https://www.les-110-taillevent-london.com/</a>
													</div>
												</div>
												<div class="ui-about">
													<div class="ui-about_mom-div"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6142fa2615d0_img-yourvisit.jpg" loading="lazy" alt class="img-cover"></div>
													<div class="ui-yourvisit_content">
														<div class="p-25-40 bold">Les 110 de Taillevent London</div>
														<div class="html-embed-4 w-embed">
															<svg width="91" height="16" viewbox="0 0 91 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="#030E14"></path>
																<path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z" fill="#030E14"></path>
																<path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z" fill="#030E14"></path>
																<path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z" fill="#030E14"></path>
																<path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z" fill="#030E14"></path>
															</svg>
														</div>
														<div class="p-17-25 mar20">French Restaurant in the heart of central London, minutes away from both Oxford Street and Regent Street.<br><br>Following the tradition of the Michelin two-star Taillevent in Paris, Les 110 de Taillevent in London offers both classic and modern French dishes along with a choice of perfectly paired wines by the glass.<br><br>The one hundred and ten wines by the glass, along with a wine list of over 1100 bins can be enjoyed in the modern styled restaurant or on the al fresco terrace for lunch, dinner, drinks and private parties, Monday to Friday and Saturday dinner.</div><a href="#" class="ui-about_link">https://www.les-110-taillevent-london.com/</a>
													</div>
												</div>
												<div class="ui-about">
													<div class="ui-about_mom-div"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6142fa2615d0_img-yourvisit.jpg" loading="lazy" alt class="img-cover"></div>
													<div class="ui-yourvisit_content">
														<div class="p-25-40 bold">Les 110 de Taillevent London</div>
														<div class="html-embed-4 w-embed">
															<svg width="91" height="16" viewbox="0 0 91 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="#030E14"></path>
																<path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z" fill="#030E14"></path>
																<path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z" fill="#030E14"></path>
																<path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z" fill="#030E14"></path>
																<path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z" fill="#030E14"></path>
															</svg>
														</div>
														<div class="p-17-25 mar20">French Restaurant in the heart of central London, minutes away from both Oxford Street and Regent Street.<br><br>Following the tradition of the Michelin two-star Taillevent in Paris, Les 110 de Taillevent in London offers both classic and modern French dishes along with a choice of perfectly paired wines by the glass.<br><br>The one hundred and ten wines by the glass, along with a wine list of over 1100 bins can be enjoyed in the modern styled restaurant or on the al fresco terrace for lunch, dinner, drinks and private parties, Monday to Friday and Saturday dinner.</div><a href="#" class="ui-about_link">https://www.les-110-taillevent-london.com/</a>
													</div>
												</div>
											</div>
											<div class="t-line"></div>
										</div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'dropdown_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="div-block-23">
											<h2 class="h2-35-45">
												<?php echo get_sub_field('header') ?>
											</h2>
										</div>
										<?php if (have_rows('dropdowns_loop')) { ?>
											<div class="cms-drops">
												<?php global $parent_id;
												$parent_id = $loop_id;
												$loop_index = 0;
												$loop_title = "Dropdowns loop";
												$loop_field = "dropdowns_loop";
												while (have_rows('dropdowns_loop')) {
													global $loop_id;
													$loop_index++;
													$loop_id++;
													the_row(); ?>
													<div class="ui-drop-container">
														<div class="ui-drop-container_btn">
															<div class="p-20-30 med w20">
																<?php echo get_sub_field('dropdown_header') ?>
															</div>
															<div class="ui-drop-container_ico-mom">
																<div class="ui-drop-container_ico-mom_down">→</div>
																<div class="ui-drop-container_ico-mom_top">→</div>
															</div>
														</div>
														<div class="ui-drop-container_content">
															<p class="p-17-25">
																<?php echo get_sub_field('text') ?>
															</p>
														</div>
													</div>
												<?php } ?>
											</div>
										<?php } ?>
										<div class="t-line fw"></div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'text_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="text-block-ui">
											<h2 class="h2-35-45">
												<?php echo get_sub_field('header') ?>
											</h2>
											<div class="p-17-25 mar20 w-richtext">
												<?php echo get_sub_field('text') ?>
											</div>
										</div>
										<div class="t-line fw"></div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'text_quote_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="text-block-ui bloq1">
											<div class="p-17-25-2 w-richtext">
												<?php echo get_sub_field('text_with_quote') ?>
											</div>
										</div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'quote_with_image' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="text-block-ui bloq2"><img src="<?php $field = get_sub_field('image');
																																if (isset($field['url'])) {
																																	echo ($field['url']);
																																} elseif (is_numeric($field)) {
																																	echo (wp_get_attachment_image_url($field, 'full'));
																																} else {
																																	echo ($field);
																																} ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="image-5" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
											<div class="bloq-right">
												<blockquote class="block-quote p-17-25 bloq2">
													<?php echo get_sub_field('quote_text') ?>
												</blockquote>
												<div class="text-block-7">
													<?php echo get_sub_field('author') ?>
												</div>
												<div class="html-embed-5 w-embed">
													<svg width="25" height="17" viewbox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.03906 12.7761L8.49506 16.2321L11.8791 12.7761L8.49506 9.39207L11.8791 0.752071L11.4471 0.320068L5.03906 12.7761ZM14.1831 12.7761L17.6391 16.2321L21.0231 12.7761L17.6391 9.39207L21.0231 0.752071L20.6631 0.320068L14.1831 12.7761Z" fill="#030E14"></path>
													</svg>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'contacts_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="div-block-23">
											<h2 class="h2-35-45">
												<?php echo get_sub_field('header') ?>
											</h2>
											<p class="p-17-25 mar20">
												<?php echo get_sub_field('text') ?>
											</p>
										</div>
										<div class="t-line fw"></div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'booking_tabs_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="cms-press-ajax"><a href="<?php the_permalink(); ?>" class="ui-pressrelease-a w-inline-block">
												<div class="p-20-30 w20"><?php echo get_the_date(get_option('date_format')); ?></div>
												<div class="p-25-40 mar13"><?php the_title(); ?></div>
											</a><a href="#" class="ui-pressrelease-a w-inline-block">
												<div class="p-20-30 w20">8 September 2022</div>
												<div class="p-25-40 mar13">Bechstein Hall announces its music season for autumn 2022</div>
											</a><a href="#" class="ui-pressrelease-a w-inline-block">
												<div class="p-20-30 w20">8 September 2022</div>
												<div class="p-25-40 mar13">Bechstein Hall announces its music season for autumn 2022</div>
											</a></div>
										<div class="t-line fw"></div>
									</div>
								<?php } ?>
								<?php if (get_row_layout() == 'booking_tabs_section' && !get_sub_field('-')) { ?>
									<div class="ui-boxoffice-block">
										<div class="div-block-23">
											<h2 class="h2-35-45">
												<?php echo get_sub_field('header') ?>
											</h2>
											<div class="payment-tabs">
												<div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
													<?php if (have_rows('tabs')) { ?>
														<div class="tabs-menu w-tab-menu">
															<?php global $parent_id;
															$parent_id = $loop_id;
															$loop_index = 0;
															$loop_title = "Tabs";
															$loop_field = "tabs";
															while (have_rows('tabs')) {
																global $loop_id;
																$loop_index++;
																$loop_id++;
																the_row(); ?><a data-w-tab="Tab <?php echo get_row_index() ?>" class="tab-payments w-inline-block w-tab-link <?php if (get_row_index() === 1) echo 'w--current'; ?>">
																	<div><?php echo get_sub_field('tab_header') ?></div>
																</a>
															<?php } ?>
														</div>
													<?php } ?>
													<?php if (have_rows('tabs')) { ?>
														<div class="tabs-content w-tab-content">
															<?php global $parent_id;
															$parent_id = $loop_id;
															$loop_index = 0;
															$loop_title = "Tabs";
															$loop_field = "tabs";
															while (have_rows('tabs')) {
																global $loop_id;
																$loop_index++;
																$loop_id++;
																the_row(); ?>
																<div data-w-tab="Tab <?php echo get_row_index() ?>" class="w-tab-pane <?php if (get_row_index() === 1) echo 'w--tab-active'; ?>">
																	<div class="rich w-richtext">
																		<?php echo get_sub_field('tab_description') ?>
																	</div>
																</div>
															<?php } ?>
														</div>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="t-line fw"></div>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
					<?php }*/ ?>
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
	<?php get_template_part("footer_block", ""); ?>