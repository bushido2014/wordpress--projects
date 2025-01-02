<?php
/**
 * wpland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpland
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
	


function wpland_setup() {
	

	
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wpland, use a find and replace
		* to change 'wpland' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wpland', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wpland' ),
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
			'wpland_custom_background_args',
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
add_action( 'after_setup_theme', 'wpland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpland_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wpland_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wpland' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wpland' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
		register_sidebar(array(
			'name'          => esc_html__( 'Sidebar WpLand', 'wpland' ),
			'id'            => 'sidebar-wpland',
			'description'   => esc_html__( 'Add widgets here.', 'wpland' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'wpland_widgets_init' );


if ( ! function_exists( 'wpland_fonts_url' ) ) :
function wpland_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin';

  if ( 'off' !== _x( 'on', 'Saira font: on or off', 'wpland' ) ) {
		$fonts[] = 'Saira: 400,600,700';
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


function trim_excerpt($text) {
return rtrim($text,'[&hellip], [...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');


function new_excerpt_length($length) {
	return 34;
}
add_filter('excerpt_length', 'new_excerpt_length');


function wpland_scripts() {
    wp_enqueue_style( 'wpland_fonts_url', wpland_fonts_url(), array(), null );
	
	wp_enqueue_style( 'wpland-fancyboxstyle', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css' );
	wp_enqueue_style( 'wpland-swiper-style', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );
	
	wp_enqueue_style( 'wpland-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wpland-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'wpland-swiper-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'wpland-fancyboxscript', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'wpland-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpland_scripts' );

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



function wpland_create_post_type() {
	register_post_type( 'product',
	  array(
		'labels' => array(
		  'name'                  =>  'Товары',
		  'singular_name'         => 'Товар',
		  'add_new'               => 'Добавить новый',
		  'new_item'              => 'Новая',
			  'edit_item'             => 'Редактировать',
			  'update_item'           => 'Обновить',
			  'view_item'             => 'Просмотр',
			  'view_items'            => 'Посмотреть все',
		),
		'menu_icon' => 'dashicons-cart',
		'menu_position' => 5,
		'supports' => array('title','thumbnail', 'excerpt' ),
		
		'public' => true,
		'has_archive' => true,
		'rewrite'            => ['slug' => 'products'],  
	  )
	);
	 register_taxonomy('product-categories', 'product', [
    'labels'        => [
      'name'                        => 'Категории товаров',
      'singular_name'               => 'Категория товароа',
      'search_items'                =>  'Искать категории',
      'popular_items'               => 'Популярные категории',
      'all_items'                   => 'Все категории',
      'edit_item'                   => 'Изменить категорию',
      'update_item'                 => 'Обновить категорию',
      'add_new_item'                => 'Добавить новую категорию',
      'new_item_name'               => 'Новое название категории',
      'separate_items_with_commas'  => 'Отделить категории запятыми',
      'add_or_remove_items'         => 'Добавить или удалить категорию',
      'choose_from_most_used'       => 'Выбрать самую популярную категорию',
      'menu_name'                   => 'Категории',
    ],
    'hierarchical'  => true,
  ]);
  }
  add_action( 'init', 'wpland_create_post_type' );



/*ACF*/ 
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
		'page_title' 	=> 'Home Page Settings',
		'menu_title'	=> 'Home Page',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


// Remove p tags from Contact Form 7 form
add_filter('wpcf7_autop_or_not', '__return_false');

function wpland_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'wpland_excerpt_length');

function wpland_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpland_excerpt_more' );



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


