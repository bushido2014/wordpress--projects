<?php
/**
 * finsweetwp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package finsweetwp
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
function finsweetwp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on finsweetwp, use a find and replace
		* to change 'finsweetwp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'finsweetwp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'finsweetwp' ),
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
			'finsweetwp_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

//Google Fonts
if ( ! function_exists( 'finsweetwp_fonts_url' ) ) :
function finsweetwp_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin';

  if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'finsweetwp' ) ) {
		$fonts[] = 'Poppins: 400,500,600';
	}

  if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}
return $fonts_url;
}
endif;


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
add_action( 'after_setup_theme', 'finsweetwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function finsweetwp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'finsweetwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'finsweetwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function finsweetwp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'finsweetwp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'finsweetwp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'finsweetwp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function finsweetwp_scripts() {
    wp_enqueue_style( 'finsweetwp_fonts_url', finsweetwp_fonts_url(), array(), null );

    wp_enqueue_style( 'finsweetwp-swiper-style', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );
	wp_enqueue_style( 'finsweetwp-fancyboxstyle', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css' );
	wp_enqueue_style( 'finsweetwp-style', get_stylesheet_uri(), array());
	wp_style_add_data( 'finsweetwp-style', 'rtl', 'replace' );
   

    wp_enqueue_script( 'finsweetwp-swiper-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(),_S_VERSION,  true );
	wp_enqueue_script( 'finsweetwp-fancyboxscript', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'finsweetwp-main', get_template_directory_uri() . '/js/main.js', array(),_S_VERSION,  true );

}
add_action( 'wp_enqueue_scripts', 'finsweetwp_scripts' );



function finsweetwp_create_post_type() {
  register_post_type( 'project',
    array(
      'labels' => array(
        'name'                  =>  'Projects',
        'singular_name'         => 'Project',
        'add_new'               => 'Добавить новый',
        'new_item'              => 'Новая',
		    'edit_item'             => 'Редактировать',
		    'update_item'           => 'Обновить',
		    'view_item'             => 'Просмотр',
		    'view_items'            => 'Посмотреть все',
      ),
      'menu_icon' => 'dashicons-admin-home',
      'menu_position' => 5,
      'supports' => array('title','editor','thumbnail' ),
      'public' => true,
      'has_archive' => true,
      'rewrite'            => ['slug' => 'projects'],  
    )
  );
}
add_action( 'init', 'finsweetwp_create_post_type' );


add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '"><div class="arrow-icon w-embed"> Read More
                    <svg height="100%" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                      <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5L20 4.5V3.5L0 3.5L0 4.5Z" fill="currentcolor"></path>
                    </svg>
                  </div> </a>';
}
add_filter( 'excerpt_length', function(){
	return 18;
} );


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
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Other Settings',
		'menu_title'	=> 'Other Settings',
		'parent_slug'	=> 'theme-general-settings',
	));	
}




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

add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
function remove_global_styles(){
    wp_dequeue_style( 'global-styles' );
}

// remove version from scripts and styles
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);