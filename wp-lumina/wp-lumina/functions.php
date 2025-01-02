<?php
/**
 * wp-lumina functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-lumina
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( WP_PLUGIN_DIR . '/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_lumina_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp-lumina, use a find and replace
		* to change 'wp-lumina' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp-lumina', get_template_directory() . '/languages' );

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
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'wp-lumina' ),
	// 	)
	// );

function wp_lumina_register_menus() {
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'wp-lumina' ),
            'mobile-menu' => esc_html__( 'Mobile Menu', 'wp-lumina' ),
        )
    );
}
add_action( 'init', 'wp_lumina_register_menus' );

function add_nav_id( $args ) {
    // Verificăm dacă este meniul nostru mobil
    if ( 'mobile-menu' === $args['theme_location'] ) {
        // Adăugăm ID-ul dorit
        $args['container_id'] = 'mobile-navigation';
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'add_nav_id' );

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
			'wp_lumina_custom_background_args',
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
add_action( 'after_setup_theme', 'wp_lumina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_lumina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_lumina_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_lumina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_lumina_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-lumina' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp-lumina' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_lumina_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_lumina_scripts() {
     //  Google Fonts
    wp_enqueue_style( 'wp-lumina-google-fonts', 'https://fonts.googleapis.com/css2?family=Mona+Sans:wght@400;700;900&display=swap', false, null );

    // Swiper CSS
    wp_enqueue_style( 'wp-lumina-swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );

     //  Mmenu CSS
    wp_enqueue_style( 'wp-lumina-mmenucss', 'https://cdn.jsdelivr.net/npm/mmenu-light@3.2.2/dist/mmenu-light.min.css', array(), null );
    
	wp_enqueue_style( 'wp-lumina-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wp-lumina-style', 'rtl', 'replace' );

    // Swiper JS
    wp_enqueue_script( 'wp-lumina-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
    
      // Mmenu JS
    wp_enqueue_script( 'wp-lumina-mmenu-light', 'https://cdn.jsdelivr.net/npm/mmenu-light@3.2.2/dist/mmenu-light.min.js', array(), null, true );
   

	wp_enqueue_script( 'wp-lumina-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_lumina_scripts' );

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

/**
 * Carbon Fields Theme Options.
 */
require_once get_template_directory() . '/inc/crb/theme-options.php';
/**
 * Carbon Fields Post Meta.
 */
//require_once get_template_directory() . '/inc/crb/post-meta.php';

//Excerpt length

function wp_lumina_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'wp_lumina_excerpt_length');

function wp_lumina_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wp_lumina_excerpt_more' );


// remove p tag in contact form 7
 
function remove_cf7_autop_and_wrap($form) {
    
    $form = str_replace('<p>', '', $form);
    $form = str_replace('</p>', '', $form);
    return $form;
}
add_filter('wpcf7_form_elements', 'remove_cf7_autop_and_wrap');




// remove version from scripts and styles
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);


remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );


remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate
remove_action( 'wp_head', 'feed_links', 2 );
remove_action('wp_head','feed_links_extra', 3);


add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
 function remove_global_styles(){
     wp_dequeue_style( 'global-styles' );
 }
 //remove classic-theme-styles-inline-css
add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
 function mywptheme_child_deregister_styles() {
    wp_dequeue_style( 'classic-theme-styles' );

}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );