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
$logo = get_sub_field('logo');
$illustration = get_sub_field('illustration');
?>

<!-- Section Hero -->
<section class="section--content section--content-hero" style="background-color: <?php echo $background_section; ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-7 medium-10 small-12 column">
				<div class="title--section title--section-<?php echo $title_alignment; ?>">
					<h1 style="color: <?php echo $title_color; ?>"><?php echo $title_section ?></h1>
					<?php if($text): ?>
						<div class="paragraph">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>
					<?php if($logo): ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
					<?php endif; ?>
					<?php if( have_rows('buttons') ): while( have_rows('buttons') ) : the_row();
						$button_text = get_sub_field('button_text');
						$button_link = get_sub_field('button_link');
						$button_style = get_sub_field('button_style');
						$button_target = get_sub_field('button_target');
						$button_background = get_sub_field('button_background');
						$button_text_color = get_sub_field('button_text_color');
						$description = get_sub_field('description');
						$button_slug = sanitize_title($button_text);
						?>
							<?php if($description): ?>
								<span data-modal="<?php echo $button_slug; ?>" data-aos="fade" data-aos-duration="1500" data-aos-delay="400" class="btn btn--<?php echo $button_style; ?>" style="background-color: <?php echo $button_background; ?>; color: <?php echo $button_text_color; ?>;"><?php echo $button_text; ?></span>
							<?php else: ?>
								<a data-aos="fade" data-aos-duration="1500" data-aos-delay="400" target="_<?php echo $button_target; ?>" href="<?php echo $button_link; ?>" class="btn btn--<?php echo $button_style; ?>" style="background-color: <?php echo $button_background; ?>; color: <?php echo $button_text_color; ?>;"><?php echo $button_text; ?></a>
							<?php endif; ?>
						<?php endwhile;
					endif; ?>
				</div>
			</div>
			<?php if($illustration): ?>
				<div class="large-5 medium-2 small-12 column">
					<div class="illustration--block">
						<img class="illustration"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $illustration['url'];?>" alt="<?php echo $illustration['alt']; ?>">
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php if( have_rows('buttons') ): ?>
	<?php while( have_rows('buttons') ) : the_row();
		$button_text = get_sub_field('button_text');
		$button_link = get_sub_field('button_link');
		$button_style = get_sub_field('button_style');
		$button_target = get_sub_field('button_target');
		$button_background = get_sub_field('button_background');
		$button_text_color = get_sub_field('button_text_color');
		$description = get_sub_field('description');
		$button_slug = sanitize_title($button_text); ?>
		<div class="modal--view" id="<?php echo $button_slug; ?>">
			<div class="modal--service">
				<i class="fal fa-times"></i>
				<div class="modal--service-content">
					<?php echo $description; ?>
					<?php if($button_link): ?>
						<a href="<?php echo $button_link; ?>" class="btn"><?php echo __('Download'); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>