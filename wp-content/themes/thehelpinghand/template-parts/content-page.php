<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tribe_Studio_South_Beach
 */

 ?>
 <?php ?>
 <div class="full">
 		<?php
 		if( have_rows('fullcontent') ):
 				while ( have_rows('fullcontent') ) : the_row();
 						if ( get_row_layout() == 'full_width_color_block_with_copy' ): ?>
 								<section class="full-width-block center-text <?php if(get_sub_field('global')) { ?>global<?php } ?>"
 									<?php $background_image = get_sub_field('background_image'); ?>
 									<?php if(get_sub_field('background_image')) : ?>style="background-image:url(<?php echo $background_image['url']; ?>);"<?php endif; ?>>
 										<div class="text-container">
 												<div class="middle">
 														<h1><?php the_sub_field('headline'); ?></h1>
 														<p><?php the_sub_field('text'); ?></p>
 														<?php if(get_sub_field('button_url')) { ?>
 																<a href="<?php the_sub_field('button_url'); ?>" class="btn" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>><?php the_sub_field('button_text'); ?> <i class="fa fa-arrow-right"></i></a>
 														<?php } ?>
 												</div>
 										</div>
 								</section>
 						<?php elseif (get_row_layout() == 'intro_header' ): ?>
 								<section class="intro-header center-text">
 										<div class="text-container">
 												<div class="middle">
 														<?php $icon = get_sub_field('icon'); ?>
 														<?php if($icon) : ?>
 																<img src="<?php echo $icon['url']; ?>" <?php if(get_sub_field('max_height_on_image')) : ?>style="max-height:<?php the_sub_field('max_height_on_image'); ?>px;"<?php endif; ?> />
 														<?php endif; ?>
                            <h4 class="subtitle">Helping Hand Project at</h4>
 														<?php if(get_sub_field('headline')) : ?>
 																<h1 class="title"><?php the_sub_field('headline'); ?></h1>
 														<?php endif; ?>
 														<div class="body"><?php the_sub_field('text'); ?></div>
 												</div>
 										</div>
 								</section>
 						<?php elseif (get_row_layout() == 'textarea' ): ?>
 								<section class="textarea">
 										<div class="container">
 												<?php the_sub_field('textarea'); ?>
 												<?php if(get_sub_field('button_url')) { ?>
 														<a href="<?php the_sub_field('button_url'); ?>" class="btn"><?php the_sub_field('button_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
 												<?php } ?>
 										</div>
 								</section>
              <?php elseif (get_row_layout() == 'call_to_action' ): ?>
                  <section class="call_to_action">
                      <div class="container">
                        <div class="left_text_container">
                          <h2><?php the_sub_field('headline'); ?></h2>
                          <p><?php the_sub_field('text'); ?></p>
                        </div>
                        <div class="button_container">
                          <?php if(get_sub_field('button_url')) { ?>
                              <a href="<?php the_sub_field('button_url'); ?>" class="btn"><?php the_sub_field('button_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                          <?php } ?>
                        </div>
                      </div>
                  </section>
 						<?php elseif (get_row_layout() == 'contact_form' ): ?>
 								<section class="contact_form">
 										<div class="container">
 											<div class="left-contact-col">
 													<h2><?php the_sub_field('title'); ?></h2>
 													<p><?php the_sub_field('text'); ?></p>
 													<div class="interior-col left">
 														<h4>PHONE</h4>
 														<p><?php the_sub_field('phone'); ?></p>
 													</div>
 													<div class="interior-col right">
 														<h4>EMAIL</h4>
 														<p><?php the_sub_field('email'); ?></p>
 													</div>
 											</div>
 											<div class="right-contact-col">
 											<?php the_sub_field('contact_form'); ?>
 										</div>
 									</div>
 								</section>
 						<?php elseif (get_row_layout() == 'slideshow' ): ?>
 								<section class="slideshow">
 										<?php echo do_shortcode(get_sub_field('slider')); ?>
 								</section>
 					<?php elseif (get_row_layout() == 'full_width_image' ): ?>
 							<section class="full_width_image">
 								<?php
 									$image = get_sub_field('image');
 										if( !empty($image) ): ?>
 											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
 								<?php endif; ?>
 							</section>
 						<?php elseif (get_row_layout() == 'image_and_text_block' ): ?>
 								<section class="image-text <?php if(get_sub_field('global')) { ?>global<?php } ?>">
 										<div class="image-holder half">
 												<div class="image-container">
 														<div class="middle">
 																<?php if(get_sub_field('image_url')) { ?>
 																		<?php $featured_image = get_sub_field('image'); ?>
 																		<a href="<?php the_sub_field('image_url'); ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>><img src="<?php echo $featured_image['url']; ?>" /></a>
 																<?php } else { ?>
 																		<?php $featured_image = get_sub_field('image'); ?>
 																		<img src="<?php echo $featured_image['url']; ?>" />
 																<?php } ?>
 														</div>
 												</div>
 										</div>

 										<div class="text-holder half">
 												<div class="text-container">
 														<div class="middle">
 																<h2 class="title"><?php the_sub_field('headline'); ?></h2>
 																<div class="body"><?php the_sub_field('text'); ?></div>
 																<?php if(get_sub_field('button_url')) { ?>
 																		<a href="<?php the_sub_field('button_url'); ?>" class="btn" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>><?php the_sub_field('button_text'); ?> <i class="fa fa-arrow-right"></i></a>
 																<?php } ?>
 														</div>
 												</div>
 										</div>
 								</section>
 						<?php elseif (get_row_layout() == 'image_left_text_right_block' ): ?>
 								<section class="imageleft-text <?php if(get_sub_field('global')) { ?>global<?php } ?>">
 										<?php $background_image = get_sub_field('image'); ?>
 										<div class="image-holder half" style="background-image:url(<?php echo $background_image['url']; ?>);">
 												<?php if(get_sub_field('image_url')) { ?>
 														<?php $featured_image = get_sub_field(''); ?>
 														<a href="<?php the_sub_field('image_url'); ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>></a>
 												<?php } ?>
 										</div>
 										<div class="text-holder half" style="background-color:<?php the_sub_field('background_color'); ?>;">
 												<div class="text-container">
 														<div class="middle">
 																<h2 class="title"><?php the_sub_field('headline'); ?></h2>
 																<p><?php the_sub_field('text'); ?></p>
 																<?php if(get_sub_field('button_url')) { ?>
 																		<a href="<?php the_sub_field('button_url'); ?>" class="btn"><?php the_sub_field('button_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
 																<?php } ?>
 														</div>
 												</div>
 										</div>
 								</section>
						<?php elseif (get_row_layout() == 'image_right_text_left_block_fw' ): ?>
							<section class="imageright-textleft-fw">
								<div class="text-holder half">
										<div class="text-container">
												<div class="middle">
														<h2 class="title"><?php the_sub_field('headline'); ?></h2>
														<p><?php the_sub_field('text'); ?></p>
														<?php if(get_sub_field('button_url')) { ?>
																<a href="<?php the_sub_field('button_url'); ?>" class="btn"><?php the_sub_field('button_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
														<?php } ?>
												</div>
										</div>
								</div>
								<?php $background_image = get_sub_field('image'); ?>
								<div class="image-holder half" style="background-image:url(<?php echo $background_image['url']; ?>);">
										<?php if(get_sub_field('image_url')) { ?>
												<?php $featured_image = get_sub_field(''); ?>
												<a href="<?php the_sub_field('image_url'); ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>></a>
										<?php } ?>
								</div>
						  </section>
 						<?php elseif (get_row_layout() == 'image_right_text_left_block' ): ?>
 								<section class="imageright-text">
 													<div class="block edge--top--reverse">
 									<div class="container">
 										<div class="text-holder half">
 												<div class="text-container">
 														<div class="middle">
 																<h2 class="title"><?php the_sub_field('headline'); ?></h2>
																<h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
 																<p><?php the_sub_field('text'); ?></p>
																<div class="social-icons">
																	<i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-youtube" aria-hidden="true"></i>
																</div>
 																<?php if(get_sub_field('button_url')) { ?>
 																		<a href="<?php the_sub_field('button_url'); ?>" class="btn" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>><?php the_sub_field('button_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
 																<?php } ?>
 														</div>
 												</div>
 										</div>
 										<?php $background_image = get_sub_field('image'); ?>
 										<div class="image-holder half" style="background-image:url(<?php echo $background_image['url']; ?>);">
 												<?php if(get_sub_field('image_url')) { ?>
 														<?php $featured_image = get_sub_field(''); ?>
 														<a href="<?php the_sub_field('image_url'); ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>></a>
 												<?php } ?>
 										</div>
 									</div>
 								</section>
 							</div>
 						<?php elseif (get_row_layout() == 'callout_blocks' ): ?>
 								<?php if( have_rows('block_collection') ): ?>
 										<section class="text-callout center-text">

 												<?php while( have_rows('block_collection') ): the_row(); ?>
 														<?php $block_icon = get_sub_field('block_icon'); ?>
 														<div class="text-callout-block">
 																<?php if(get_sub_field('block_url')) { ?>
 																		<a href="<?php the_sub_field('block_url'); ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>>
 																				<div class="text-container">
 																						<div class="middle">
 																								<img src="<?php echo $block_icon['url']; ?>">
 																								<h4><?php the_sub_field('block_text'); ?></h4>
 																						</div>
 																				</div>
 																		</a>
 																<?php } else { ?>
 																		<div class="text-container">
 																				<div class="middle">
 																						<img src="<?php echo $block_icon['url']; ?>">
 																						<h4><?php the_sub_field('block_text'); ?></h4>
 																				</div>
 																		</div>
 																<?php } ?>
 														</div>
 												<?php endwhile; ?> <!-- block collection while -->

 										</section>
 								<?php endif; ?> <!-- block collection if -->
 						<?php elseif (get_row_layout() == 'quarter_blocks' ): ?>
 								<?php if( have_rows('block') ): $i = 0; ?>
 										<section class="quarter-block">
 												<?php while( have_rows('block') ): $i++; the_row(); ?>
 														<?php if (get_sub_field('block_type') == 'Full Image') { ?>
 																<div class="block bg-image" style="background-image:url(<?php the_sub_field('bgimage'); ?>);">
 																		<?php if(get_sub_field('link_url')) { ?>
 																				<a href="<?php the_sub_field('link_url'); ?>" class="a-<?php echo $i; ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>>
 																						<div class="image-container">
 																								<div class="middle">
 																										<?php if(get_sub_field('text')) { ?>
 																												<h4><?php the_sub_field('text'); ?></h4>
 																										<?php } ?>
 																										<?php if(get_sub_field('button_text')) { ?>
 																												<span class="btn"><?php the_sub_field('button_text'); ?> <i class="fa fa-arrow-right"></i></span>
 																										<?php } ?>
 																								</div>
 																						</div>
 																				</a>
 																		<?php } ?>
 																</div>
 																<?php if(get_sub_field('hover_background_color')) { ?>
 																		<style>
 																				.a-<?php echo $i; ?>:hover {
 																						background-color:<?php the_sub_field('hover_background_color'); ?>;
 																				}
 																		</style>
 																<?php } ?>
 														<?php } else if (get_sub_field('block_type') == 'Logo') { ?>
 																<div class="block logo" style="background-color:<?php the_sub_field('background_color'); ?>;">
 																		<?php if(get_sub_field('link_url')) { ?>
 																				<a href="<?php the_sub_field('link_url'); ?>" class="a-<?php echo $i; ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>>
 																						<div class="image-container">
 																								<div class="middle">
 																										<img src="<?php the_sub_field('logo'); ?>" />
 																										<img src="<?php the_sub_field('hover_logo'); ?>" class="hover" />
 																										<?php if(get_sub_field('button_text')) { ?>
 																												<span class="btn"><?php the_sub_field('button_text'); ?> <i class="fa fa-arrow-right"></i></span>
 																										<?php } ?>
 																								</div>
 																						</div>
 																				</a>
 																				<?php if(get_sub_field('hover_background_color')) { ?>
 																						<style>
 																								.a-<?php echo $i; ?>:hover {
 																										background-color:<?php the_sub_field('hover_background_color'); ?>;
 																								}
 																						</style>
 																				<?php } ?>
 																		<?php } else { ?>
 																				<div class="image-container">
 																						<div class="middle">
 																								<img src="<?php the_sub_field('logo'); ?>"/>
 																						</div>
 																				</div>
 																		<?php } ?>
 																</div>
 														<?php } else if (get_sub_field('block_type') == 'Text') { ?>
 																<div class="block text" style="background-color:<?php the_sub_field('background_color'); ?>;">
 																		<?php if(get_sub_field('link_url')) { ?>
 																				<a href="<?php the_sub_field('link_url'); ?>" <?php if(get_sub_field('target_blank')) { ?>target="_blank"<?php } ?>>
 																						<div class="text-container">
 																								<div class="middle">
 																										<?php if(get_sub_field('icon')): ?>
 																												<img src="<?php the_sub_field('icon'); ?>" />
 																										<?php endif; ?>
 																										<h4><?php the_sub_field('text'); ?></h4>
 																								</div>
 																						</div>
 																				</a>
 																		<?php } else { ?>
 																				<div class="text-container">
 																						<div class="middle">
 																								<?php if(get_sub_field('icon')): ?>
 																										<img src="<?php the_sub_field('icon'); ?>" />
 																								<?php endif; ?>
 																								<?php the_sub_field('text'); ?>
 																						</div>
 																				</div>
 																		<?php } ?>
 																</div>
 														<?php } ?>
 												<?php endwhile; ?> <!-- block collection while -->
 										</section>
 								<?php endif; ?> <!-- block -->
 							<?php elseif (get_row_layout() == 'three_column_text' ): ?>
 									<?php if( have_rows('text') ): $i = 0; ?>
 											<section class="three_column_text">
 												<div class="container">
 													<?php while( have_rows('text') ): $i++; the_row(); ?>
 														<div class="three-col">
 															<div class="text-container">
																<?php $icon = get_sub_field('icon'); ?>
		 														<?php if($icon) : ?>
		 																<img src="<?php echo $icon['url']; ?>" <?php if(get_sub_field('max_height_on_image')) : ?>style="max-height:<?php the_sub_field('max_height_on_image'); ?>px;"<?php endif; ?> />
		 														<?php endif; ?>
 																<h4><?php the_sub_field('title'); ?></h4>
 																<p><?php the_sub_field('text'); ?></p>
 															</div>
 														</div>
 													<?php endwhile; ?> <!-- block collection while -->
 												</div>
 											</section>
 									<?php endif; ?> <!-- block -->
 						<?php elseif (get_row_layout() == 'tabs' ): ?>
 								<?php if( have_rows('tab_group') ): ?>
 										<div class="tab-holder hash-tabs">

 												<article class="tab-container">
 														<nav class="tab-nav" role="tablist">

 												<?php
 												while( have_rows('tab_group') ): the_row();
 														//$row = the_row();
 														//var_dump($row);
 														$i = 0;
 														?>

 														<li>
 																<a href="#<?php the_sub_field('tab_slug'); ?>" role="tab" title="<?php the_sub_field('tab_title'); ?>">
 																		<span><?php the_sub_field('tab_title'); ?></span>
 																</a>
 														</li>
 												<?php endwhile; ?> <!-- tab_group while -->
 																</nav>
 								<?php endif; ?> <!-- block -->
 								<?php if( have_rows('tab_group') ): ?>

 														<div class="tab-pane-container">
 																<?php while( have_rows('tab_group') ): the_row(); ?>
 																		<section class="tab" id="<?php the_sub_field('tab_slug'); ?>">
 																				<?php the_sub_field('tab_text'); ?>
 																		</section>
 																<?php endwhile; ?> <!-- tab_group while -->
 														</div>
 												</article>
 										</div>
 								<?php endif; ?> <!-- block -->
 						<?php elseif (get_row_layout() == 'spotlight_block' ): ?>
 								<?php if( have_rows('spotlights') ): ?>
 										<section class="spotlight-block">
 												<?php while( has_sub_field('spotlights') ):
 														$post_object = get_sub_field('spotlight');
 																if( $post_object ):
 																		// override $post
 																		$post = $post_object;
 																		setup_postdata( $post );
 																?>

 																<div class="spotlight one-third columns">
 																		<div class="spotlight-image" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);">

 																				<?php if(get_the_content()) { ?>
 																						<div class="spotlight-text">
 																								<div class="middle">
 																										<?php the_content(); ?>
 																								</div>
 																						</div>
 																				<?php } ?>
 																		</div>
 																		<?php the_title( '<h3>', '</h3>' ); ?>
 																</div>

 																<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
 														<?php endif; ?>
 												<?php endwhile; ?> <!-- block collection while -->
 										</section>
 								<?php endif; ?> <!-- block collection if -->
							</div>
 						<?php endif; ?>
 				<?php endwhile; ?>
 		<?php endif; ?>
