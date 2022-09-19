<?php
/*
Template name: Your Visit archive template
*/
?>
    <!DOCTYPE html>
    <!-- This site was created in Webflow. https://www.webflow.com -->
    <!-- Last Published: Wed Jul 13 2022 13:06:33 GMT+0000 (Coordinated Universal Time) -->
<html <?php language_attributes(); ?> data-wf-page="62bc3fe7d9cc6167a126159e" data-wf-site="62bc3fe7d9cc6134bf261592">
<?php get_template_part( "header_block", "" ); ?>

<body <?php body_class( "body" ); ?>>
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
                        <div id="w-node-e2a4b54f-db07-d972-40d4-89e5e03639ea-a126159e" class="p-30-40 med w35">
							<?php echo get_field( 'sidebar_header' ) ?>
                        </div>
						<?php if ( have_rows( 'sidebar_loop' ) ) { ?>
                            <div>
								<?php global $parent_id;
								$parent_id  = $loop_id;
								$loop_index = 0;
								$loop_title = "Sidebar loop";
								$loop_field = "sidebar_loop";
								while ( have_rows( 'sidebar_loop' ) ) {
									global $loop_id;
									$loop_index ++;
									$loop_id ++;
									the_row(); ?><a href="<?php echo get_sub_field( 'link' ) ?>"
                                                    class="ui-yourvisit_link-in w-inline-block">
                                    <div class="p-20-30 med w20"><?php echo get_sub_field( 'header' ) ?></div>
                                    <div class="p-17-25 mar10"><?php echo get_sub_field( 'description' ) ?></div>
                                    </a>
								<?php } ?>
                            </div>
						<?php } ?>
                    </div>
                </div>
                <div class="yourvisit-column">
                    <h1 class="h1-75-90 yv-page"><?php the_title(); ?></h1>
                    <p class="p-25-40 your-visit"><?php echo get_field( 'description' ); ?></p>
					<?php
					$args             = [
						'post_type'   => 'your-visit',
						'post_status' => 'publish'
					];
					$your_visit_query = new WP_Query( $args );

					if ( $your_visit_query->have_posts() ) : while ( $your_visit_query->have_posts() ) : $your_visit_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="ui-yourvisit w-inline-block">
                            <div class="ui-yourvisit_mom-div">
								<?php the_post_thumbnail( 'full', [
									'class' => 'img-cover'
								] ); ?>
                            </div>
                            <div class="ui-yourvisit_content">
                                <div class="p-35-45 w40"><?php the_title(); ?></div>
                                <div class="p-17-25 mar13"><?php echo strip_tags( get_the_excerpt() ); ?></div>
                            </div>
                        </a>
					<?php endwhile;
						wp_reset_postdata();
					endif; ?>
					<?php $constructor_sections = get_field( 'site_sections' ); ?>
                    <!-- <pre>
						<?php
					var_dump( $constructor_sections ); ?>
					</pre> -->

                    <div class="layouts">
						<?php foreach ( $constructor_sections as $constructor_section ) : ?>
                            <div class="ui-boxoffice-block">
								<?php if ( $constructor_section['acf_fc_layout'] === 'gallery_section' ) : ?>
                                    <div class="images-grid">
										<?php foreach ( $constructor_section['gallery_loop'] as $image ) : ?>
                                            <a href="#" id="w-node-be76ccd2-22c2-a8c7-2d8e-13da192216fe-a126159e"
                                               class="link-grid w-inline-block w-lightbox">
												<?php echo wp_get_attachment_image( $image['image']['ID'], 'large', false, [
													'class'   => "img-cover",
													'loading' => 'lazy'
												] ); ?>
                                                <script type="application/json" class="w-json">
													<?php
													$item = $image['image'];
													if ( isset( $item['url'] ) ) {
														$image_url = $item['url'];
													} elseif ( is_numeric( $item ) ) {
														$image_url = wp_get_attachment_image_url( $item, 'full' );
													} else {
														$image_url = $item;
													}
													$items   = array();
													$items[] = [
														'url'     => $image_url,
														'type'    => 'image',
														'caption' => isset( $item['caption'] ) ? $item['caption'] : ''
													];
													echo json_encode( [
														'group' => 'parent_id',
														'items' => $items
													], JSON_UNESCAPED_SLASHES );
													?>

                                                </script>
                                            </a>
										<?php endforeach; ?>
                                    </div>
								<?php elseif ( $constructor_section['acf_fc_layout'] === 'information_grid_listing' ) : ?>
                                    <div class="wig-block">
                                        <div class="div-block-23">
                                            <h2 class="h2-35-45">
												<?php echo $constructor_section['header']; ?>
                                            </h2>
                                        </div>
                                        <div class="cms-about">
											<?php foreach ( $constructor_section['grid_blocks'] as $grid_block ) : ?>
                                                <div class="ui-about">
                                                    <div class="ui-about_mom-div">
														<?php echo wp_get_attachment_image( $grid_block['image']['ID'], 'large', false, [
															'class'   => 'img-cover',
															'loading' => 'lazy'
														] ); ?>
                                                    </div>
                                                    <div class="ui-yourvisit_content">
                                                        <div class="p-25-40 bold">
															<?php echo $grid_block['header']; ?>
                                                        </div>
                                                        <div class="html-embed-4 w-embed">
                                                            <svg width="91" height="16" viewbox="0 0 91 16" fill="none">
                                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                                                      fill="#030E14"></path>
                                                                <path d="M27 0L28.7961 5.52786H34.6085L29.9062 8.94427L31.7023 14.4721L27 11.0557L22.2977 14.4721L24.0938 8.94427L19.3915 5.52786H25.2039L27 0Z"
                                                                      fill="#030E14"></path>
                                                                <path d="M45 0L46.7961 5.52786H52.6085L47.9062 8.94427L49.7023 14.4721L45 11.0557L40.2977 14.4721L42.0938 8.94427L37.3915 5.52786H43.2039L45 0Z"
                                                                      fill="#030E14"></path>
                                                                <path d="M64 0L65.7961 5.52786H71.6085L66.9062 8.94427L68.7023 14.4721L64 11.0557L59.2977 14.4721L61.0938 8.94427L56.3915 5.52786H62.2039L64 0Z"
                                                                      fill="#030E14"></path>
                                                                <path d="M83 0L84.7961 5.52786H90.6085L85.9062 8.94427L87.7023 14.4721L83 11.0557L78.2977 14.4721L80.0938 8.94427L75.3915 5.52786H81.2039L83 0Z"
                                                                      fill="#030E14"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="p-17-25 mar20">
															<?php echo $grid_block['description']; ?>
                                                        </div>
                                                        <a rel="nofollow" href="<?php echo $grid_block['link']; ?>"
                                                           target="_blank"
                                                           class="ui-about_link"><?php echo $grid_block['link']; ?></a>
                                                    </div>
                                                </div>
											<?php endforeach; ?>
                                        </div>
                                        <div class="t-line"></div>
                                    </div>
								<?php elseif ( $constructor_section['acf_fc_layout'] === 'dropdown_section' ) : ?>
                                    <div class="div-block-23">
                                        <h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
                                        </h2>
                                    </div>
                                    <div class="cms-drops">
										<?php foreach ( $constructor_section['dropdowns_loop'] as $dropdown ) : ?>
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
								<?php elseif ( $constructor_section['acf_fc_layout'] === 'text_section' ) : ?>
                                    <div class="text-block-ui">
                                        <h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
                                        </h2>
                                        <div class="p-17-25 mar20 w-richtext">
											<?php echo $constructor_section['text']; ?>
                                        </div>
                                    </div>
								<?php elseif ( $constructor_section['acf_fc_layout'] === 'text_quote_section' ) : ?>
                                    <div class="text-block-ui bloq1">
                                        <div class="p-17-25-2 w-richtext">
											<?php echo $constructor_section['text_with_quote']; ?>
                                        </div>
                                    </div>
								<?php elseif ( $constructor_section['acf_fc_layout'] === 'quote_with_image' ) : ?>
                                    <div class="text-block-ui bloq2">
										<?php echo wp_get_attachment_image( $constructor_section['image']['ID'], 'large', false, [
											'class'   => "image-5",
											'loading' => 'lazy',
											'style'   => 'height: auto'
										] ); ?>
                                        <div class="bloq-right">
                                            <blockquote class="block-quote p-17-25 bloq2">
												<?php echo $constructor_section['quote_text']; ?>
                                            </blockquote>
                                            <div class="text-block-7">
												<?php echo $constructor_section['author']; ?>
                                            </div>
                                            <div class="html-embed-5 w-embed">
                                                <svg width="25" height="17" viewbox="0 0 25 17" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.03906 12.7761L8.49506 16.2321L11.8791 12.7761L8.49506 9.39207L11.8791 0.752071L11.4471 0.320068L5.03906 12.7761ZM14.1831 12.7761L17.6391 16.2321L21.0231 12.7761L17.6391 9.39207L21.0231 0.752071L20.6631 0.320068L14.1831 12.7761Z"
                                                          fill="#030E14"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

								<?php elseif ( $constructor_section['acf_fc_layout'] === 'contacts_section' ) : ?>
                                    <div class="div-block-23">
                                        <h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
                                        </h2>
                                        <p class="p-17-25 mar20">
											<?php echo $constructor_section['text']; ?>
                                        </p>
                                    </div>
                                    <div class="t-line fw"></div>
								<?php elseif ( $constructor_section['acf_fc_layout'] === 'booking_tabs_section' ) : ?>
                                    <div class="div-block-23">
                                        <h2 class="h2-35-45">
											<?php echo $constructor_section['header']; ?>
                                        </h2>
                                        <div class="payment-tabs">
											<?php foreach ( $constructor_section['tabs'] as $index => $tab ) : ?>
                                                <div data-current="Tab 0" data-easing="ease" data-duration-in="300"
                                                     data-duration-out="100" class="tabs w-tabs">
                                                    <div class="tabs-menu w-tab-menu">
														<?php foreach ( $constructor_section['tabs'] as $index => $tab ) : ?>
                                                            <a data-w-tab="Tab <?php echo $index; ?>"
                                                               class="tab-payments w-inline-block w-tab-link <?php if ( get_row_index() === 1 ) {
																   echo 'w--current';
															   } ?>">
                                                                <div><?php echo $tab['tab_header']; ?></div>
                                                            </a>
														<?php endforeach; ?>
                                                    </div>
                                                    <div class="tabs-content w-tab-content">
														<?php foreach ( $constructor_section['tabs'] as $index => $tab ) : ?>
                                                            <div data-w-tab="Tab <?php echo $index; ?>"
                                                                 class="w-tab-pane <?php if ( $index === 0 ) {
																     echo 'w--tab-active';
															     } ?>">
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
<?php get_template_part( "footer_block", "" ); ?>