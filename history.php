<?php
/*
Template name: History
*/
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Wed Oct 05 2022 12:09:23 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="62ff4833c7c585b5564f9174" data-wf-site="624c5364ec3046603b0a108f">
<?php get_template_part("header_block", ""); ?>

<body class="body history-page ready-hist">
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
	<main class="wrapper hirory-page">
		<div class="history-black">
			<div class="his-dot">
				<div data-w-id="67b493ec-61f9-cd8d-ee5c-6db2792c48b3" class="his-round"></div>
			</div>
		</div>
		<div class="smooth-conatienr">
			<section data-w-id="0bfb1cea-2e49-24c6-20ea-92e2a2394a01" class="section his-start-section wf-section">
				<h1 data-w-id="0bfb1cea-2e49-24c6-20ea-92e2a2394a23" class="h1-75-90 history">HISTORY</h1>
				<div class="text-block-8">Jessica Duchen</div>
				<p data-w-id="3ad2e894-31d6-eb80-7483-d3d2a4d7ae2c" class="p-25-40 history-page">Bechstein Hall is London’s newest recital venue. Yet it is also one with a fascinating history: indeed, the space predates its famous neighbour at no. 36. The association of 18-22 Wigmore Street with the piano trade goes back to the late 19th century when it was constructed for John Brinsmead and Sons.</p>
				<div data-w-id="709b1c3b-8026-956a-adfc-ef232fca1cec" class="div-block-4"></div>
				<div class="images-liner">
					<div data-w-id="7922631e-f617-13a2-690f-9233e32ce457" class="images-line">
						<div class="image-his-item _1m"><img src="<?php echo get_template_directory_uri() ?>/images/626956a0fdf77a4376107f95_img-min.jpg" loading="lazy" alt class="image-cards"></div>
						<div class="image-his-item _2m"><img src="<?php echo get_template_directory_uri() ?>/images/626956a008f8f4440e5e0778_img-1-min.jpg" loading="lazy" alt class="image-cards"></div>
						<div class="image-his-item _3m"><img src="<?php echo get_template_directory_uri() ?>/images/626956a04cfca040db185764_img-2-min.jpg" loading="lazy" alt class="image-cards"></div>
						<div class="image-his-item _4m"><img src="<?php echo get_template_directory_uri() ?>/images/626956a04cfca040db185764_img-2-min.jpg" loading="lazy" alt class="image-cards"></div>
					</div>
					<div class="splide hist-page">
						<div class="splide__track">
							<div class="splide__list">
								<div class="splide__slide"><img src="<?php echo get_template_directory_uri() ?>/images/626956a008f8f4440e5e0778_img-1-min.jpg" loading="eager" alt class="image-4"></div>
								<div class="splide__slide"><img src="<?php echo get_template_directory_uri() ?>/images/626956a04cfca040db185764_img-2-min.jpg" loading="eager" alt class="image-4"></div>
								<div class="splide__slide"><img src="<?php echo get_template_directory_uri() ?>/images/626956a0fdf77a4376107f95_img-min.jpg" loading="eager" alt class="image-4"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="years-container last">
			<div class="smooth-conatienr">
				<section data-w-id="9f05344b-77d0-a352-93b6-a1cd30f64afe" class="section reder rl1 ovf wf-section">
					<h2 data-w-id="9f05344b-77d0-a352-93b6-a1cd30f64aff" class="h2-75-90 w75 _22 n1">18-22 Wigmore Street<br><span class="no-pc">return to London</span></h2>
					<div class="his-container lft">
						<div class="his-left lft m1">
							<div class="year-big-counter strk viz-mob">1836</div>
							<div class="his-left-imagemom er"><img src="<?php echo get_template_directory_uri() ?>/images/62fbac15da6d955c3df26693_Rectangle2026.png" loading="lazy" data-w-id="9f05344b-77d0-a352-93b6-a1cd30f64b07" alt class="img-cover"></div>
						</div>
						<div class="his-right m691">
							<p data-w-id="9f05344b-77d0-a352-93b6-a1cd30f64b0b" class="p-20-35">18-22 Wigmore Street as we see it today was redeveloped in 1892 by Holloway Brothers to designs by the architect Leonard Hunt, specifically to meet the needs of the flourishing Brinsmead company. Formerly a shepherd and carpenter, John Brinsmead had established his piano company as early as 1836, originally in Charlotte Street.<br></p>
						</div>
					</div>
				</section>
			</div>
			<div data-w-id="71bb4f60-fb2b-4788-4deb-ef0ad269b7f0" class="year-item _1st">
				<section data-w-id="342bad4e-5d9a-bb1f-d653-88710a380abf" class="section year-horizontal first r1l wf-section">
					<div class="div-block-8">
						<div class="year-big-counter_mom">
							<div class="year-big-counter colored">1870</div>
							<div class="year-big-counter strk">1870</div>
						</div>
						<div class="year-big-counter_mom mom2">
							<h2 class="h2-75-90 w75 _22 fw-txt m2">company’s name changed to John Brinsmead and Sons<span class="no-pc n-mob"></span></h2>
						</div>
					</div>
				</section>
				<section data-w-id="ef860977-b093-43ca-4ac7-8d7ebcc2dc61" class="section reder rl1 rltop ntop wf-section">
					<div class="his-container lft">
						<div class="his-left lft mnonr"></div>
						<div class="his-right m691 m3">
							<p data-w-id="ef860977-b093-43ca-4ac7-8d7ebcc2dc6c" class="p-20-35">It was a family firm; Brinsmead himself, a larger-than-life character, at first was in business with his brothers, one of whom was his chief technician, and in 1870 the company’s name changed to John Brinsmead and Sons, of whom there were four.<br><br>John remained at the helm until he was 90, ruling his employees, related or otherwise, with a will of iron and walking each day between his home near Regent’s Park, the piano workshop in Kentish Town and the salesroom in Wigmore Street. His longevity and good health has often been credited to that rigorous regime.<br></p>
						</div>
					</div>
				</section>
				<div class="div-block-7"></div>
			</div>
			<section data-w-id="d522a6e7-3e80-1820-df05-2283892dc010" class="section year-horizontal first r1l rt2 wf-section">
				<div class="div-block-8 abser">
					<div class="year-big-counter_mom _2m">
						<div class="year-big-counter colored">1890</div>
						<div class="year-big-counter strk">1890</div>
					</div>
					<div class="year-big-counter_mom mom2">
						<h2 class="h2-75-90 w75 _22 fw-txt np"><span class="text-span">2,000 </span> pianos annually<br><span class="no-pc">return to London</span></h2>
					</div>
				</div>
				<div class="div-block-24"></div>
			</section>
			<div class="year-item">
				<section data-w-id="13195c1f-a477-7ef5-a6ff-c620357fa45a" class="section reder rl1 rltop _22 wf-section">
					<div class="his-container lft cntrtext mx">
						<div class="his-right wauto">
							<p data-w-id="13195c1f-a477-7ef5-a6ff-c620357fa45e" class="p-20-35 mbz">The sales side of the Brinsmead business first moved to what is now 18 Wigmore Street (it was then no. 4) in 1863 and subsequently expanded into nos. 20 and 22. They needed the space: by the mid 1890s, the company was producing around 2,000 pianos annually.<br></p>
						</div>
						<div class="his-right wauto">
							<p data-w-id="b6da9871-6dc5-318e-52b2-d81a5749965a" class="p-20-35 mbz _2">These would be displayed to tempt purchasers in the snazziest of surroundings: six rooms in all, typically displaying several hundred pianos, ‘ranging in price from the sound and popular drawing-room piano at forty guineas to the most exquisite and elaborately finished model at the plutocratic cost of three hundred and fifty guineas’ (as one puff-piece declared in 1893).<br></p>
						</div>
					</div>
				</section>
			</div>
			<section data-w-id="418c1525-5884-0c3e-9928-356aa3ec62ba" class="section year-horizontal first r1l rt3 wf-section">
				<div class="div-block-8 abser _2">
					<div class="year-big-counter_mom mom2">
						<h2 class="h2-75-90 w75 _22 fw-txt np">In <span class="text-span"> 1894  </span>Brinsmead added a 130-seat recital hall<br><span class="no-pc">return to London</span></h2>
					</div>
				</div>
				<div class="div-block-24"></div>
			</section>
			<div class="year-item _1st l2">
				<section data-w-id="908febcb-ccf3-672f-4710-42fec68ccdd7" class="section year-horizontal first r1l4 lk1 wf-section">
					<div class="div-block-8 lmjg">
						<div class="year-big-counter_mom">
							<div class="year-big-counter colored">1894</div>
							<div class="year-big-counter strk">1894</div>
						</div>
					</div>
				</section>
				<section data-w-id="908febcb-ccf3-672f-4710-42fec68ccde4" class="section reder rl1 rltop _233 wf-section">
					<div class="his-container lft">
						<div class="his-left lft"></div>
						<div class="his-right m691 m3">
							<p data-w-id="908febcb-ccf3-672f-4710-42fec68ccde8" class="p-20-35">Sporting elegant mahogany panelling and leaded glass windows, the showrooms were described as ‘one of the sights of fashionable London’, with ‘few rivals as regards their general attractiveness’. The display space took up the ground floor and the basement, the former with rooms on either side of the hallway. In 1894 Brinsmead added a 130-seat recital hall at the back of the lower floor, boasting windows on two sides, mirrored columns and tiled walls.<br>Sporting elegant mahogany panelling and leaded glass windows, the showrooms were described as ‘one of the sights of fashionable London’, with ‘few rivals as regards their general attractiveness’. The display space took up the ground floor and the basement, the former with rooms on either side of the hallway. In 1894 Brinsmead added a 130-seat recital hall at the back of the lower floor, boasting windows on two sides, mirrored columns and tiled walls.<br></p>
						</div>
					</div>
				</section>
				<div class="div-block-7"></div>
			</div>
			<div class="year-item lst">
				<section data-w-id="78a61c88-637f-110c-6ea1-5d33e6624c5c" class="section year-horizontal first r1l4 lst1 wf-section">
					<div class="div-block-8 hgctc">
						<div class="year-big-counter_mom">
							<div class="year-big-counter colored">1914</div>
							<div class="year-big-counter strk">1914</div>
						</div>
						<div class="year-big-counter_mom mom2">
							<div class="year-big-counter colored _2">1917</div>
							<div class="year-big-counter strk">1917</div>
						</div>
					</div>
				</section>
				<section data-w-id="78a61c88-637f-110c-6ea1-5d33e6624c63" class="section reder rl1 rltop kjglg wf-section">
					<div class="his-container lft">
						<div class="his-left lft"></div>
						<div class="his-right m691 m3">
							<p data-w-id="78a61c88-637f-110c-6ea1-5d33e6624c67" class="p-20-35">In 1914 almost 100 of the men from the Brinsmead workforce were recruited into active service and in spring of 1917 the firm was forced to make parts for aircraft. This caused an obvious, and intense, pressure on the business until finally in spring 1921 John Brinsmead and Sons was declared insolvent.<br><br>In 1889, Carl Bechstein’s piano firm from Berlin chose 40 Wigmore Street as the site for its London operations. They followed their London success by establishing in 1901 a concert hall at no. 36, originally known as Bechstein Hall. However, in 1916, during the surge of anti-German sentiment that accompanied the ongoing First World War, the property was confiscated and sold to Debenham’s for £56,500. The venue reopened the following year under a new name: Wigmore Hall.<br><br>The Bechstein association has been absent from Wigmore Street ever since, but the 21st century seems to demand a new approach. With the restoration of this historic recital venue, complete with all mod cons, Wigmore Street acquires a little sister to its famous hall and restores at long last the historic link between this delectable location and the firm of Bechstein itself.<br></p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
	<?php get_footer(); ?>
	<!-- <footer class="footer">
		<div class="foo-mom">
			<div class="footer-container top-container">
				<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79a4-2bcc79a3" class="footer-col _1 top-col"><a href="/whats-on" class="link-foo-big">What’s on?</a><a href="#" class="link-foo-small">Schedule</a><a href="#" class="link-foo-small">Priority booking</a>
					<div class="foo-marger"></div><a href="/festival" class="link-foo-whats_last w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/625032fe74f84b30f4448559_Rectangle2039.jpg" loading="lazy" alt class="img-cover foters">
						<div class="text-block">Autumn Festival ‘22</div>
					</a><a href="#" class="link-foo-small no-mob">Rachmaninov Days at Bechstein Hall</a>
				</div>
				<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79ba-2bcc79a3" class="footer-col top-col center-col"><a href="/your-visit" class="link-foo-big">your visit</a><a href="/box-office" class="link-foo-small">Health and safety</a>
					<div class="foo-marger"></div><a href="/box-office" class="link-foo-small">Ticketing Info</a><a href="#" class="link-foo-small">Getting here</a><a href="#" class="link-foo-small">Security & Rules</a><a href="#" class="link-foo-small">Contact Us</a>
					<div class="foo-marger"></div><a href="/about" class="link-foo-small">Around Bechstein Hall</a><a href="#" class="link-foo-small">Tours</a><a href="#" class="link-foo-small">Eat & drink</a><a href="#" class="link-foo-small">Venue & seating plan</a>
					<div class="foo-marger"></div><a href="#" class="link-foo-small">Accesible facilities</a><a href="#" class="link-foo-small">Accesibility statement</a><a href="/contacts" class="link-foo-small">Contacts</a>
					<div class="foo-bottom no-pc"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#" class="link-foo-small last">Privacy policy</a></div>
				</div>
				<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79dd-2bcc79a3" class="footer-col _3 top-col"><a href="/history" aria-current="page" class="link-foo-big _2 w--current">History</a><a href="#" class="link-foo-big _2">friends</a><a href="/press-office" class="link-foo-big _2">Press</a><a href="#" class="link-foo-big _2">hire the hall</a></div>
			</div>
			<div class="footer-container bottom">
				<div class="footer-col _1">
					<div class="div-block-2">
						<div class="p-20-27">(020) 1234 5678 support@bechsteinhall.com London, W1U 2RJ, 22–28 Wigmore St.</div>
					</div>
					<div class="foo-soc-line"><a href="#" class="link-soc w-inline-block">
							<div class="soc-icon w-embed"><svg class="ico-yt" width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="20" cy="20" r="20" fill="#030E14"></circle>
									<g clip-path="url(#clip0_1631_27420)">
										<path d="M17.5455 24.0231V16.8862L23.8182 20.4548L17.5455 24.0231ZM31.4985 14.6405C31.2225 13.6011 30.4092 12.7827 29.3766 12.5049C27.505 12.0001 20 12.0001 20 12.0001C20 12.0001 12.495 12.0001 10.6233 12.5049C9.59076 12.7827 8.77749 13.6011 8.50151 14.6405C8 16.5243 8 20.4546 8 20.4546C8 20.4546 8 24.3849 8.50151 26.2688C8.77749 27.3081 9.59076 28.1266 10.6233 28.4045C12.495 28.9092 20 28.9092 20 28.9092C20 28.9092 27.505 28.9092 29.3766 28.4045C30.4092 28.1266 31.2225 27.3081 31.4985 26.2688C32 24.3849 32 20.4546 32 20.4546C32 20.4546 32 16.5243 31.4985 14.6405Z" fill="#F5F5F0"></path>
									</g>
									<defs>
										<clippath id="clip0_1631_27420">
											<rect width="24" height="16.9091" fill="white" transform="translate(8 12)"></rect>
										</clippath>
									</defs>
								</svg></div>
						</a><a href="#" class="link-soc w-inline-block">
							<div class="soc-icon w-embed"><svg class="ico-in" width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="20" cy="20" r="20" fill="#030E14"></circle>
									<g clip-path="url(#clip0_1631_25901)">
										<path d="M15.0301 8.08417C13.7533 8.14441 12.8814 8.34817 12.1191 8.64769C11.3303 8.95513 10.6616 9.36769 9.99634 10.0354C9.33106 10.703 8.92138 11.3722 8.6161 12.1622C8.32066 12.9262 8.1205 13.7988 8.0641 15.0763C8.0077 16.3539 7.99522 16.7645 8.00146 20.0232C8.0077 23.2819 8.0221 23.6904 8.08402 24.9706C8.14498 26.2471 8.34802 27.1188 8.64754 27.8813C8.95546 28.6702 9.36754 29.3386 10.0355 30.0041C10.7034 30.6696 11.372 31.0783 12.164 31.3841C12.9272 31.6791 13.8001 31.8802 15.0774 31.9361C16.3547 31.992 16.7658 32.005 20.0235 31.9987C23.2813 31.9925 23.6915 31.9781 24.9714 31.9174C26.2513 31.8567 27.1184 31.6522 27.8811 31.3541C28.67 31.0455 29.3389 30.6341 30.0039 29.9659C30.669 29.2978 31.0784 28.6282 31.3835 27.8376C31.6791 27.0744 31.88 26.2015 31.9355 24.9252C31.9914 23.6443 32.0046 23.2354 31.9983 19.9771C31.9921 16.7189 31.9775 16.3104 31.9167 15.0307C31.856 13.751 31.6527 12.882 31.3535 12.119C31.0451 11.3302 30.6335 10.6622 29.9658 9.99625C29.2981 9.33025 28.628 8.92105 27.8377 8.61673C27.074 8.32129 26.2016 8.11993 24.9243 8.06473C23.6471 8.00953 23.2359 7.99537 19.977 8.00161C16.718 8.00785 16.31 8.02177 15.0301 8.08417ZM15.1703 29.7773C14.0003 29.7264 13.365 29.532 12.9416 29.3693C12.381 29.1533 11.9816 28.8922 11.5597 28.4743C11.1378 28.0565 10.8786 27.6557 10.6597 27.0963C10.4953 26.6729 10.2973 26.0383 10.2426 24.8683C10.1831 23.6038 10.1706 23.2241 10.1636 20.0203C10.1567 16.8166 10.1689 16.4374 10.2243 15.1723C10.2743 14.0033 10.4699 13.3673 10.6323 12.9442C10.8483 12.3828 11.1085 11.9842 11.5273 11.5625C11.9461 11.1408 12.3457 10.8811 12.9056 10.6622C13.3285 10.4971 13.9631 10.3008 15.1326 10.2451C16.3981 10.1851 16.7773 10.1731 19.9806 10.1662C23.1839 10.1592 23.564 10.1712 24.83 10.2269C25.9991 10.2778 26.6353 10.4714 27.0579 10.6349C27.6188 10.8509 28.0179 11.1103 28.4396 11.5299C28.8613 11.9494 29.1212 12.3475 29.3401 12.9086C29.5055 13.3303 29.7018 13.9647 29.757 15.1349C29.8172 16.4004 29.8309 16.7799 29.8367 19.9829C29.8424 23.1859 29.8311 23.5663 29.7757 24.8309C29.7246 26.0009 29.5307 26.6364 29.3677 27.0603C29.1517 27.6207 28.8913 28.0203 28.4723 28.4417C28.0532 28.8631 27.6541 29.1228 27.0939 29.3417C26.6715 29.5066 26.0363 29.7034 24.8677 29.7591C23.6022 29.8186 23.223 29.8311 20.0185 29.838C16.814 29.845 16.436 29.832 15.1705 29.7773H15.1703ZM24.9529 13.5866C24.9534 13.8715 25.0383 14.1498 25.197 14.3863C25.3556 14.6229 25.5808 14.8071 25.8442 14.9156C26.1075 15.0241 26.3971 15.0521 26.6764 14.9961C26.9556 14.94 27.212 14.8024 27.413 14.6006C27.614 14.3988 27.7507 14.142 27.8058 13.8625C27.8608 13.5831 27.8317 13.2936 27.7222 13.0306C27.6127 12.7677 27.4277 12.5431 27.1906 12.3854C26.9534 12.2276 26.6748 12.1437 26.39 12.1442C26.0082 12.145 25.6423 12.2974 25.3728 12.5679C25.1033 12.8384 24.9523 13.2048 24.9529 13.5866ZM13.8385 20.0122C13.8452 23.4154 16.6091 26.1679 20.0115 26.1614C23.414 26.155 26.1685 23.3914 26.162 19.9882C26.1555 16.585 23.391 13.8317 19.988 13.8384C16.5851 13.8451 13.832 16.6095 13.8385 20.0122ZM15.9999 20.0079C15.9984 19.2167 16.2314 18.4429 16.6697 17.7842C17.1079 17.1255 17.7316 16.6116 18.4619 16.3074C19.1923 16.0032 19.9964 15.9224 20.7726 16.0752C21.5489 16.228 22.2624 16.6075 22.8229 17.1659C23.3834 17.7242 23.7658 18.4362 23.9217 19.2118C24.0776 19.9874 23.9999 20.7919 23.6986 21.5234C23.3973 22.2549 22.8859 22.8806 22.2289 23.3215C21.572 23.7623 20.7991 23.9984 20.0079 24C19.4826 24.0011 18.9622 23.8987 18.4765 23.6987C17.9908 23.4986 17.5492 23.2049 17.177 22.8342C16.8048 22.4634 16.5093 22.023 16.3073 21.5381C16.1054 21.0531 16.0009 20.5332 15.9999 20.0079Z" fill="#F5F5F0"></path>
									</g>
									<defs>
										<clippath id="clip0_1631_25901">
											<rect width="24" height="24" fill="white" transform="translate(8 8)"></rect>
										</clippath>
									</defs>
								</svg></div>
						</a><a href="#" class="link-soc w-inline-block">
							<div class="soc-icon w-embed"><svg class="ico-tw" width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_1630_13060)">
										<path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95431 31.0457 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0457 8.95431 40 20 40Z" fill="#030E14"></path>
										<path d="M16.3402 30.55C25.2102 30.55 30.0602 23.2 30.0602 16.83C30.0602 16.62 30.0602 16.41 30.0502 16.21C30.9902 15.53 31.8102 14.68 32.4602 13.71C31.6002 14.09 30.6702 14.35 29.6902 14.47C30.6902 13.87 31.4502 12.93 31.8102 11.8C30.8802 12.35 29.8502 12.75 28.7502 12.97C27.8702 12.03 26.6202 11.45 25.2302 11.45C22.5702 11.45 20.4102 13.61 20.4102 16.27C20.4102 16.65 20.4502 17.02 20.5402 17.37C16.5302 17.17 12.9802 15.25 10.6002 12.33C10.1902 13.04 9.95022 13.87 9.95022 14.75C9.95022 16.42 10.8002 17.9 12.1002 18.76C11.3102 18.74 10.5702 18.52 9.92021 18.16C9.92021 18.18 9.92021 18.2 9.92021 18.22C9.92021 20.56 11.5802 22.5 13.7902 22.95C13.3902 23.06 12.9602 23.12 12.5202 23.12C12.2102 23.12 11.9102 23.09 11.6102 23.03C12.2202 24.95 14.0002 26.34 16.1102 26.38C14.4602 27.67 12.3802 28.44 10.1202 28.44C9.73021 28.44 9.35021 28.42 8.97021 28.37C11.0802 29.75 13.6202 30.55 16.3402 30.55Z" fill="#F5F5F0"></path>
									</g>
									<defs>
										<clippath id="clip0_1630_13060">
											<rect width="40" height="40" fill="white"></rect>
										</clippath>
									</defs>
								</svg></div>
						</a><a href="#" class="link-soc w-inline-block">
							<div class="soc-icon w-embed"><svg class="ico-fb" width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_1630_14423)">
										<path d="M40 20C40 8.95434 31.0457 4.57764e-05 20 4.57764e-05C8.9543 4.57764e-05 0 8.95434 0 20C0 29.9826 7.31371 38.2567 16.875 39.7571V25.7813H11.7969V20H16.875V15.5938C16.875 10.5813 19.8609 7.81255 24.4293 7.81255C26.6175 7.81255 28.9062 8.20317 28.9062 8.20317V13.125H26.3843C23.8998 13.125 23.125 14.6667 23.125 16.2484V20H28.6719L27.7852 25.7813H23.125V39.7571C32.6863 38.2567 40 29.9826 40 20Z" fill="#030E14"></path>
										<path d="M27.7852 25.7812L28.6719 20H23.125V16.2483C23.125 14.6667 23.8998 13.125 26.3843 13.125H28.9063V8.20312C28.9063 8.20312 26.6175 7.8125 24.4293 7.8125C19.8609 7.8125 16.875 10.5812 16.875 15.5938V20H11.7969V25.7812H16.875V39.757C17.8932 39.9168 18.9369 40 20 40C21.0631 40 22.1068 39.9168 23.125 39.757V25.7812H27.7852Z" fill="#F5F5F0"></path>
									</g>
									<defs>
										<clippath id="clip0_1630_14423">
											<rect width="40" height="40" fill="white"></rect>
										</clippath>
									</defs>
								</svg></div>
						</a></div>
				</div>
				<div class="footer-col no-mob">
					<div class="foo-bottom nz"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#" class="link-foo-small last">Privacy policy</a></div>
				</div>
				<div class="footer-col _3">
					<div class="foo-bottomer">
						<div>© 2022, Bechstein Hall</div><a href="#" class="funk-link">Website made by Func. ↗</a>
					</div>
				</div>
			</div>
		</div>
		<div class="white-z"></div>
	</footer> -->
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
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
	<script>
		$(document).ready(function() {

			setTimeout(function() {
				$(".body").removeClass("ready-hist");
			}, 500);


			console.log("ready");
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

			sldes();
		});
	</script>
	<?php get_template_part("footer_block", ""); ?>