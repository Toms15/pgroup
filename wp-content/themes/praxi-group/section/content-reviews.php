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
		<?php if( have_rows('single_review') ): ?>
			<div class="swiper-container" id="reviews">
				<div class="swiper-wrapper">
					<?php while( have_rows('single_review') ) : the_row();
						$background_review = get_sub_field('background_review');
						$author_review = get_sub_field('author_review');
						$author_color = get_sub_field('author_color');
						$review = get_sub_field('review');
						$star = get_sub_field('star'); ?>
						<div class="swiper-slide">
							<div class="single--review" style="background-color: <?php echo $background_review; ?>" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
								<?php if($review): echo $review; endif; ?>
								<?php if($author_review): ?>
									<strong style="color: <?php echo $author_color; ?>"><?php echo $author_review ?></strong>
								<?php endif; ?>
								<div class="stars">
									<?php if($star == '5'): ?>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									<?php elseif($star == '4'): ?>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fal fa-star"></i>
									<?php elseif($star == '3'): ?>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
									<?php elseif($star == '2'): ?>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
									<?php else: ?>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
										<i class="fal fa-star"></i>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		<?php endif; ?>
	</div>
</section>