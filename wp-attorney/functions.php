<?php
/**
 * wp_attorney functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_attorney
 */

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
function wp_attorney_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp_attorney, use a find and replace
		* to change 'wp_attorney' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp_attorney', get_template_directory() . '/languages' );

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
	add_image_size('thumbnail-size', 625, 268, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'wp_attorney' ),
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
			'wp_attorney_custom_background_args',
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
add_action( 'after_setup_theme', 'wp_attorney_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_attorney_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_attorney_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_attorney_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_attorney_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp_attorney' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp_attorney' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_attorney_widgets_init' );


if ( ! function_exists( 'wp_attorney_fonts_url' ) ) :
function wp_attorney_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin';

    // Add Outfit and Cormorant Garamond fonts
    if ( 'off' !== _x( 'on', 'Outfit font: on or off', 'wp_attorney' ) ) {
        $fonts[] = 'Outfit:400,500,600';
    }
    if ( 'off' !== _x( 'on', 'Cormorant Garamond font: on or off', 'wp_attorney' ) ) {
    $fonts[] = 'Cormorant Garamond:400,600,700';
}

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subsets' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }
    return $fonts_url;
}
endif;

/**
 * Enqueue scripts and styles.
 */
function wp_attorney_scripts() {
	
    wp_enqueue_style( 'wp-attorney-fonts', wp_attorney_fonts_url(), array(), null );
	wp_enqueue_style( 'wp_attorney-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wp_attorney-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wp_attorney-navigation', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_attorney_scripts');

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
 * Custom Post Type Practice Areas
 */
require get_template_directory() . '/inc/custom-types/practice-areas.php';

/**
 * Custom Post Type Cases
 */
require get_template_directory() . '/inc/custom-types/cases.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wp_attorney_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'wp_attorney_excerpt_length');

function wp_attorney_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wp_attorney_excerpt_more' );



/* ACF Options page in admin panel */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-generic',
		'redirect'		=> false
	));		
}

function custom_post_type_rest_support() {
    global $wp_post_types;

    //  "Cases"
    $post_type_name = 'cases';

    if( isset( $wp_post_types[ $post_type_name ] ) ) {
        $wp_post_types[$post_type_name]->show_in_rest = true;
        // Необязательно настраивать rest_base или класс контроллера
        $wp_post_types[$post_type_name]->rest_base = $post_type_name;
        $wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
    }

    //  "Practice Areas"
    $post_type_name = 'practice_areas';

    if( isset( $wp_post_types[ $post_type_name ] ) ) {
        $wp_post_types[$post_type_name]->show_in_rest = true;
        // Необязательно настраивать rest_base или класс контроллера
        $wp_post_types[$post_type_name]->rest_base = $post_type_name;
        $wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
    }
}
add_action( 'init', 'custom_post_type_rest_support', 25 );

function custom_add_cpts_to_api( $args, $post_type ) {
    if ( 'case' === $post_type || 'practice_areas' === $post_type ) {
        $args['show_in_rest'] = true;
    }
    return $args;
}
add_filter( 'register_post_type_args', 'custom_add_cpts_to_api', 10, 2 );


