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
			<ul class="tabs" data-responsive-accordion-tabs="tabs" id="documents-tabs">
				<?php while( have_rows('single_tab') ) : the_row();
					$tab_title = get_sub_field('tab_title');
					$tab_icon = get_sub_field('tab_icon');
					$single_documents = get_sub_field('single_documents');
					$tab_slug = sanitize_title($tab_title); ?>
						<li class="tabs-title">
							<a href="#<?php echo $tab_slug; ?>" aria-selected="true">
								<img src="<?php echo $tab_icon['url']; ?>" alt="<?php echo $tab_icon['alt']; ?>">
								<?php echo $tab_title; ?>
							</a>
						</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php if( have_rows('single_tab') ): ?>
			<div class="tabs-content" data-tabs-content="documents-tabs">
				<?php while( have_rows('single_tab') ) : the_row();
					$tab_title = get_sub_field('tab_title');
					$tab_icon = get_sub_field('tab_icon');
					$single_documents = get_sub_field('single_documents');
					$tab_slug = sanitize_title($tab_title); ?>
					<?php if( $single_documents ): ?>
						<div class="tabs-panel" id="<?php echo $tab_slug; ?>">
							<div class="grid-x">
								<div class="large-10 large-offset-1 medium-12 small-12 column">
									<div class="grid-x">
										<?php foreach( $single_documents as $document ): ?>
											<div class="large-4 medium-4 small-12 column">
												<a href="<?php echo esc_html($document['url']) ?>" target="_blank">
													<div class="single--document">
														<i class="fal fa-file-invoice"></i>
														<?php echo esc_html($document['title']); ?>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
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