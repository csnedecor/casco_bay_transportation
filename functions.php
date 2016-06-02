<?php
/**
 * Casco Bay Transportation functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Casco_Bay_Transportation
 */

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


if ( ! function_exists( 'casco_bay_transportation_setup' ) ) :

	function snedecor_default_settings() {
		$ImageUrl =  esc_url(get_template_directory_uri() ."/images/header-1.jpg");
		$ImageUrl2 = esc_url(get_template_directory_uri() ."/images/header-2.jpg");
		$ImageUrl3 = esc_url(get_template_directory_uri() ."/images/header-3.jpg");

		$cs_theme_options=array(
			//Logo and Favicon header
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'150',
			'_frontpage' => '1',
			// 'blog_count'=>'3',
			// 'upload_image_favicon'=>'',

			// Header slider
			'slide_image_1' => $ImageUrl,
			'slide_image_2' => $ImageUrl2,
			'slide_image_3' => $ImageUrl3,

			//Social media links
			'footer_section_social_media_enabled'=>'1',
			'twitter_link' =>"",
			'fb_link' =>"https://www.facebook.com/pages/Casco-Bay-Transportation/155145887857969?rf=405851686275269",
			'linkedin_link' =>"",

			'email_id' => 'example@mymail.com',
			'phone_no' => '(207)710-2323',
			'footer_customizations' => __(' &#169; 2016 Casco Bay Transportation', 'snedecor' ),
			'developed_by_text' => __('Theme Developed By', 'Cori Snedecor' ),
			'developed_by_snedecor_text' => __('Cori Snedecor', 'snedecor' ),
			'developed_by_link' => 'http://maine-websites.com/',
			'service_home'=>'1',
			'home_service_heading' => __('Our Services', 'snedecor' ),
			'service_1_title'=>__("FlatBeds for Heavy and Oversize Loads",'snedecor' ),
			'service_1_icons'=>"fa-truck",
			'service_1_text'=>__(" ", 'snedecor' ),
			'service_1_link'=>"#",

			'service_2_title'=>__('NEW Rail Service', 'snedecor' ),
			'service_2_icons'=>"fa-train",
			'service_2_text'=>__(" ", 'snedecor' ),
			'service_2_link'=>"#",

			'service_3_title'=>__("Looking for Experienced Drivers", 'snedecor' ),
			'service_3_icons'=>"fa-road",
			'service_3_text'=>__(" ", 'snedecor' ),
			'service_3_link'=>"#"
		);
		return apply_filters( 'casco_options', $cs_theme_options );
}
	function snedecor_get_options() {
    // Options API
    return wp_parse_args(
        get_option( 'casco_options', array() ),
        snedecor_default_settings()
    );
	}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function casco_bay_transportation_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Casco Bay Transportation, use a find and replace
	 * to change 'casco-bay-transportation' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'casco-bay-transportation', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'casco-bay-transportation' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'casco_bay_transportation_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'casco_bay_transportation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casco_bay_transportation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'casco_bay_transportation_content_width', 640 );
}
add_action( 'after_setup_theme', 'casco_bay_transportation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function casco_bay_transportation_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'casco-bay-transportation' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'casco-bay-transportation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'casco_bay_transportation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casco_bay_transportation_scripts() {
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome-4.6.3/css/font-awesome.css');
  wp_enqueue_style('OpenSansRegular','//fonts.googleapis.com/css?family=Open+Sans');
  wp_enqueue_style('OpenSansBold','//fonts.googleapis.com/css?family=Open+Sans:700');
  wp_enqueue_style('OpenSansSemiBold','//fonts.googleapis.com/css?family=Open+Sans:600');
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/css/bootstrap.css');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.js');
	wp_enqueue_style( 'casco-bay-transportation-style', get_stylesheet_uri() );
	wp_enqueue_script( 'casco-bay-transportation-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'casco-bay-transportation-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casco_bay_transportation_scripts' );
