<?php

$main_menu_items = wp_get_nav_menu_items('Main menu');
$phone           = get_field('phone_number', 'option');
$email           = get_field('email', 'option');
?>
<style>
    html {
        margin-top: 0 !important;
    }
</style>
<div data-animation="default" data-collapse="none" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <header class="header">
        <div class="left-header">
            <?php if (!bech_is_current_url(home_url('/')) || is_search()) : ?>
                <a href="<?php echo home_url('/'); ?>" aria-current="page" class="brand w-nav-brand">
                    <?php echo bech_custom_logo(true); ?>
                </a>
            <?php else : ?>
                <div class="brand w-nav-brand">
                    <?php echo bech_custom_logo(true); ?>
                </div>
            <?php endif; ?>
            <?php $loader = get_field('loader', 'option');
            $video_files  = $loader['video_files'];
            $poster       = $loader['poster'];
            if (!empty($video_files) && $poster) :
            ?>
                <a href="#" data-button="open-player" class="header-video-link w-inline-block">
                    <?php echo preg_replace('/(width|height)=\"(\d+)\"/', '', wp_get_attachment_image($poster['ID'], 'large', false)); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="right-header">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <?php foreach ($main_menu_items as $main_menu_item) : ?>
                    <a <?php echo !bech_is_current_url($main_menu_item->url) ? 'href="' . $main_menu_item->url . '"' : ''; ?> title="Go to <?php echo $main_menu_item->title; ?> page" class="navbar-links w-nav-link <?php echo bech_is_current_url($main_menu_item->url) ? 'w--current' : ''; ?>"><?php echo $main_menu_item->title; ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
            <div class="r-head-sec">
                <div class="right-menuer">
                    <a href="#" class="head-search-btn w-inline-block">
                        <div class="ico-60 w-embed">
                            <svg width="60" height="60" viewbox="0 0 60 60" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36 26.5C36 32.299 31.299 37 25.5 37C19.701 37 15 32.299 15 26.5C15 20.701 19.701 16 25.5 16C31.299 16 36 20.701 36 26.5ZM34.8423 34.8051C32.5527 37.3788 29.2157 39 25.5 39C18.5964 39 13 33.4036 13 26.5C13 19.5964 18.5964 14 25.5 14C32.4036 14 38 19.5964 38 26.5C38 29.2354 37.1214 31.7656 35.6309 33.8237C35.7171 33.8235 35.8041 33.8371 35.8886 33.8652L37.3116 34.3396C37.4589 34.3887 37.5927 34.4714 37.7025 34.5812L46.0208 42.8995C46.4113 43.29 46.4113 43.9232 46.0208 44.3137L45.3137 45.0208C44.9232 45.4114 44.29 45.4114 43.8995 45.0208L35.5811 36.7025C35.4714 36.5927 35.3887 36.4589 35.3396 36.3116L34.8652 34.8886C34.856 34.861 34.8484 34.8331 34.8423 34.8051Z" fill="#030E14"></path>
                            </svg>
                        </div>
                    </a>
                    <a bgline="1" href="<?php echo get_the_permalink(255); ?>" class="header-book-head-btn w-inline-block">
                        <div>Book tickets</div>
                    </a>
                    <div class="cart-block">
                        <img src="https://assets.website-files.com/624c5364ec3046603b0a108f/63281dc2d1525dfbdb3cac55_Union.svg" loading="lazy" alt="" class="image-6">
                        <div class="cart-block_top-block">
                            <div class="p-30-45 m-30">Tickets</div>
                            <a href="#" class="cart-block_mob-close w-inline-block">
                                <img src="https://assets.website-files.com/624c5364ec3046603b0a108f/63281e9f165b7903b728153d_Vector%2015.svg" loading="lazy" alt="" />
                            </a>
                        </div>
                        <div class="cart-block_contant">
                            <div id="user-actions" style="display: flex; flex-direction: column">
                                <a href="#" class="p-17-25 card-block-a">View your account</a>
                                <a href="#" class="p-17-25 card-block-a">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logreg">
                    <a href="#" class="reglog-a">Log In</a>
                    <div> / </div>
                    <a href="#" class="reglog-a">Register</a>
                </div>
                <a href="#" class="b-menu w-inline-block">
                    <div class="b-line"></div>
                    <div class="b-line"></div>
                    <div class="b-line"></div>
                </a>
            </div>
            <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" class="searchhead">
                <input type="search" class="search-input w-input" autofocus="true" maxlength="256" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder=" search by keyword…" required>
                <input type="submit" id="searchsubmit" value="Search" class="search-button-2 w-button"><a href="#" class="head-search-btn-closen w-inline-block">
                    <div class="ico-60 w-embed">
                        <svg width="32" height="31" viewbox="0 0 32 31" fill="none">
                            <line y1="-1" x2="40" y2="-1" transform="matrix(0.707107 0.707106 -0.707107 0.707106 2.00488 2.14209)" stroke="#030E14" stroke-width="2"></line>
                            <line y1="-1" x2="40" y2="-1" transform="matrix(0.707107 -0.707106 0.707107 0.707106 2 30.2842)" stroke="#030E14" stroke-width="2"></line>
                        </svg>
                    </div>
                </a>
            </form>
        </div>
    </header>
    <div class="burger-menu">
        <div class="foo-mom">
            <div class="footer-container top-container">
                <?php $footer_columns = get_field('footer', 'option');
                foreach ($footer_columns as $index => $footer_column) : ?>
                    <?php $classes = [
                        'footer-col'
                    ];
                    if ($index === 0) {
                        $classes[] = '_1';
                        $classes[] = 'top-col';
                    } elseif ($index === 1) {
                        $classes[] = 'top-col';
                        $classes[] = 'center-col';
                    } elseif ($index === 2) {
                        $classes[] = '_3';
                        $classes[] = 'top-col';
                    }
                    ?>
                    <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79a4-2bcc79a3" class="<?php echo implode(' ', $classes); ?>">
                        <?php $column_elements = $footer_column['footer_elements'];
                        foreach ($column_elements as $column_element) : ?>
                            <?php if ($column_element['acf_fc_layout'] === 'big_link') : ?>
                                <a <?php echo !bech_is_current_url($column_element['url']) ? 'href="' . $column_element['url'] . '"' : ''; ?> class="link-foo-big <?php echo bech_is_current_url($column_element['url']) ? 'w--current' : ''; ?>"><?php echo $column_element['link_title']; ?></a>
                            <?php elseif ($column_element['acf_fc_layout'] === 'small_link') : ?>
                                <a <?php echo !bech_is_current_url($column_element['url']) ? 'href="' . $column_element['url'] . '"' : ''; ?> class="link-foo-small <?php echo !$column_element['show_on_mobile'] ? 'no-mob' : ''; ?><?php echo bech_is_current_url($column_element['url']) ? 'w--current' : ''; ?>"><?php echo $column_element['link_title']; ?></a>
                            <?php elseif ($column_element['acf_fc_layout'] === 'separator') : ?>
                                <div class="foo-marger"></div>
                            <?php elseif ($column_element['acf_fc_layout'] === 'card') : ?>
                                <a <?php echo !bech_is_current_url($column_element['url']) ? 'href="' . $column_element['url'] . '"' : ''; ?> class="link-foo-whats_last w-inline-block <?php echo bech_is_current_url($column_element['url']) ? 'w--current' : ''; ?>">
                                    <?php echo wp_get_attachment_image($column_element['background_image']['ID'], 'large', false, [
                                        'class' => 'img-cover foters'
                                    ]); ?>
                                    <div class="text-block"><?php echo $column_element['title']; ?></div>
                                </a>
                            <?php elseif ($column_element['acf_fc_layout'] === 'desktop_hidden_links') : ?>
                                <div class="foo-bottom no-pc">
                                    <?php foreach ($column_element['hidden_desktop_links'] as $hidden_desktop_link) : ?>
                                        <a <?php echo !bech_is_current_url($hidden_desktop_link['url']) ? 'href="' . $hidden_desktop_link['url'] . '"' : ''; ?> class="link-foo-small _2 <?php echo bech_is_current_url($hidden_desktop_link['url']) ? 'w--current' : ''; ?>"><?php echo $hidden_desktop_link['title']; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
                <!--                <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79a4-2bcc79a3" class="footer-col _1 top-col">-->
                <!--                    <a href="-->
                <?php //echo get_the_permalink( 255 ); 
                ?>
                <!--" class="link-foo-big">What’s on?</a>-->
                <!--                    <a href="#" class="link-foo-small">Schedule</a>-->
                <!--                    <a href="#" class="link-foo-small">Priority booking</a>-->
                <!--                    <div class="foo-marger"></div>-->
                <!--                    <a href="/festival" class="link-foo-whats_last w-inline-block">-->
                <!--                        <img src="-->
                <?php //echo get_template_directory_uri() 
                ?>
                <!--/images/625032fe74f84b30f4448559_Rectangle2039.jpg"-->
                <!--                             loading="lazy" alt class="img-cover foters">-->
                <!--                        <div class="text-block">Autumn Festival ‘22</div>-->
                <!--                    </a>-->
                <!--                    <a href="#" class="link-foo-small no-mob">Rachmaninov Days at Bechstein Hall</a>-->
                <!--                </div>-->
                <!--                <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79ba-2bcc79a3" class="footer-col top-col center-col">-->
                <!--                    <a href="-->
                <?php //echo get_post_type_archive_link( 'your-visit' ); 
                ?>
                <!--" class="link-foo-big">your-->
                <!--                        visit</a>-->
                <!--                    <a href="/box-office" class="link-foo-small">Health and safety</a>-->
                <!--                    <div class="foo-marger"></div>-->
                <!--                    <a href="/box-office" class="link-foo-small">Ticketing Info</a>-->
                <!--                    <a href="#" class="link-foo-small">Getting here</a>-->
                <!--                    <a href="#" class="link-foo-small">Security & Rules</a>-->
                <!--                    <a href="#" class="link-foo-small">Contact Us</a>-->
                <!--                    <div class="foo-marger"></div>-->
                <!--                    <a href="/about" class="link-foo-small">Around Bechstein Hall</a>-->
                <!--                    <a href="#" class="link-foo-small">Tours</a>-->
                <!--                    <a href="#" class="link-foo-small">Eat & drink</a>-->
                <!--                    <a href="#" class="link-foo-small">Venue & seating plan</a>-->
                <!--                    <div class="foo-marger"></div>-->
                <!--                    <a href="#" class="link-foo-small">Accesible facilities</a>-->
                <!--                    <a href="#" class="link-foo-small">Accesibility statement</a>-->
                <!--                    <a href="/contacts" class="link-foo-small">Contacts</a>-->
                <!--                    <div class="foo-bottom no-pc">-->
                <!--                        <a href="#" class="link-foo-small _2">Terms and Conditions</a>-->
                <!--                        <a href="#" class="link-foo-small last">Privacy policy</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div id="w-node-e1be876e-05a4-9245-628d-78602bcc79dd-2bcc79a3" class="footer-col _3 top-col">-->
                <!--                    <a href="/history" class="link-foo-big _2">History</a>-->
                <!--                    <a href="#" class="link-foo-big _2">friends</a>-->
                <!--                    <a href="/press-office" class="link-foo-big _2">Press</a>-->
                <!--                    <a href="#" class="link-foo-big _2">hire the hall</a>-->
                <!--                </div>-->
            </div>
            <div class="footer-container bottom">
                <div class="footer-col _1">
                    <div class="div-block-2">
                        <div class="p-20-27">
                            <?php if (!empty($phone)) : ?>
                                <a href="<?php echo 'tel:' . str_replace([
                                                '(',
                                                ')',
                                                '-',
                                                '–',
                                                ' '
                                            ], '', $phone); ?>"><?php echo $phone; ?></a>
                            <?php endif; ?>
                            <?php if (!empty($email)) : ?>
                                <a href="<?php echo 'mailto:' . $email; ?>"><?php echo $email; ?></a>
                            <?php endif; ?>
                            London, W1U 2RJ, 22–28 Wigmore St.
                        </div>
                    </div>
                    <div class="foo-soc-line">
                        <a href="#" class="link-soc w-inline-block"></a>
                        <a href="#" class="link-soc w-inline-block"></a>
                        <a href="#" class="link-soc w-inline-block"></a>
                        <a href="#" class="link-soc w-inline-block"></a>
                    </div>
                </div>
                <div class="footer-col no-mob">
                    <div class="foo-bottom nz">
                        <a href="#" class="link-foo-small _2">Terms and Conditions</a>
                        <a href="#" class="link-foo-small last">Privacy policy</a>
                    </div>
                </div>
                <div class="footer-col _3">
                    <div class="foo-bottomer">
                        <div><?php echo get_field('copyright', 'option'); ?></div>
                        <a href="https://func.agency/" class="funk-link" rel="nofollow">Website made by Func. ↗</a>
                    </div>
                </div>
            </div>
        </div>
        <svg id="svg" class="curtain" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path id="path" fill="#030e14" d="M0 0 V100 Q50 100, 100 100 V100 0 Z"></path>
        </svg>
        <!-- <svg class="overlay-nav_bg" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path id="p1" class="overlay-nav_path" vector-effect="non-scaling-stroke" d="M 0 0 V 0 Q 50 0 100 0 V 0 Z">
                <animate class="opensvg" xlink:href="#p1" repeatCount="1" attributeName="d" attributeType="XML" values="M 0 0 V 0 Q 50 0 100 0 V 0 Z;M 0 0 V 20 Q 50 50 100 20 V 0 Z;M 0 0 V 80 Q 50 90 100 80 V 0 Z;M 0 0 V 100 Q 50 100 100 100 V 0 Z" dur="1s" keyTimes="0; 0.5; 0.75; 1" calcMode="linear" />
                <animate class="closesvg" xlink:href="#p1" repeatCount="1" attributeName="d" attributeType="XML" values="M 0 0 V 100 Q 50 100 100 100 V 0 Z;M 0 0 V 100 Q 50 100 100 100 V 0 Z;M 0 0 V 100 Q 50 50 100 100 V 0 Z;M 0 0 V 0 Q 50 0 100 0 V 0 Z" dur="1.5s" keyTimes="0; 0.5; 0.75; 1" calcMode="linear" />
            </path>
        </svg> -->
    </div>
</div>
<!-- <iframe src="https://tix.bechsteinhall.func.agency/en/itix" style="display: none;" onload="(function(){ console.log('iFrame Loaded'); })();" frameborder="0" id="tix"></iframe> -->