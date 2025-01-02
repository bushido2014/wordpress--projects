<?php
/**
 * evolve functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package evolve
 */
require_once('inc/fields.php');



 add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( WP_PLUGIN_DIR . '/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fitness_gym_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on evolve, use a find and replace
		* to change 'fitness-gym' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fitness-gym', get_template_directory() . '/languages' );

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
// 	register_nav_menus(
// 		array(
// 			'menu-1' => esc_html__( 'Primary', 'fitness-gym' ),
// 		)
// 	);

function fitness_gym_register_menus() {
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'fitness-gym' ),
            'mobile-menu' => esc_html__( 'Mobile Menu', 'fitness-gym' ),
        )
    );
}
add_action( 'init', 'fitness_gym_register_menus' );

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
			'fitness_gym_custom_background_args',
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
add_action( 'after_setup_theme', 'fitness_gym_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fitness_gym_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fitness_gym_content_width', 640 );
}
add_action( 'after_setup_theme', 'fitness_gym_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fitness_gym_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fitness-gym' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fitness-gym' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fitness_gym_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function fitness_gym_enqueue_scripts() {
    //  Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Fugaz+One&display=swap', false, null );

    // Swiper CSS
    wp_enqueue_style( 'fitness-gym-swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );

    //  Mmenu CSS
    wp_enqueue_style( 'fitness-gym-mmenucss', 'https://cdn.jsdelivr.net/npm/mmenu-light@3.2.2/dist/mmenu-light.min.css', array(), null );

    // Theme CSS
    wp_enqueue_style( 'fitness-gym-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'fitness-gym-style', 'rtl', 'replace' );

    // Swiper JS
    wp_enqueue_script( 'fitness-gym-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

    // Mmenu JS
    wp_enqueue_script( 'fitness-mmenu-light', 'https://cdn.jsdelivr.net/npm/mmenu-light@3.2.2/dist/mmenu-light.min.js', array(), null, true );

    //  GSAP JS
    wp_enqueue_script( 'fitness-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), null, true );

    // ScrollToPlugin JS
    wp_enqueue_script( 'fitness-gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js', array(), null, true );

    // ScrollTrigger JS
    wp_enqueue_script( 'fitness-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array(), null, true );

    // Theme JS
    wp_enqueue_script( 'fitness-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

    // Încarcă scriptul de răspuns pentru comentarii, dacă este necesar
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    } 
}

add_action( 'wp_enqueue_scripts', 'fitness_gym_enqueue_scripts' );





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

//remove tag p from contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

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


// remove version from scripts and styles
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);