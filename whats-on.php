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
      <div class="breadcrumbs-line"><a href="#" class="breadcrumbs-link">Home</a><a href="/whats-on" aria-current="page" class="breadcrumbs-link w--current">what’s on</a></div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="catalog-row">
            <div class="filter-column">
              <div class="filter-styk">
                <form action="/search" class="search-filter w-form"><input type="search" class="search-line-input w-input" maxlength="256" name="query" placeholder="search by keyword…" id="search" required="" /><input type="submit" value="Search" class="search-line-btn w-button" /></form>
                <div class="filters-form w-form">
                  <form id="email-form" name="email-form" data-name="Email Form" method="get">
                    <div class="filters-div">
                      <div class="filters-top-div">
                        <div class="p-20-30">Time to go</div><a href="#" class="calendar-btn w-inline-block"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6162b22615c0_calendar.svg" loading="lazy" alt="" class="img-calendar" />
                          <div>calendar</div>
                        </a>
                      </div>
                      <div class="filters-bottom-div"><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx w-form-label" for="checkbox">today</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx w-form-label" for="checkbox-2">tomorrow</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx w-form-label" for="checkbox-2">this weekend</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx w-form-label" for="checkbox-2">next week</span>
                        </label></div>
                    </div>
                    <div class="filters-div">
                      <div class="filters-top-div">
                        <div class="p-20-30">Genre</div>
                      </div>
                      <div class="filters-bottom-div"><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">contemporary</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">minimalism</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">vocal music</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><label class="w-checkbox cbx-mom hidden-item">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">baroque</span>
                        </label><a href="#" class="show-all-btn">show all</a></div>
                    </div>
                    <div class="filters-div">
                      <div class="filters-top-div">
                        <div class="p-20-30">Instruments</div>
                      </div>
                      <div class="filters-bottom-div"><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">basoon</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">cello</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">choir</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">double bass</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">flute</span>
                        </label><label class="w-checkbox cbx-mom">
                          <div class="w-checkbox-input w-checkbox-input--inputType-custom cbx"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="filter-cbx ischbx w-form-label" for="checkbox-3">harp</span>
                        </label></div>
                    </div>
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
                    </div><input type="submit" value="Submit" data-wait="Please wait..." class="hidden-input w-button" />
                  </form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="catalog-column">
              <h1 class="h1-75-90"><?php the_title(); ?></h1>
              <div class="filters-line-text">
                <div>you choose &#x27;25 nov 2022—26 nov 2022.’ in filters.</div><a href="#" class="clearfilter-btn"> clear filters</a>
              </div>
              <div class="cms-tems">
                <div class="cms-ul">
                  <div class="cms-heading">
                    <h2 class="h2-cms">25 november</h2>
                    <h2 class="h2-cms day">Wednesday</h2>
                  </div>
                  <div class="cms-ul-events">
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" /></div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Max Richter</div>
                        <p class="p-17-25">excerpts from “The Leftovers” and “Infra”. A part of Winter Piano Festival</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="1" href="#" class="booktickets-btn"><strong>Book tickets</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                        <div class="cms-li_price">from £100 to £320</div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="1" href="#" class="booktickets-btn"><strong>Book tickets</strong></a>
                        <div class="cms-li_price">from £100 to £320</div>
                      </div>
                    </div>
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" />
                        <div class="cms-li_sold-out-banner">Sold out</div>
                      </div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Kronos Quartet</div>
                        <p class="p-17-25">Steve Reich: WTC 9/11, Mallet Quartet, Dance Patterns</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>SOLD OUT</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>SOLD OUT</strong></a></div>
                    </div>
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" />
                        <div class="cms-li_sold-out-banner">cancelled</div>
                      </div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Kronos Quartet</div>
                        <p class="p-17-25">Steve Reich: WTC 9/11, Mallet Quartet, Dance Patterns</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>event cancelled</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                        <div class="cms-li_price">find more</div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>event cancelled</strong></a>
                        <div class="cms-li_price">find more</div>
                      </div>
                    </div>
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" /></div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Max Richter</div>
                        <p class="p-17-25">excerpts from “The Leftovers” and “Infra”. A part of Winter Piano Festival</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="1" href="#" class="booktickets-btn priority"><strong>priority booking only</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                        <div class="cms-li_price">free sales from 26 october</div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="1" href="#" class="booktickets-btn priority"><strong>priority booking only</strong></a>
                        <div class="cms-li_price">free sales from 26 october</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cms-ul">
                  <div class="cms-heading">
                    <h2 class="h2-cms">25 november</h2>
                    <h2 class="h2-cms day">Wednesday</h2>
                  </div>
                  <div class="cms-ul-events">
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" /></div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Max Richter</div>
                        <p class="p-17-25">excerpts from “The Leftovers” and “Infra”. A part of Winter Piano Festival</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="1" href="#" class="booktickets-btn"><strong>Book tickets</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                        <div class="cms-li_price">from £100 to £320</div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="1" href="#" class="booktickets-btn"><strong>Book tickets</strong></a>
                        <div class="cms-li_price">from £100 to £320</div>
                      </div>
                    </div>
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" />
                        <div class="cms-li_sold-out-banner">Sold out</div>
                      </div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Kronos Quartet</div>
                        <p class="p-17-25">Steve Reich: WTC 9/11, Mallet Quartet, Dance Patterns</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>SOLD OUT</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>SOLD OUT</strong></a></div>
                    </div>
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc617a652615c3_img2.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" />
                        <div class="cms-li_sold-out-banner">cancelled</div>
                      </div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Kronos Quartet</div>
                        <p class="p-17-25">Steve Reich: WTC 9/11, Mallet Quartet, Dance Patterns</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>event cancelled</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                        <div class="cms-li_price">find more</div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="2" href="#" class="booktickets-btn sold-out"><strong>event cancelled</strong></a>
                        <div class="cms-li_price">find more</div>
                      </div>
                    </div>
                    <div class="cms-li">
                      <div class="cms-li_mom-img"><img src="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg" loading="lazy" srcset="https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img-p-500.jpeg 500w, https://uploads-ssl.webflow.com/62bc3fe7d9cc6134bf261592/62bc3fe7d9cc6191ff2615c2_img.jpg 540w" sizes="(max-width: 479px) 275px, (max-width: 991px) 190px, 270px" alt="" class="cms-li_img" /></div>
                      <div class="cms-li_content">
                        <div class="cms-li_time-div">
                          <div class="p-30-45">14:00—16:00</div>
                          <div class="p-17-25 italic">Including 1 interval</div>
                        </div>
                        <div class="p-20-30 title-event">Max Richter</div>
                        <p class="p-17-25">excerpts from “The Leftovers” and “Infra”. A part of Winter Piano Festival</p>
                        <div class="cms-li_tags-div"><a href="#" class="cms-li_tag-link">concert</a><a href="#" class="cms-li_tag-link">minimalism</a><a href="#" class="cms-li_tag-link">piano</a><a href="#" class="cms-li_tag-link">winter piano festival</a></div>
                        <div class="cms-li_actions-div"><a bgline="1" href="#" class="booktickets-btn priority"><strong>priority booking only</strong></a><a href="#" class="readmore-btn w-inline-block">
                            <div>read more</div>
                            <div> →</div>
                          </a></div>
                        <div class="cms-li_price">free sales from 26 october</div>
                      </div>
                      <div class="cms-li_actions-div biger"><a bgline="1" href="#" class="booktickets-btn priority"><strong>priority booking only</strong></a>
                        <div class="cms-li_price">free sales from 26 october</div>
                      </div>
                    </div>
                  </div>
                </div>
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