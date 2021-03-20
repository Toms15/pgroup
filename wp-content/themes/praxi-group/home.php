<?php
/**
 * Template name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Group
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<?php
		if(have_rows('sections')):
			while (have_rows('sections')) : the_row(); 
				if(get_row_layout() == 'hero'):
					get_template_part( 'section/content', 'hero' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'text_with_illustration'):
					get_template_part( 'section/content', 'text-with-illustration' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'cards'):
					get_template_part( 'section/content', 'cards' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'about'):
					get_template_part( 'section/content', 'about' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'services'):
					get_template_part( 'section/content', 'services' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'reviews'):
					get_template_part( 'section/content', 'reviews' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'documents'):
					get_template_part( 'section/content', 'documents' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'agreement'):
					get_template_part( 'section/content', 'agreement' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'team'):
					get_template_part( 'section/content', 'team' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'network'):
					get_template_part( 'section/content', 'network' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'maps'):
					get_template_part( 'section/content', 'maps' );
					wp_reset_postdata();
				endif;
			endwhile;
		else :
		endif;
	?>

	</main><!-- #main -->

<?php
get_footer();
