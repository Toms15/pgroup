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
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$card_item = get_sub_field('card_item');
$additional_text = get_sub_field('additional_text');
$additional_color = get_sub_field('additional_color');
$additional_image = get_sub_field('additional_image');
$padding = get_sub_field('padding');
$section_id = get_sub_field('section_id');
?>

<!-- Section Cards -->
<section class="section--content has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
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
		<?php if( have_rows('single_card') ): ?>
			<div class="cards">
				<div class="grid-x">
					<div class="large-10 large-offset-1 medium-12 small-12">
						<div class="grid-x">
							<?php while( have_rows('single_card') ) : the_row();
								$background_card = get_sub_field('background_card');
								$title_card = get_sub_field('title_card');
								$title_color = get_sub_field('title_color');
								$description = get_sub_field('description');
								$in_depth_description = get_sub_field('in-depth_description');
								$button_text_card = get_sub_field('button_text_card');
								$button_link_card = get_sub_field('button_link_card');
								$background_image = get_sub_field('background_image');
								$card_slug = sanitize_title($title_card); ?>
								<div class="large-<?php echo $card_item ?> medium-6 small-12 column">
									<?php if($background_image && $title_card): ?>
										<?php if($in_depth_description): ?>
											<div class="single--card single--card-with-image lazy" data-bg="url(<?php echo $background_image['url']; ?>)" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-modal="<?php echo $card_slug; ?>">
										<?php else: ?>
											<div class="single--card single--card-with-image lazy" data-bg="url(<?php echo $background_image['url']; ?>)" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
										<?php endif; ?>
											<?php if($title_card): ?>
												<h4 style="color: <?php echo $title_color; ?>"><?php echo $title_card ?></h4>
											<?php endif; ?>
											<?php if($description): echo $description; endif; ?>
											<?php if($in_depth_description): ?>
												<span class="btn btn--white"><?php echo __('Scopri di più'); ?></span>
											<?php else: ?>
												<?php if($button_text_card && $button_link_card): ?>
													<a href="<?php echo $button_link_card; ?>" class="btn btn--white"><?php echo $button_text_card; ?></a>
												<?php endif; ?>
											<?php endif; ?>
										</div>
									<?php elseif($title_card): ?>
										<?php if($in_depth_description): ?>
											<div class="single--card" style="background-color: <?php echo $background_card; ?>" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-modal="<?php echo $card_slug; ?>">
										<?php else: ?>
											<div class="single--card" style="background-color: <?php echo $background_card; ?>" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
										<?php endif; ?>
											<?php if($title_card): ?>
												<h4 style="color: <?php echo $title_color; ?>"><?php echo $title_card ?></h4>
											<?php endif; ?>
											<?php if($description): echo $description; endif; ?>
											<?php if($in_depth_description): ?>
												<span class="btn btn--white"><?php echo __('Scopri di più'); ?></span>
											<?php else: ?>
												<?php if($button_text_card && $button_link_card): ?>
													<a href="<?php echo $button_link_card; ?>" class="btn btn--white"><?php echo $button_text_card; ?></a>
												<?php endif; ?>
											<?php endif; ?>
										</div>
									<?php else: ?>
										<div class="single--card single--card-with-only-description" style="background-color: <?php echo $background_card; ?>" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
											<?php echo $description; ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if($additional_text || $additional_image): ?>
			<div class="grid-x">
				<div class="large-12 medium-12 small-12 column">
					<div class="subtitle--section">
						<h6 style="color: <?php echo $additional_color; ?>"><?php echo $additional_text; ?></h6>
						<img src="<?php echo $additional_image['url']; ?>" alt="">
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if($button_text && $button_link): ?>
			<div class="grid-x">
				<div class="large-12 medium-12 small-12 column">
					<div class="button--section">
						<a data-aos="fade" data-aos-duration="1500" data-aos-delay="400" href="<?php echo $button_link; ?>" class="btn"><?php echo $button_text; ?></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php if( have_rows('single_card') ): while( have_rows('single_card') ) : the_row();
	$background_card = get_sub_field('background_card');
	$title_card = get_sub_field('title_card');
	$title_color = get_sub_field('title_color');
	$description = get_sub_field('description');
	$in_depth_description = get_sub_field('in-depth_description');
	$button_text_card = get_sub_field('button_text_card');
	$button_link_card = get_sub_field('button_link_card');
	$background_image = get_sub_field('background_image');
	$card_slug = sanitize_title($title_card); ?>
	<div class="modal--view" id="<?php echo $card_slug; ?>">
		<div class="modal--service">
			<i class="fal fa-times"></i>
			<div class="modal--service-title only-text">
				<h2><?php echo $title_card; ?></h2>
			</div>
			<div class="modal--service-content">
				<?php echo $in_depth_description; ?>
				<?php if($button_text_card && $button_link_card): ?>
					<a href="<?php echo $button_link_card; ?>" class="btn"><?php echo $button_text_card; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>