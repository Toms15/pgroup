<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Lavoro
 */

$color_scheme = get_field('color_scheme', 'option');

$section_alignment = get_sub_field('section_alignment');
$background_section = get_sub_field('background_section');
$title_section = get_sub_field('title_section');
$title_color = get_sub_field('title_color');
$title_alignment = get_sub_field('title_alignment');
$multiple_locations = get_sub_field('multiple_locations');
$address = get_sub_field('address');
$how_to_reach_us = get_sub_field('how_to_reach_us');
$padding = get_sub_field('padding');
$id_section = get_sub_field('id_section');
?>

<!-- Section Maps -->
<section class="section--content section--content-illustration has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-12 column">
				<div class="title--section title--section-<?php echo $title_alignment; ?>">
					<h2 style="color: <?php echo $title_color; ?>" data-aos="fade" data-aos-duration="1500" data-aos-delay="100"><?php echo $title_section ?></h2>
				</div>
			</div>
		</div>
		<div class="grid-x">
			<div class="large-10 large-offset-1 medium-12 small-12 column">
				<?php if($multiple_locations == 1): ?>
					<?php if( have_rows('single_location') ): ?>
						<ul class="tabs" data-responsive-accordion-tabs="tabs" id="maps-tabs">
							<?php while( have_rows('single_location') ) : the_row();
								$location_name = get_sub_field('location_name');
								$location_slug = sanitize_title($location_name); ?>
								<li class="tabs-title">
									<a href="#<?php echo $location_slug; ?>" aria-selected="true">
										<?php echo $location_name; ?>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					<?php if( have_rows('single_location') ): ?>
						<div class="tabs-content" data-tabs-content="maps-tabs">
							<?php while( have_rows('single_location') ) : the_row();
								$location_name = get_sub_field('location_name');
								$location_address = get_sub_field('location_address');
								$location_how_to_reach_us = get_sub_field('location_how_to_reach_us');
								$location_map_id = get_sub_field('location_map_id');
								$location_slug = sanitize_title($location_name); ?>
								<div class="tabs-panel" id="<?php echo $location_slug; ?>">
									<div class="grid-x">
										<div class="large-6 medium-6 small-12 column">
											<div class="maps--content-view" id="<?php echo $location_map_id; ?>"></div>
										</div>
										<div class="large-6 medium-6 small-12 column">
											<div class="maps--content-info">
												<?php if($location_address): ?>
													<h4 data-aos="fade" data-aos-duration="1500" data-aos-delay="400">Indirizzo</h4>
													<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
														<p><?php echo $location_address; ?></p>
													</div>
												<?php endif; ?>
												<?php if($location_how_to_reach_us): ?>
													<h4 data-aos="fade" data-aos-duration="1500" data-aos-delay="400">Come raggiungerci</h4>
													<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
														<?php echo $location_how_to_reach_us; ?>
													</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<?php else: ?>
					<div class="maps--content">
						<div class="grid-x">
							<div class="large-6 medium-6 small-12 column">
								<?php if($color_scheme == 'praxi-lavoro'): ?>
									<div class="maps--content-view" id="map-cs"></div>
								<?php else: ?>
									<div class="maps--content-view" id="map-mg"></div>
								<?php endif; ?>
							</div>
							<div class="large-6 medium-6 small-12 column">
								<div class="maps--content-info">
									<?php if($address): ?>
										<h4 data-aos="fade" data-aos-duration="1500" data-aos-delay="400">Indirizzo</h4>
										<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
											<p><?php echo $address; ?></p>
										</div>
									<?php endif; ?>
									<?php if($how_to_reach_us): ?>
										<h4 data-aos="fade" data-aos-duration="1500" data-aos-delay="400">Come raggiungerci</h4>
										<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
											<?php echo $how_to_reach_us; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>