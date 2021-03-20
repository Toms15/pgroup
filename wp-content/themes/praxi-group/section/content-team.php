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
<section class="section--content section--content-team has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
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
		<?php if( have_rows('single_team') ): ?>
			<div class="swiper-container" id="team-slider">
				<div class="swiper-wrapper">
					<?php while( have_rows('single_team') ) : the_row();
						$team_image = get_sub_field('team_image');
						$team_name = get_sub_field('team_name');
						$team_role = get_sub_field('team_role'); ?>
						<div class="swiper-slide">
							<div class="single--team">
								<div class="single--team-image" style="background: url(<?php echo $team_image['url']; ?>);"></div>
								<h6>
									<?php echo $team_name; ?>
									<span><?php echo $team_role; ?></span>
								</h6>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		<?php endif; ?>
	</div>
</section>