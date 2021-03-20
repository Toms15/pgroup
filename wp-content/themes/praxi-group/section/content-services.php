<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Lavoro
 */

$color_scheme = get_field('color_scheme', 'option');

$background_section = get_sub_field('background_section');
$title_section = get_sub_field('title_section');
$title_color = get_sub_field('title_color');
$title_alignment = get_sub_field('title_alignment');
$text = get_sub_field('text');
$padding = get_sub_field('padding');
$section_id = get_sub_field('section_id');
?>

<!-- Section Cards -->
<section class="section--content section--content-services has-padding-<?php echo $padding; ?>" style="background-color: <?php echo $background_section; ?>" id="<?php echo $section_id; ?>">
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
		<div class="services">
			<?php if( have_rows('single_service') ): ?>
				<div class="grid-x">
				<?php while( have_rows('single_service') ) : the_row();
					$name_service = get_sub_field('name_service');
					$icon_service = get_sub_field('icon_service');
					$description = get_sub_field('description');
					$service_slug = sanitize_title($name_service); ?>
					<div class="large-4 medium-4 small-12 column">
						<div class="single--service" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-modal="<?php echo $service_slug; ?>">
							<img src="<?php echo $icon_service['url']; ?>" alt="<?php echo $icon_service['alt']; ?>">
							<?php echo $name_service; ?>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="large-4 medium-4 small-12 column">
					<?php if($color_scheme == 'praxi-lavoro'): ?>
						<a href="/praxi-lavoro/richiedi-un-preventivo">
					<?php elseif($color_scheme == 'praxi-group'): ?>
						<a href="/prenotazione">
					<?php else: ?>
						<a href="/<?php echo $color_scheme; ?>/prenotazione">
					<?php endif; ?>
						<div class="single--service single--service-help" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
							<h6>Hai bisogno di aiuto?</h6>
							<p>Compila il modulo per effettuare una prenotazione</p>
							<i class="fal fa-arrow-right"></i>
						</div>
					</a>
				</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php if( have_rows('single_service') ): ?>
	<?php while( have_rows('single_service') ) : the_row();
		$name_service = get_sub_field('name_service');
		$icon_service = get_sub_field('icon_service');
		$description = get_sub_field('description');
		$button_text = get_sub_field('button_text');
		$button_link = get_sub_field('button_link');
		$service_slug = sanitize_title($name_service); ?>
		<div class="modal--view" id="<?php echo $service_slug; ?>">
			<div class="modal--service">
				<i class="fal fa-times"></i>
				<div class="modal--service-title">
					<img src="<?php echo $icon_service['url']; ?>" alt="<?php echo $icon_service['alt']; ?>">
					<h2><?php echo $name_service; ?></h2>
				</div>
				<div class="modal--service-content">
					<?php echo $description; ?>
					<?php if($button_text && $button_link): ?>
						<a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_text; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>