<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Group
 */

$link_prenotazione = get_field('link_prenotazione');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page--header">
		<div class="grid-container">
			<div class="grid-x">
				<div class="large-10 large-offset-1 medium-12 small-12 column">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="page--content">
		<div class="grid-container">
			<div class="grid-x">
				<div class="large-10 large-offset-1 medium-12 small-12 column">
					<div class="paragraph">
						<?php
						the_content();
						?>
						<?php if($link_prenotazione): ?>
							<a href="<?php echo $link_prenotazione; ?>" class="btn" style="color: white; margin-top: 40px;">Prenota</a>
						<?php endif; ?>
					</div><!-- .entry-content -->		
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->