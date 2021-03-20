<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxi_Group
 */

$view_top_bar = get_field('view_top_bar', 'option');
$text_top_bar = get_field('text_top_bar', 'option');
$link_top_bar = get_field('link_top_bar', 'option');
$color_scheme = get_field('color_scheme', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/images/favicon/apple-touch-icon.png'?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/images/favicon/favicon-32x32.png'?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/images/favicon/favicon-16x16.png'?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/images/favicon/site.webmanifest'?>">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/images/favicon/safari-pinned-tab.svg'?>" color="#0093D4">
	<meta name="msapplication-TileColor" content="#0093D4">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Custom Style CSS -->
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link href='<?php echo get_template_directory_uri() . '/css/vendor.css'?>' rel='stylesheet' type='text/css'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css' rel='stylesheet' type='text/css'>
	<?php if($color_scheme == 'praxi-group'): ?>
		<link href='<?php echo get_template_directory_uri() . '/css/main-praxi-group.css'?>' rel='stylesheet' type='text/css'>
	<?php elseif($color_scheme == 'praxi-lavoro'): ?>
		<link href='<?php echo get_template_directory_uri() . '/css/main-praxi-lavoro.css'?>' rel='stylesheet' type='text/css'>
	<?php elseif($color_scheme == 'praxi-provita'): ?>
		<link href='<?php echo get_template_directory_uri() . '/css/main-praxi-provita.css'?>' rel='stylesheet' type='text/css'>
	<?php elseif($color_scheme == 'praxis-ds'): ?>
		<link href='<?php echo get_template_directory_uri() . '/css/main-praxis-ds.css'?>' rel='stylesheet' type='text/css'>
	<?php endif; ?>


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<nav class="mobile-navigation">
		<?php
		if(is_front_page()):
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
		else:
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'primary-menu',
				)
			);
		endif;
		?>
	</nav><!-- #site-navigation -->
	<div class="header--wrapper">
		<header id="masthead" class="site-header <?php if($view_top_bar): ?><?php else: ?>no--top-bar-already<?php endif; ?>">
			<?php if($view_top_bar): ?>
				<div class="top--bar">
					<div class="grid-container">
						<a href="<?php echo $link_top_bar; ?>"><?php echo $text_top_bar; ?></a>
						<i class="fal fa-times"></i>
					</div>
				</div>
			<?php endif; ?>
			<div class="grid-container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php if($color_scheme == 'praxi-group'):
						get_template_part('template-parts/content', 'logo-praxi-group');
					elseif($color_scheme == 'praxi-lavoro'):
						get_template_part('template-parts/content', 'logo-praxi-lavoro');
					elseif($color_scheme == 'praxi-provita'):
						get_template_part('template-parts/content', 'logo-praxi-provita');
					elseif($color_scheme == 'praxis-ds'):
						get_template_part('template-parts/content', 'logo-praxis-ds');
					endif; ?>
				</a>
				<div class="hamburger--menu">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<?php
					if(is_front_page()):
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					else:
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'primary-menu',
							)
						);
					endif;
					?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
	</div>
