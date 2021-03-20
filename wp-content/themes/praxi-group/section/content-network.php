<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Lavoro
 */

$background_section = get_sub_field('background_section');
$big_logo = get_sub_field('big_logo');
$link_logo = get_sub_field('link_logo');
$padding = get_sub_field('padding');
$section_id = get_sub_field('section_id');
?>

<!-- Section Cards -->
<section class="section--content section--content-network has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 medium-12 small-12 column">
				<a href="<?php echo $link_logo; ?>" target="_blank">
					<img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" class="big--logo" src="<?php echo $big_logo['url']; ?>" alt="<?php echo $big_logo['alt']; ?>">
				</a>
			</div>
		</div>
		<?php if( have_rows('logos') ): ?>
			<div class="swiper-container" id="network">
				<div class="swiper-wrapper">
					<?php while( have_rows('logos') ) : the_row();
						$logo = get_sub_field('logo');
						$link = get_sub_field('link'); ?>
						<div class="swiper-slide">
							<?php if($link): ?>
								<a href="<?php echo $link; ?>" target="_blank">
									<img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
								</a>
							<?php else: ?>
								<img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		<?php endif; ?>
	</div>
</section>