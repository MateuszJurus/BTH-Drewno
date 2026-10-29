<?php
$start = microtime(true);
/**
 * total functions and definitions
 *
 * @package total
 */

if ( ! function_exists( 'total_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function total_setup() {

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'total-portfolio-thumb', 400, 400, true );
	add_image_size( 'total-team-thumb', 350, 420, true );
	add_image_size( 'total-blog-thumb', 400, 280, true );
	add_image_size( 'total-thumb', 100, 100, true );
	add_image_size( 'total-blog-header', 720, 360, true );
	add_image_size( 'fill-hd', 1920, 768, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'total' ),
		'secondary' => esc_html__( 'Secondary Menu', 'total' )
	) );

	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
endif; // total_setup
add_action( 'after_setup_theme', 'total_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function total_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'total_content_width', 640 );
}
add_action( 'after_setup_theme', 'total_content_width', 0 );

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function total_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'total_add_excerpt_support_for_pages' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function total_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'total' ),
		'id'            => 'total-right-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'total' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'total' ),
		'id'            => 'total-left-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'total' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'total' ),
		'id'            => 'total-footer1',
		'description'   => __( 'Add widgets here to appear in your Footer.', 'total' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'total' ),
		'id'            => 'total-footer2',
		'description'   => __( 'Add widgets here to appear in your Footer.', 'total' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'total' ),
		'id'            => 'total-footer4',
		'description'   => __( 'Add widgets here to appear in your Footer.', 'total' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Product Search', 'total' ),
		'id'            => 'product-search',
		'description'   => __( 'Add widgets here to appear above product listing.', 'total' ),
		'before_widget' => '<div class="product-search">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'total_widgets_init' );

if ( ! function_exists( 'total_fonts_url' ) ) :
/**
 * Register Google fonts for Total.
 *
 * @since Total 1.0
 *
 * @return string Google fonts URL for the theme.
 */

endif;

/**
 * Enqueue scripts and styles.
 */
function total_scripts() {
    wp_enqueue_script( 'total-custom', get_template_directory_uri() . '/js/total-custom.js', array('jquery'), '1.01', true );
	wp_enqueue_style( 'total-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/custom-styles.css', array(), '1.7' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );
	wp_add_inline_style( 'total-style', total_dymanic_styles() );
}
add_action( 'wp_enqueue_scripts', 'total_scripts' );

/**
 * Enqueue admin style
 */
function total_admin_scripts() {
	wp_enqueue_style( 'total-admin-style', get_template_directory_uri() . '/inc/css/admin-style.css', array(), '1.0' );
	wp_enqueue_media();
	wp_enqueue_script( 'total-admin-scripts', get_template_directory_uri() . '/inc/js/admin-scripts.js', array('jquery'), '1.00', true );
}
add_action( 'admin_enqueue_scripts', 'total_admin_scripts' );

/**
 * Breadcrumb
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/total-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Header social links.
 */
require get_template_directory() . '/inc/font-awesome-list.php';
require get_template_directory() . '/inc/header-socials.php';

/**
 * Metabox additions.
 */
require get_template_directory() . '/inc/total-metabox.php';

/**
 * Dynamic Styles additions.
 */
require get_template_directory() . '/inc/style.php';

/**
 * Widgets additions.
 */
require get_template_directory() . '/inc/widgets/widget-fields.php';
require get_template_directory() . '/inc/widgets/widget-contact-info.php';
require get_template_directory() . '/inc/widgets/widget-personal-info.php';
require get_template_directory() . '/inc/widgets/widget-latest-post.php';

require get_template_directory() . '/inc/custom_tab.php';

/**
 * Gutenberg blocks.
 */
require get_template_directory() . '/inc/blocks.php';


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();

	if ( function_exists( 'acf_add_options_sub_page' ) ) {
		acf_add_options_sub_page(
			array(
				'page_title'  => __( 'Navigation icons', 'total' ),
				'menu_title'  => __( 'Navigation icons', 'total' ),
				'menu_slug'   => 'navigation-icons',
				'parent_slug' => 'acf-options',
			)
		);
	}
}

//Disable emojis in WordPress
add_action( 'init', 'smartwp_disable_emojis' );

function smartwp_disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
   } 
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

   $duration = (microtime(true) - $start); // Calculate the duration
