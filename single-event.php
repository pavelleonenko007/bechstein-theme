<?php
/*
Template name: Event
*/
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) --><html data-wf-page="62bc3fe7d9cc618392261598" data-wf-site="62bc3fe7d9cc6134bf261592">
	<?php get_template_part("header_block", ""); ?>
	<body class="body">
		<div class="css w-embed">
			<style>

html{font-size:1px}

.booktickets-btn.sold-out{pointer-events:none}

.yourvisit-column .ui-boxoffice-block:nth-child(1) .t-line{display:none}

.tmp3 .yourvisit-column .ui-boxoffice-block:nth-child(1) {padding-top:0px}

.grey-z,.white-z{top:calc(100vh - 80rem)}
.images-grid a:nth-child(1){}
.images-grid a:nth-child(6n+1){
    -ms-grid-column: span 3 !Important;
    grid-column-start: span 3 !Important;
    -ms-grid-column-span: 3 !Important;
    grid-column-end: span 3 !Important;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
}

.images-grid a:nth-child(6n+2){
    -ms-grid-column: span 2 !Important;
    grid-column-start: span 2 !Important;
    -ms-grid-column-span: 2 !Important;
    grid-column-end: span 2 !Important;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
}

.b-line{transition: all 300ms ease}
.body.menuopen .b-line:nth-child(1){transform: rotate(45deg) translateY(15rem) translateX(12.5rem);
    transform-origin: 50% 50%;}
.body.menuopen .b-line:nth-child(2){opacity: 0;}
.body.menuopen .b-line:nth-child(3){
    transform: rotate(-45deg) translateY(-5rem) translateX(2.5rem);
    transform-origin: 50% 50%;
}

.body.menuopen .header{background:#030e14}

*[bgline] *{position: relative; z-index: 3}

*[bgline="1"]:after,*[bgline="1"]:before{content: "";
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
    left: 1px;}

*[bgline="1"]:before{
    right: 1px;
    background-position-x: right;
    left: auto;}
    
    
*[bgline="2"]:after,*[bgline="2"]:before{content: "";
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
    left: 1px;}

*[bgline="2"]:before{
    right: 1px;
    background-position-x: right;
    left: auto;}    
    



*[bgline="3"]:after,*[bgline="3"]:before{content: "";
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
    left: 1px;}

*[bgline="3"]:before{
    right: 1px;
    background-position-x: right;
    left: auto;}    


.year-horizontal.first, .cursor{pointer-events:none}

.breadcrumbs-link:after{
  content: " → ";
  white-space: pre;
}

.breadcrumbs-link:nth-last-child(1):after{display:none}

.search-line-input{
    background-position-y: calc(100% - 4rem);
}

.catalog-column:after{content:"";

    content: "";
    position: absolute;
    z-index: -1;
    background: white;
    left:0px;
    right:0px;
    top: 0px;
    bottom: 0px;
    top: 42rem;
    border-radius: 60px 0px 0px 0px;
}

.catalog-column.fest-col:after{ top: 0rem;}

.cms-tems .cms-ul:nth-last-child(1)  .cms-li:nth-last-child(1){border:none}

.cms-li_tags-div.in-left .cms-li_tag-link{border-radius: 5px;margin-right: 10rem}

.ui_alert-block a:after{content:" →"}

.event-row_right-col > h2 {margin-top: 55rem; }

.yvisit-styk a:nth-child(2){margin-top:19rem}

a, *{
    text-decoration-skip-ink: none;
}

.payment-tabs{width: calc(100% + 40rem)}

p strong{font-weight: 500}

.rich.cont p{
font-size: 20rem;
line-height: 30rem;
color: #030E14;
margin-bottom: 10rem}

.rich.cont p a{
color: #030E14; text-decoration:none;font-weight: 500}

.form-filter-press .filter-chek{margin-right:20rem}

.filter-chek .w--redirected-checked ~ span {text-decoration: underline}

.black-theme *{color:white}

.navbar.grey-head *,.navbar.grey-head-scroll *{color:white}

.navbar.grey-head,.navbar.grey-head-scroll {transition: all 500ms ease;background-color: #030e14; }

.navbar.grey-head .r-head-sec a,.navbar.grey-head-scroll .r-head-sec a{color:white; filter:invert(1)}

.navbar.grey-head .r-head-sec a div,.navbar.grey-head-scroll .r-head-sec a div{color:black; }

.history-page header .right-header *, .history-page .navbar{transition: all 500ms ease; }

.history-page .navbar{background-color: #f5f5f0; }

.ready-hist header .right-header *{color:white;}

.ready-hist .navbar{background-color: transparent;}

.year-lottie g g:nth-child(1) path{stroke: #dcca99;stroke-opacity: 0.3; stroke-width: 5px;}

.year-lottie g g:nth-child(2) path{stroke: #dcca99; 
    stroke-width: 8px;}
    
.year-btn {
    height: 10rem;
}

.year-btn .year-in-counter{transform: scale(0); opacity: 0;}

.year-btn .year-img{opacity: 1}

.year-btn.active{
    height: 100rem;
}

.year-btn.active .year-in-counter{transform: scale(1); opacity: 1;}

.year-btn.active .year-img{opacity: 0}

.year-big-counter{
transition: all 500ms cubic-bezier(1, .258, .45, .913)
}

.year-big-counter {
    color: #030E14;
}

.year-big-counter.second-con{
color: #030E1410;
}

.year-big-counter.strk {
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #DCCA99;
color: transparent;}

.scroll-view.-touchable {
    overflow: hidden;
    height: 100vh;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
}

.slider-days_month-days {counter-reset: slidercard;}

.slider-days_rad .slider-days_rad-ins:after{
    counter-increment: slidercard;
    content: counter(slidercard);
}
.w-form-formradioinput--inputType-custom.w--redirected-checked {
    border-top-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 0px;
    border-right-width: 0px;}

.slider-days_rad-ins{box-shadow:none !Important}

.slider-wvwnts_slide{min-width: calc(100% - 20rem)}

.splide__pagination.splide__pagination--ltr,.splide__arrows.splide__arrows--ltr,.slide_sr{display:none !important}

.splide__track span{font-size: 0px}

.burger-menu *{color:white}

.burger-menu .foo-marger{
background-color: rgb(255 255 255 / 20%);
}

.burger-menu .link-soc{
    border-color: rgb(255 255 255 / 50%);}

.search-row .cms-li_tag-link{background:white}

.cms-li_actions-div.biger .booktickets-btn{margin-bottom: 12rem; margin-right: 0px}

@media screen and (min-width: 1920px){

.cms-li_content .booktickets-btn, .cms-li_content .cms-li_price{display:none}

.event-row_right-col > *{max-width: 755rem; margin-left: auto; margin-right: auto}
}

@media screen and (min-width: 1280px){

.head-event-content {min-height: calc(100vh - 146rem);}

}

@media screen and (max-width: 991px){

.catalog-column .h1-75-90{margin-left: -30rem}

.cms-li_time-div .p-30-45{min-width:190rem}

}


@media screen and (max-width: 765px){

.center-col .link-foo-small,.center-col .foo-marger{display:none}

.navbar.grey-head {
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(30%, #030e14), color-stop(65%, rgb(3 14 20 / 80%)), to(transparent));
background-image: linear-gradient(180deg, #030e14  30%, rgb(3 14 20 / 80%) 65%, transparent);

}
.navbar.grey-head{
background-color: transparent;}


.navbar {
background-image: linear-gradient(180deg, #f5f5f0 30%, #f5f5f005 65%, transparent);
}

.payment-tabs {
    width: 100%;
}
}

@media screen and (max-width: 495px){
.head-event-content{min-height: calc(100vh - 160rem)}

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


@media only screen and (orientation: landscape) and (max-height: 495px){
    .body *{opacity:0}
    
     .body:after{content:"";
         content: "";
    background: url(https://uploads-ssl.webflow.com/624c5364ec3046603b0a108f/62b317d53ecbe881bb1e3e39_rotation.png);
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 40px;
    transform: rotateY(180deg);}
}
			
			
			</style>
		</div>
		<div data-animation="default" data-collapse="none" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
			<header class="header">
				<div class="left-header"><a href="/" class="brand w-nav-brand"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6105552615ba_logo.svg" loading="lazy" alt class="logo"></a><a href="#" class="header-video-link w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61a8292615b9_header-video-link.png" loading="lazy" alt></a></div>
				<div class="right-header">
					<nav role="navigation" class="nav-menu w-nav-menu"><a href="/whats-on" class="navbar-links w-nav-link">What’s on</a><a href="/your-visit" class="navbar-links w-nav-link">your Visit</a><a href="#" class="navbar-links no-mob w-nav-link">bechstein hall</a></nav>
					<div class="w-nav-button">
						<div class="w-icon-nav-menu"></div>
					</div>
					<div class="r-head-sec">
						<div class="right-menuer"><a href="#" class="head-search-btn w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc61ba862615bb_search.svg" loading="lazy" alt class="ico-60"></a><a bgline="1" href="#" class="header-book-head-btn w-inline-block"><div>Book tickets</div></a></div>
						<div class="logreg"><a href="#" class="reglog-a">Log In</a>
							<div> / </div><a href="#" class="reglog-a">Register</a></div><a href="#" class="b-menu w-inline-block"><div class="b-line"></div><div class="b-line"></div><div class="b-line"></div></a></div>
				</div>
			</header>
			<div class="burger-menu">
				<div class="foo-mom">
					<div class="footer-container top-container">
						<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79a4-2bcc79a3" class="footer-col _1 top-col"><a href="/whats-on" class="link-foo-big">What’s on?</a>
							<div class="foo-menu-div"><a href="#" class="link-foo-small">Schedule</a><a href="#" class="link-foo-small">Priority booking</a></div>
							<div class="foo-marger"></div><a href="/festival" class="link-foo-whats_last w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc612f532615c7_Rectangle2039.jpg" loading="lazy" alt class="img-cover foters"><div class="text-block">Autumn Festival ‘22</div></a><a href="#" class="link-foo-small no-mob">Rachmaninov Days at Bechstein Hall</a></div>
						<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79ba-2bcc79a3" class="footer-col top-col center-col"><a href="/your-visit" class="link-foo-big">your visit</a>
							<div class="foo-menu-div"><a href="/box-office" class="link-foo-small">Health and safety</a></div>
							<div class="foo-marger"></div>
							<div class="foo-menu-div"><a href="/box-office" class="link-foo-small">Ticketing Info</a><a href="#" class="link-foo-small">Getting here</a><a href="#" class="link-foo-small">Security & Rules</a><a href="#" class="link-foo-small">Contact Us</a></div>
							<div class="foo-marger"></div>
							<div class="foo-menu-div"><a href="/about" class="link-foo-small">Around Bechstein Hall</a><a href="#" class="link-foo-small">Tours</a><a href="#" class="link-foo-small">Eat & drink</a><a href="#" class="link-foo-small">Venue & seating plan</a></div>
							<div class="foo-marger"></div>
							<div class="foo-menu-div"><a href="#" class="link-foo-small">Accesible facilities</a><a href="#" class="link-foo-small">Accesibility statement</a><a href="/contacts" class="link-foo-small">Contacts</a></div>
							<div class="foo-bottom no-pc"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#" class="link-foo-small last">Privacy policy</a></div>
						</div>
						<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79dd-2bcc79a3" class="footer-col _3 top-col"><a href="/history" class="link-foo-big _2">History</a><a href="#" class="link-foo-big _2">friends</a><a href="/press-office" class="link-foo-big _2">Press</a><a href="#" class="link-foo-big _2">hire the hall</a></div>
					</div>
					<div class="footer-container bottom">
						<div class="footer-col _1">
							<div class="div-block-2">
								<div class="p-20-27">(020) 1234 5678 support@bechsteinhall.com London, W1U 2RJ, 22–28 Wigmore St.</div>
							</div>
							<div class="foo-soc-line"><a href="#" class="link-soc w-inline-block"></a><a href="#" class="link-soc w-inline-block"></a><a href="#" class="link-soc w-inline-block"></a><a href="#" class="link-soc w-inline-block"></a></div>
						</div>
						<div class="footer-col no-mob">
							<div class="foo-bottom nz"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#" class="link-foo-small last">Privacy policy</a></div>
						</div>
						<div class="footer-col _3">
							<div class="foo-bottomer">
								<div>© 2022, Bechstein Hall</div><a href="#" class="funk-link">Website made by Func. ↗</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<main class="wrapper">
			<section class="section wf-section">
				<div class="head-event-container single-page">
					<div class="head-event-content single-page"><img src="<?php $field = get_field('main_image'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="eager" alt="<?php echo esc_attr($field['alt']); ?>" class="img-fw mob-cover" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
						<div class="head-event-content_in">
							<div class="left-event-col left-event">
								<h1 class="h1-75-90 event-h">
									<?php the_title(); ?>
								</h1>
								<div class="p-25-40">
									<?php echo get_field('event_subheader') ?>
								</div><a href="#tickets" bgline="1" class="choisetckets-btn min"><strong>choose tickets</strong></a></div>
							<div class="right-event-col">
								<div class="events-ticket">
									<div class="events-ticket_left">
										<div class="p-17-25 top-ticket">Thursday</div>
										<div class="p-20-30">29 February</div>
										<div class="p-20-30 w20">19:00–21:00</div>
									</div>
									<div class="events-ticket_right"><a bgline="1" href="#" class="booktickets-btn min"><strong>Book tickets</strong></a><a href="#" class="event-ticket_calendar-btn w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt class="img-calendar"><div>ADD TO CALENDAR</div></a></div>
								</div>
								<div class="events-ticket">
									<div class="events-ticket_left">
										<div class="p-17-25 top-ticket">Thursday</div>
										<div class="p-20-30">29 February</div>
										<div class="p-20-30 w20">19:00–21:00</div>
									</div>
									<div class="events-ticket_right"><a bgline="2" href="#" class="booktickets-btn sold-out min"><strong>SOLD OUT</strong></a></div>
								</div>
								<div class="events-ticket">
									<div class="events-ticket_left">
										<div class="p-17-25 top-ticket">Thursday</div>
										<div class="p-20-30">29 February</div>
										<div class="p-20-30 w20">19:00–21:00</div>
									</div>
									<div class="events-ticket_right"><a bgline="2" href="#" class="booktickets-btn sold-out min"><strong>event cancelled</strong></a></div>
								</div>
								<div class="events-ticket">
									<div class="events-ticket_left">
										<div class="p-17-25 top-ticket">Thursday</div>
										<div class="p-20-30">29 February</div>
										<div class="p-20-30 w20">19:00–21:00</div>
									</div>
									<div class="events-ticket_right"><a bgline="1" href="#" class="booktickets-btn priority min"><strong>priority booking only</strong></a>
										<div class="event-ticket_calendar-btn">
											<div>free sales from 26 october</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section event-page wf-section">
				<div class="event-row">
					<div class="event-row_left-col">
						<div class="event-row_left-info">
							<div class="evetn-left-contnt-div">
								<div class="event-avatar"><img src="<?php $field = get_field('small_image'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="img-cover" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>"></div>
								<div>
									<div class="p-35-45 no-mpb">
										<?php the_title(); ?>
									</div>
									<div class="p-17-25 no-mob">
										<?php echo get_field('event_subheader') ?>
									</div>
									<div class="cms-li_tags-div in-left">
										<?php $term_query = get_the_terms(get_the_ID(), "event_tag"); if(is_array($term_query)){ $term_query_total = count($term_query); $term_query_counter = 0; foreach( $term_query as $term ){ $term_query_counter++; ?><a href="<?php echo get_term_link($term->term_id, $term->taxonomy); ?>" class="cms-li_tag-link"><?php echo $term->name ?></a>
										<?php if($term_query_counter != $term_query_total){ ?>
										<?php }}} unset($term_query); ?>
									</div>
									<div class="p-17-25 italic">
										<?php echo get_field('duration_info') ?>
									</div>
								</div>
							</div>
							<div class="tikets-pc">
								<div>
									<div class="events-ticket">
										<div class="events-ticket_left">
											<div class="p-17-25 top-ticket _2">Thursday</div>
											<div class="p-20-30 w20 m30">29 February</div>
											<div class="p-20-30 w20">19:00–21:00</div>
										</div>
										<div class="events-ticket_right"><a bgline="1" href="#" target="_blank" class="booktickets-btn min left-side"><strong>Book tickets</strong></a><a href="#" class="event-ticket_calendar-btn min w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt class="img-calendar"><div>ADD TO CALENDAR</div></a></div>
									</div>
									<div class="events-ticket">
										<div class="events-ticket_left">
											<div class="p-17-25 top-ticket _2">Thursday</div>
											<div class="p-20-30 w20 m30">29 February</div>
											<div class="p-20-30 w20">19:00–21:00</div>
										</div>
										<div class="events-ticket_right"><a bgline="1" href="#" class="booktickets-btn min left-side"><strong>Book tickets</strong></a><a href="#" class="event-ticket_calendar-btn min w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt class="img-calendar"><div>ADD TO CALENDAR</div></a></div>
									</div>
								</div>
								<div class="info-right-side-bottom">
									<div>Tickets information</div>
									<div>Seating plan</div>
								</div>
							</div>
						</div>
					</div>
					<div class="event-row_right-col">
						<?php if(get_field('show_alert_box')) { ?>
						<div>
							<div class="ui_alert-block w-richtext">
								<?php echo get_field('alert_box_text') ?>
							</div>
						</div>
						<?php } ?>
						<div class="ui_text-block w-richtext">
							<?php echo get_field('main_info') ?>
						</div>
						<div class="ui_program-row">
							<div id="w-node-fa9df372-dff5-74be-646a-834100e2033a-92261598" class="ui_program-col">
								<h2 class="h2-35-45">
									<?php echo get_field('performers_header') ?>
								</h2>
								<?php if( have_rows('performers_loop') ){ ?>
								<div class="ui_program-core">
									<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_title="Performers loop"; $loop_field = "performers_loop"; while( have_rows('performers_loop') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
									<div class="ui_program-item">
										<div class="p-20-30">
											<?php echo get_sub_field('name') ?>
										</div>
										<div class="p-17-25 italic">
											<?php echo get_sub_field('instrument') ?>
										</div>
									</div>
									<?php } ?>
								</div>
								<?php } ?>
							</div>
							<div id="w-node-_3918fa0d-bee1-22b5-2113-249bb5d8e536-92261598" class="ui_program-col">
								<h2 class="h2-35-45">
									<?php echo get_field('programme_header') ?>
								</h2>
								<?php if( have_rows('programme_loop') ){ ?>
								<div class="ui_program-core">
									<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_title="Programme loop"; $loop_field = "programme_loop"; while( have_rows('programme_loop') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
									<div class="ui_program-item">
										<div class="p-20-30">
											<?php echo get_sub_field('composer') ?>
										</div>
										<div class="p-17-25 italic">
											<?php echo get_sub_field('composition') ?>
										</div>
									</div>
									<?php } ?>
								</div>
								<?php } ?>
							</div>
						</div>
						<h2 class="h2-35-45">
							<?php echo get_field('watch_and_listen_header') ?>
						</h2>
						<?php if( have_rows('videos') ){ ?>
						<div>
							<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_title="Videos"; $loop_field = "videos"; while( have_rows('videos') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?><a href="#" class="ui-event-link w-inline-block w-lightbox"><div class="ui-event-link_img-mom"><img src="<?php $field = get_sub_field('video_cover'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="ui-event-link_img" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6168db2615cc_poly-play.svg" loading="lazy" alt class="play-ico-24"></div><div class="vert"><div class="p-25-40"><?php echo get_sub_field('video_header') ?></div><div class="p-17-25 italic"><?php echo get_sub_field('video_description') ?></div></div><script type="application/json" class="w-json"><?php
$item = get_sub_field('video_link');
$items = Array();
if( is_array($item) ){
  $video = $item['video'];
  $poster = $item['poster'];
  if( isset($poster['url']) ){
    $image_url = $poster['url'];
  }
  elseif ( is_numeric($poster) ){
    $image_url = wp_get_attachment_image_url($poster, 'full');
  }
  else {
    $image_url = $poster;
  }
} else {
  $video = $item;
  $image_url = '';
}
$items[] = [
  'html' => $video,
  'thumbnailUrl' => $image_url,
  'width' => 940,
  'height' => 528,
  'type' => 'video'
];
echo json_encode([
  'group' => '',
  'items' => $items
], JSON_UNESCAPED_SLASHES);
?></script></a>
							<?php } ?>
						</div>
						<?php } ?>
						<?php if(get_field('show_festival_block')) { ?>
						<div class="div-block-24">
							<?php if( have_rows('festival_group') ){ ?>
							<div>
								<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_title="Festival group"; $loop_field = "festival_group"; while( have_rows('festival_group') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
								<h2 class="h2-35-45">
									<?php echo get_sub_field('festival_block_header') ?>
								</h2><a href="<?php echo get_sub_field('festival_link') ?>" class="ui-festival-link w-inline-block"><img src="<?php $field = get_sub_field('festival_image'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" alt="<?php echo esc_attr($field['alt']); ?>" class="ui-festival-link_img" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>"><div class="ui-festival-link_content"><div><?php echo get_sub_field('image_header') ?></div><div><?php echo get_sub_field('festival_dates') ?></div></div></a>
								<?php } ?>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
						<h2 class="h2-35-45">
							<?php echo get_field('your_visit_header') ?>
						</h2>
						<?php if( have_rows('dropdowns_loop') ){ ?>
						<div>
							<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_title="Dropdowns loop"; $loop_field = "dropdowns_loop"; while( have_rows('dropdowns_loop') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
							<div class="ui-drop-container">
								<div class="ui-drop-container_btn">
									<div class="p-20-30">
										<?php echo get_sub_field('header') ?>
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
						<div id="tickets" class="tikets-mob">
							<div class="events-ticket">
								<div class="events-ticket_left">
									<div class="p-17-25 top-ticket _2">Thursday</div>
									<div class="p-20-30 w20 m30">29 February</div>
									<div class="p-20-30 w20">19:00–21:00</div>
								</div>
								<div class="events-ticket_right"><a bgline="1" href="#" class="booktickets-btn min left-side"><strong>Book tickets</strong></a><a href="#" class="event-ticket_calendar-btn min w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt class="img-calendar"><div>ADD TO CALENDAR</div></a></div>
							</div>
							<div class="events-ticket">
								<div class="events-ticket_left">
									<div class="p-17-25 top-ticket _2">Thursday</div>
									<div class="p-20-30 w20 m30">29 February</div>
									<div class="p-20-30 w20">19:00–21:00</div>
								</div>
								<div class="events-ticket_right"><a bgline="1" href="#" class="booktickets-btn min left-side"><strong>Book tickets</strong></a><a href="#" class="event-ticket_calendar-btn min w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt class="img-calendar"><div>ADD TO CALENDAR</div></a></div>
							</div>
							<div class="info-right-side-bottom">
								<div>Tickets information</div>
								<div>Seating plan</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer">
			<div class="foo-mom">
				<div class="footer-container top-container">
					<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79a4-2bcc79a3" class="footer-col _1 top-col"><a href="/whats-on" class="link-foo-big">What’s on?</a>
						<div class="foo-menu-div"><a href="#" class="link-foo-small">Schedule</a><a href="#" class="link-foo-small">Priority booking</a></div>
						<div class="foo-marger"></div><a href="/festival" class="link-foo-whats_last w-inline-block"><img src="<?php echo get_template_directory_uri() ?>/images/62bc3fe7d9cc612f532615c7_Rectangle2039.jpg" loading="lazy" alt class="img-cover foters"><div class="text-block">Autumn Festival ‘22</div></a><a href="#" class="link-foo-small no-mob">Rachmaninov Days at Bechstein Hall</a></div>
					<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79ba-2bcc79a3" class="footer-col top-col center-col"><a href="/your-visit" class="link-foo-big">your visit</a>
						<div class="foo-menu-div"><a href="/box-office" class="link-foo-small">Health and safety</a></div>
						<div class="foo-marger"></div>
						<div class="foo-menu-div"><a href="/box-office" class="link-foo-small">Ticketing Info</a><a href="#" class="link-foo-small">Getting here</a><a href="#" class="link-foo-small">Security & Rules</a><a href="#" class="link-foo-small">Contact Us</a></div>
						<div class="foo-marger"></div>
						<div class="foo-menu-div"><a href="/about" class="link-foo-small">Around Bechstein Hall</a><a href="#" class="link-foo-small">Tours</a><a href="#" class="link-foo-small">Eat & drink</a><a href="#" class="link-foo-small">Venue & seating plan</a></div>
						<div class="foo-marger"></div>
						<div class="foo-menu-div"><a href="#" class="link-foo-small">Accesible facilities</a><a href="#" class="link-foo-small">Accesibility statement</a><a href="/contacts" class="link-foo-small">Contacts</a></div>
						<div class="foo-bottom no-pc"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#" class="link-foo-small last">Privacy policy</a></div>
					</div>
					<div id="w-node-e1be876e-05a4-9245-628d-78602bcc79dd-2bcc79a3" class="footer-col _3 top-col"><a href="/history" class="link-foo-big _2">History</a><a href="#" class="link-foo-big _2">friends</a><a href="/press-office" class="link-foo-big _2">Press</a><a href="#" class="link-foo-big _2">hire the hall</a></div>
				</div>
				<div class="footer-container bottom">
					<div class="footer-col _1">
						<div class="div-block-2">
							<div class="p-20-27">(020) 1234 5678 support@bechsteinhall.com London, W1U 2RJ, 22–28 Wigmore St.</div>
						</div>
						<div class="foo-soc-line"><a href="#" class="link-soc w-inline-block"></a><a href="#" class="link-soc w-inline-block"></a><a href="#" class="link-soc w-inline-block"></a><a href="#" class="link-soc w-inline-block"></a></div>
					</div>
					<div class="footer-col no-mob">
						<div class="foo-bottom nz"><a href="#" class="link-foo-small _2">Terms and Conditions</a><a href="#" class="link-foo-small last">Privacy policy</a></div>
					</div>
					<div class="footer-col _3">
						<div class="foo-bottomer">
							<div>© 2022, Bechstein Hall</div><a href="#" class="funk-link">Website made by Func. ↗</a></div>
					</div>
				</div>
			</div>
			<div class="white-z"></div>
		</footer>
		<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
		<script>
  
  let headwidth;

  $( ".b-menu" ).click(function() {
    
     headwidth = $( ".navbar" ).width();
    console.log(headwidth);
    $( ".header" ).css({"max-width":headwidth});

    if ($(".body").hasClass("menuopen"))

    { 
      $(".body").removeClass("menuopen");
      $(".navbar").removeClass("grey-head");
    }

    
    
    else 

    { 
      $(".body").addClass("menuopen");
      $(".navbar").addClass("grey-head");
    }

  });
  
  
  
  document.addEventListener("DOMContentLoaded", function () {
    function reportWindowSize() {
      headwidth = $( ".navbar" ).width();
      console.log(headwidth);
      $( ".header" ).css({"max-width":headwidth});
    }

    window.onresize = reportWindowSize;
  });
		
		</script>
		<?php get_template_part("footer_block", ""); ?>