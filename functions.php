<?php
/**
 * Casco Bay Transportation functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Casco_Bay_Transportation
 */


if ( ! function_exists( 'casco_bay_transportation_setup' ) ) :
	// Include Required Resources:
	require(dirname(__FILE__).'/customizer.php');


		function snedecor_default_settings()
{
		$cs_theme_options=array(
			//Logo and Favicon header
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'150',
			'_frontpage' => '1',
			// 'blog_count'=>'3',
			// 'upload_image_favicon'=>'',
			// 'custom_css'=>'',
			// 'slide_image_1' => $ImageUrl,
			// 'slide_title_1' => __('Slide Title', 'snedecor' ),
			// 'slide_desc_1' => __('Lorem Ipsum is simply dummy text of the printing', 'weblizar' ),
			// 'slide_btn_text_1' => __('Read More', 'weblizar' ),
			// 'slide_btn_link_1' => '#',
			// 'slide_image_2' => $ImageUrl2,
			// 'slide_title_2' => __('variations of passages', 'weblizar' ),
			// 'slide_desc_2' => __('Contrary to popular belief, Lorem Ipsum is not simply random text', 'weblizar' ),
			// 'slide_btn_text_2' => __('Read More', 'weblizar' ),
			// 'slide_btn_link_2' => '#',
			// 'slide_image_3' => $ImageUrl3,
			// 'slide_title_3' => __('Contrary to popular ', 'weblizar' ),
			// 'slide_desc_3' => __('Aldus PageMaker including versions of Lorem Ipsum, rutrum turpi', 'weblizar' ),
			// 'slide_btn_text_3' => __('Read More', 'weblizar' ),
			// 'slide_btn_link_3' => '#',
			// // Footer Call-Out
			// 'fc_home'=>'1',
			// 'fc_title' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'weblizar' ),
			// 'fc_btn_txt' => __('More Features', 'weblizar' ),
			// 'fc_btn_link' =>"#",
			// 'fc_icon' => 'fa fa-thumbs-up',
			// //Social media links
			// 'header_social_media_in_enabled'=>'1',
			// 'footer_section_social_media_enbled'=>'1',
			// 'twitter_link' =>"#",
			// 'fb_link' =>"#",
			// 'linkedin_link' =>"#",
			// 'youtube_link' =>"#",
			// 'instagram' =>"#",
			// 'gplus' =>"#",

			// 'email_id' => 'example@mymail.com',
			// 'phone_no' => '0159753586',
			// 'footer_customizations' => __(' &#169; 2016 Enigma', 'weblizar' ),
			// 'developed_by_text' => __('Theme Developed By', 'Cori Snedecor' ),
			// 'developed_by_weblizar_text' => __('Weblizar Themes', 'weblizar' ),
			// 'developed_by_link' => 'http://weblizar.com/',
			// 'service_home'=>'1',
			// 'home_service_heading' => __('Our Services', 'weblizar' ),
			// 'service_1_title'=>__("Idea",'weblizar' ),
			// 'service_1_icons'=>"fa fa-google",
			// 'service_1_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'weblizar' ),
			// 'service_1_link'=>"#",

			// 'service_2_title'=>__('Records', 'weblizar' ),
			// 'service_2_icons'=>"fa fa-database",
			// 'service_2_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'weblizar' ),
			// 'service_2_link'=>"#",

			// 'service_3_title'=>__("WordPress", 'weblizar' ),
			// 'service_3_icons'=>"fa fa-wordpress",
			// 'service_3_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'weblizar' ),
			// 'service_3_link'=>"#",

			// //Portfolio Settings:
			// 'portfolio_home'=>'1',
			// 'port_heading' => __('Recent Works', 'weblizar' ),
			// 'port_1_img'=> $ImageUrl4,
			// 'port_1_title'=>__('Bonorum', 'weblizar' ),
			// 'port_1_link'=>'#',
			// 'port_2_img'=> $ImageUrl5,
			// 'port_2_title'=>__('Content', 'weblizar' ),
			// 'port_2_link'=>'#',
			// 'port_3_img'=> $ImageUrl6,
			// 'port_3_title'=>__('dictionary', 'weblizar' ),
			// 'port_3_link'=>'#',
			// 'port_4_img'=> $ImageUrl7,
			// 'port_4_title'=>__('randomised', 'weblizar' ),
			// 'port_4_link'=>'#',
			// //BLOG Settings
			// 'show_blog' => '1',
			// 'blog_title'=>__('Latest Blog', 'weblizar' ),

			// //Google font style
			// 'main_heading_font' => 'Open Sans',
			// 'menu_font' => 'Open Sans',
			// 'theme_title' => 'Open Sans',
			// 'desc_font_all' => 'Open Sans'


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

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
