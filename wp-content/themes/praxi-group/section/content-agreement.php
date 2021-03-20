<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Lavoro
 */

$background_section = get_sub_field('background_section');
$title_section = get_sub_field('title_section');
$title_color = get_sub_field('title_color');
$title_alignment = get_sub_field('title_alignment');
$text = get_sub_field('text');
$padding = get_sub_field('padding');
$section_id = get_sub_field('section_id');
?>

<!-- Section Cards -->
<section class="section--content section--content-reviews has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-12 column">
				<div class="title--section title--section-<?php echo $title_alignment; ?>">
					<h2 style="color: <?php echo $title_color; ?>" data-aos="fade" data-aos-duration="1500" data-aos-delay="100"><?php echo $title_section; ?></h2>
					<?php if($text): ?>
						<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if( have_rows('single_tab') ): ?>
			<ul class="tabs" data-responsive-accordion-tabs="tabs" id="agreements-tabs">
				<?php while( have_rows('single_tab') ) : the_row();
					$tab_title = get_sub_field('tab_title');
					$tab_slug = sanitize_title($tab_title); ?>
						<li class="tabs-title">
							<a href="#<?php echo $tab_slug; ?>" aria-selected="true">
								<?php echo $tab_title; ?>
							</a>
						</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php if( have_rows('single_tab') ): ?>
			<div class="tabs-content" data-tabs-content="agreements-tabs">
				<?php while( have_rows('single_tab') ) : the_row();
					$tab_title = get_sub_field('tab_title');
					$is_hotel = get_sub_field('is_hotel');
					$single_logos = get_sub_field('single_logos');
					$text = get_sub_field('text');
					$tab_slug = sanitize_title($tab_title); ?>
					<?php if( $is_hotel == 0 ): ?>
						<div class="tabs-panel" id="<?php echo $tab_slug; ?>">
							<div class="grid-x">
								<div class="large-12 medium-12 small-12 column">
									<div class="grid-x">
										<?php foreach( $single_logos as $logo ): ?>
											<div class="large-2 medium-4 small-6 column">
												<div class="single--agreement-logo">
													<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="lazy">
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="tabs-panel" id="<?php echo $tab_slug; ?>">
							<div class="grid-x">
								<div class="large-12 medium-12 small-12 column">
									<?php if($text): ?>
										<div class="grid-x">
											<div class="large-10 large-offset-1 medium-12 small-12 column">
												<div class="title--section">
													<div class="paragraph">
														<?php echo $text; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<div class="grid-x">
										<?php if( have_rows('single_hotel') ): while( have_rows('single_hotel') ) : the_row();
											$hotel_name = get_sub_field('hotel_name');
											?>
												<div class="large-2 medium-4 small-12 column">
													<div class="single--agreement-hotel">
														<h6><?php echo $hotel_name; ?></h6>
													</div>
												</div>
											<?php endwhile;
										endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>