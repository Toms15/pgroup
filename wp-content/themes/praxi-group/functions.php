<?php
/**
 * Praxi Group functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Praxi_Group
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'praxi_group_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function praxi_group_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Praxi Group, use a find and replace
		 * to change 'praxi-group' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'praxi-group', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'praxi-group' ),
				'menu-2' => esc_html__( 'Inside page', 'praxi-group' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'praxi_group_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'praxi_group_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function praxi_group_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'praxi_group_content_width', 640 );
}
add_action( 'after_setup_theme', 'praxi_group_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function praxi_group_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'praxi-group' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'praxi-group' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'praxi_group_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function praxi_group_scripts() {
	wp_enqueue_style( 'praxi-group-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'praxi-group-style', 'rtl', 'replace' );

	wp_enqueue_script( 'praxi-group-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'praxi_group_scripts' );

/**
 * Show/Hide Admin bar
 */
show_admin_bar(false);

/**
 * Automatic Info Photo
 */
add_action( 'add_attachment', 'ced_add_image_meta_data' );
function ced_add_image_meta_data( $attachment_ID ) {

 $filename   =   $_REQUEST['name']; // or get_post by ID
 $withoutExt =   preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
 $withoutExt =   str_replace(array('-'), ' ', $withoutExt);

 $my_post = array(
   'post_title' 	=> $withoutExt,  // title
   'ID'           => $attachment_ID,
   'post_excerpt' => $withoutExt,  // caption
   'post_content' => $withoutExt,  // description
 );
 wp_update_post( $my_post );
 // update alt text for post
 update_post_meta($attachment_ID, '_wp_attachment_image_alt', $withoutExt );
}

/**
 * Implement the Option Page.
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Opzioni Generali del Tema',
		'menu_title'	=> 'Opzioni del Tema',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'      => 'dashicons-admin-generic',
		'position'      => 2
	));
}

// /**
//  * Create new User role
//  */
// add_role(
//     'visitors',
//     __( 'Visitatore' ),
//     array(
//         'read'         => true,  // true allows this capability
//         'edit_posts'   => true,
//     )
// );

// /**
//  * Front-end Login
//  */
// function register_theme_settings() {
//     add_shortcode( 'login-form', 'build_login_form' );
// }
// add_action('init', 'register_theme_settings');
// function build_login_form( $atts ){
//     if ( is_user_logged_in() )
//         return '';

//     $atts = shortcode_atts( array( 'redirect' => get_bloginfo( 'url' ) ), $atts, 'login_form' );

//     $output = '
//         <div id="login">
//     ';
//     $args = array(
//         'echo' => false,
//         'redirect' => esc_url( $atts['redirect'] ), 
//         'form_id' => 'loginform',
//         'label_username' => __( 'Username' ),
//         'label_password' => __( 'Password' ),
//         'label_remember' => __( 'Remember Me' ),
//         'label_log_in' => __( 'Log In' ),
//         'id_username' => 'user_login',
//         'id_password' => 'user_pass',
//         'id_remember' => 'rememberme',
//         'id_submit' => 'wp-submit',
//         'remember' => true,
//         'value_username' => NULL,
//         'value_remember' => true
//     );
//     $output .= wp_login_form( $args );
//     $output .= '
//         </div><!-- #login-form -->
//     ';
//     return $output;
// }

// function my_restrict_wpadmin_access() {
//     if ( ! defined('DOING_AJAX') || ! DOING_AJAX ) {
//         $user = wp_get_current_user();
//         if ( isset( $user->roles ) && is_array( $user->roles ) ) {
//             if ( in_array('visitors', $user->roles) ) {
//                 $data_login = get_option('axl_jsa_login_wid_setup');
//                 wp_redirect( '/' );
//                 die;
//             }
//         }
//     }
// }
// add_action( 'admin_init', 'my_restrict_wpadmin_access' );

// prevent access to wp-admin for certain roles
// function wpse23007_redirect(){
//     if( is_not_admin() && !defined('DOING_AJAX') && ( current_user_can('visitors') ) ){
//       wp_redirect(home_url());
//       exit;
//     }
//   }
// add_action('init','wpse23007_redirect');

// Hide admin bar from certain user roles
// function hide_admin_bar( $show ) {

// 	if ( current_user_can( 'eurind' ) ) :
// 		return false;
// 	endif;

// 	return $show;

// }
// add_filter( 'show_admin_bar', 'hide_admin_bar' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

