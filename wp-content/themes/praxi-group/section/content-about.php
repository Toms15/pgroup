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
$mission = get_sub_field('mission');
$description = get_sub_field('description');
$partner_text = get_sub_field('partner_text');
$partner_slug = sanitize_title($partner_text);
$partners = get_sub_field('partners');
$padding = get_sub_field('padding');
$section_id = get_sub_field('section_id');
?>

<!-- Section Cards -->
<section class="section--content section--content-about has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
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
		<?php if( have_rows('single_info') ): ?>
			<div class="cards">
				<div class="grid-x">
					<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-12 column">
						<div class="grid-x">
							<?php while( have_rows('single_info') ) : the_row();
								$icon = get_sub_field('icon');
								$number_info = get_sub_field('number_info');
								$number_color = get_sub_field('number_color');
								$text = get_sub_field('text'); ?>
								<div class="large-4 medium-4 small-12 column">
									<div class="single--info" style="background-color: <?php echo $background_card; ?>" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
										<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
										<?php if($number_info): ?>
											<h4 style="color: <?php echo $number_color; ?>"><?php echo $number_info ?></h4>
										<?php endif; ?>
										<?php if($text): ?>
											<h6><?php echo $text; ?></h6>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if($mission): ?>
			<div class="grid-x">
				<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-12 column">
					<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
						<?php echo $mission; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if($description): ?>
			<div class="grid-x">
				<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-12 column">
					<div class="paragraph-columns" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
						<?php echo $description; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if($partner_text || $partners): ?>
			<div style="height:40px"></div>
			<div class="grid-x">
				<div class="large-12 medium-12 small-12 column">
					<div class="subtitle--section">
						<h6><?php echo $partner_text; ?></h6>
					</div>
					<?php if( $partners ): ?>
						<div class="swiper-container logos-slider" id="partners-<?php echo $partner_slug; ?>">
							<div class="swiper-wrapper">
								<?php foreach( $partners as $partner ): ?>
									<div class="swiper-slide">
										<img src="<?php echo $partner['url']; ?>" alt="<?php echo $partner['alt']; ?>">
									</div>
								<?php endforeach; ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>