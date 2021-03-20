<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Lavoro
 */

$section_alignment = get_sub_field('section_alignment');
$background_section = get_sub_field('background_section');
$title_section = get_sub_field('title_section');
$title_color = get_sub_field('title_color');
$title_alignment = get_sub_field('title_alignment');
$text = get_sub_field('text');
$illustration = get_sub_field('illustration');
$department_logo = get_sub_field('department_logo');
$padding = get_sub_field('padding');
$section_id = get_sub_field('section_id');
?>

<!-- Section Ritiro referti -->
	<section class="section--content section--content-illustration has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
		<div class="grid-container">
			<div class="grid-x">
				<?php if($section_alignment == 'text-illustration'): ?>
					<div class="large-5 large-offset-1 medium-6 small-12 column">
						<div class="title--section">
							<?php if($department_logo): ?>
								<img class="department-logo" data-aos="fade" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $department_logo['url']; ?>" alt="<?php echo $department_logo['alt']; ?>">
							<?php endif; ?>
							<h2 style="color: <?php echo $title_color; ?>" data-aos="fade" data-aos-duration="1500" data-aos-delay="100"><?php echo $title_section ?></h2>
							<?php if($text): ?>
								<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
							<?php if( have_rows('buttons') ): while( have_rows('buttons') ) : the_row();
								$button_text = get_sub_field('button_text');
								$button_link = get_sub_field('button_link');
								$button_style = get_sub_field('button_style');
								$button_background = get_sub_field('button_background');
								$button_text_color = get_sub_field('button_text_color');
								?>
									<a data-aos="fade" data-aos-duration="1500" data-aos-delay="400" href="<?php echo $button_link; ?>" class="btn btn--<?php echo $button_style; ?>" style="background-color: <?php echo $button_background; ?>; color: <?php echo $button_text_color; ?>;"><?php echo $button_text; ?></a>
								<?php endwhile;
							endif; ?>
						</div>
					</div>
					<div class="large-5 medium-6 small-12 column">
						<img class="illustration" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $illustration['url']; ?>" alt="<?php echo $illustration['alt']; ?>">
					</div>
				<?php else: ?>
					<div class="large-5 large-offset-1 medium-6 small-12 column hide-on-mobile">
						<img class="illustration" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $illustration['url']; ?>" alt="<?php echo $illustration['alt']; ?>">
					</div>
					<div class="large-5 medium-6 small-12 column">
						<div class="title--section">
							<?php if($department_logo): ?>
								<img class="department-logo" data-aos="fade" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $department_logo['url']; ?>" alt="<?php echo $department_logo['alt']; ?>">
							<?php endif; ?>
							<h2 style="color: <?php echo $title_color; ?>" data-aos="fade" data-aos-duration="1500" data-aos-delay="100"><?php echo $title_section ?></h2>
							<?php if($text): ?>
								<div class="paragraph" data-aos="fade" data-aos-duration="1500" data-aos-delay="400">
									<?php echo $text; ?>
								</div>
							<?php endif; ?>
							<?php if( have_rows('buttons') ): while( have_rows('buttons') ) : the_row();
								$button_text = get_sub_field('button_text');
								$button_link = get_sub_field('button_link');
								$button_style = get_sub_field('button_style');
								$button_background = get_sub_field('button_background');
								$button_text_color = get_sub_field('button_text_color');
								?>
									<a data-aos="fade" data-aos-duration="1500" data-aos-delay="400" href="<?php echo $button_link; ?>" class="btn btn--<?php echo $button_style; ?>" style="background-color: <?php echo $button_background; ?>; color: <?php echo $button_text_color; ?>;"><?php echo $button_text; ?></a>
								<?php endwhile;
							endif; ?>
						</div>
					</div>
					<div class="large-5 medium-6 small-12 column show-only-mobile">
						<img class="illustration" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $illustration['url']; ?>" alt="<?php echo $illustration['alt']; ?>">
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>