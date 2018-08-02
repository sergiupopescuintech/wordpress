<?php
/**
 *  Pulito Clean Blog Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */

// Defining Some Variable
if( !defined( 'PULITO_LITE_VERSION' ) ) {
	define('PULITO_LITE_VERSION', '1.0.7'); // Theme Version
}
if( !defined( 'PULITO_LITE_DIR' ) ) {
	define( 'PULITO_LITE_DIR', get_template_directory() ); // Theme dir
}
if( !defined( 'PULITO_LITE_URL' ) ) {
	define( 'PULITO_LITE_URL', get_template_directory_uri() ); // Theme url
}


// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1170;
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pulito_clean_blog_lite_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Pulito Clean Blog Lite, use a find and replace
	 * to change 'pulito-clean-blog-lite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'pulito-clean-blog-lite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
        
        // This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
        
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );	
	set_post_thumbnail_size( 1400, 500, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(		
		'main-menu' 	=> esc_html__( 'Main Menu', 'pulito-clean-blog-lite' ),
		'footer-menu' 	=> esc_html__( 'Footer Menu', 'pulito-clean-blog-lite' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pulito_clean_blog_lite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo.
	add_theme_support( 'custom-logo' );

	// Post format.
	add_theme_support( 'post-formats', array('video', 'audio', 'quote', 'gallery'));
	
}
add_action( 'after_setup_theme', 'pulito_clean_blog_lite_setup' );

/**
 * Admin Welcome Notice
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */
function pulito_clean_blog_lite_admin_welcom_notice() {
	global $pagenow;

	if ( is_admin() && isset( $_GET['activated'] ) && 'themes.php' === $pagenow ) {
		echo '<div class="updated notice notice-success is-dismissible"><p>'.sprintf( __( 'Thank you for choosing Pulito Clean Blog Lite Blog Theme. To get started, visit our <a href="%s">welcome page</a>.', 'pulito-clean-blog-lite' ), esc_url( admin_url( 'themes.php?page=pulito-clean-blog-lite' ) ) ).'</p></div>';
	}
}
add_action( 'admin_notices', 'pulito_clean_blog_lite_admin_welcom_notice' );


/**
	* Register Sidebars
	* 
	* @package Pulito Clean Blog Lite
	* @since 1.0
	*/
	function pulito_clean_blog_lite_register_sidebar() {

		// Main Sidebar Area
		register_sidebar( array(
			'name'          => __( 'Main Sidebar', 'pulito-clean-blog-lite' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Appears on posts and pages.', 'pulito-clean-blog-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
		
		

		// Footer Sidebar Area
		register_sidebar( array(
			'name'          => __( 'Footer', 'pulito-clean-blog-lite' ),
			'id'            => 'footer',
			'description'   => __( 'Footer Widhet Area : Add widgets here.', 'pulito-clean-blog-lite' ),
			'before_widget' => '<section id="%1$s" class="widget pulito-clean-blog-lite-columns '. pulito_clean_blog_lite_footer_widgets_cls( 'footer' ) .' %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));

		// Footer Instgarm Widget Area
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Instgarm Widget Area', 'pulito-clean-blog-lite' ),
			'id'            => 'pulito-clean-blog-lite-intsgram-feed',
			'description'   => esc_html__( 'Add widgets here.', 'pulito-clean-blog-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
	}
	// Action to register sidebar
		
	add_action( 'widgets_init', 'pulito_clean_blog_lite_register_sidebar' );
	
if ( ! function_exists( 'pulito_clean_blog_lite_fonts_url' ) ) {
/**
 * Register Google fonts for Pulito Clean Blog Lite.
 * Create your own pulito_clean_blog_lite_fonts_url() function to override in a child theme.
 * @return string Google fonts URL for the theme.
 */
function pulito_clean_blog_lite_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'pulito-clean-blog-lite' ) ) {
		$fonts[] = 'Poppins:400,500,700';
	}
	/* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'pulito-clean-blog-lite' ) ) {
		$fonts[] = 'Roboto:400,500';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
}	
/**
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */
function pulito_clean_blog_lite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'pulito_clean_blog_lite_pingback_header', 5 );

// Common Functions File
require_once PULITO_LITE_DIR . '/includes/pulito-functions.php';

// Custom template tags for this theme
require_once PULITO_LITE_DIR . '/includes/template-tags.php';

// Theme Customizer Settings
require_once PULITO_LITE_DIR . '/includes/customizer.php';

// Script Class
require_once( PULITO_LITE_DIR . '/includes/class-pulito-script.php' );

// Theme Dynemic CSS
require_once( PULITO_LITE_DIR . '/includes/pulito-theme-css.php' );

/**
 * Load tab dashboard
 */
if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
    require get_template_directory() . '/includes/dashboard/pulito-how-it-work.php';
    
}

/************Category image Module Module End******************/

// Plugin recomendation class
require_once( PULITO_LITE_DIR . '/includes/plugins/class-wpcrt-recommendation.php' );