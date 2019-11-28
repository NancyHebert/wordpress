<?php
/**
 * Aneeq Theme Functions
 */

//Aneeq Text Domain
define("aneeq", "aneeq");

//Aneeq Theme URL
define("ANEEQ_THEME_URL", get_template_directory_uri());
define("ANEEQ_THEME_DIR", get_template_directory());

//Aneeq Theme Option Panel CSS and JS Backend
add_action('wp_enqueue_scripts','aneeq_backend_resources');

// On theme activation add defaults theme settings and data
add_action( 'after_setup_theme', 'aneeq_default_theme_options_setup', 'theme_prefix_setup' );

//Include Customizer File

require get_template_directory() . '/include/customizer.php';
require( get_template_directory() . '/class-tgm-plugin-activation.php');
//wordpress header customizer
require get_template_directory() . '/include/header_image_customizer.php';

function aneeq_default_theme_options_setup() {
	// Load text domain for translation-ready
	load_theme_textdomain( 'aneeq', ANEEQ_THEME_DIR . '/languages' );

	// Add Theme support Title Tag
	add_theme_support( 'title-tag' );

	// Logo
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	));

	// Set the content_width with 900
	if ( ! isset( $content_width ) ) $content_width = 900;

	// Custom-header
	add_theme_support( 'custom-header', apply_filters( 'aneeq_custom_header_args', array(
			'default-text-color'     => '333',
			'width'                  => 1920,
			'height'                 => 320,
			'flex-height'            => true,
			'wp-head-callback'       => 'aneeq_header_style',
	) ) );

	$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => 'repeat',
		'default-position-x'     => 'left',
		'default-position-y'     => 'top',
		'default-size'           => 'auto',
		'default-attachment'     => 'scroll',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );

	add_editor_style('css/editor-style.css');
}


/**
 * Display Blog Setup notice on customizer page
 */
function aneeq_prefix_upsell_notice() {

	// Enqueue the script
	wp_enqueue_script(
		'prefix-customizer-upsell',
		get_template_directory_uri() . '/js/upsell.js',
		array(), '1.0.0',
		true
	);

	// Localize the script
	wp_localize_script(
		'prefix-customizer-upsell',
		'prefixL10n',
		array(
			'prefixURL'	=> esc_url( 'https://awplife.com/aneeq-free-wordpress-theme-setup/' ),
			'prefixLabel'	=> __( 'Aneeq Free WordPress Theme Setup', 'aneeq' ),
		)
	);

}
add_action( 'customize_controls_enqueue_scripts', 'aneeq_prefix_upsell_notice' );


//modify page / post title using title filter
add_filter('wp_title', 'aneeq_filter_pagetitle');
function aneeq_filter_pagetitle($title) {
    //check if its a blog post
    return $title = $title . ' | ';  bloginfo( 'name' );
}

//Add Theme Support Like - featured image, image crop, post format, rss feed
add_theme_support('post-thumbnails');	// featured image
//Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

//woo-commerce theme support
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

/**
 * Aneeq - Load Theme Option Panel CSS and JS Start
 */
function aneeq_backend_resources(){
	//aneeq theme css
	wp_enqueue_style( 'aneeq-style', get_stylesheet_uri());
	wp_enqueue_style( 'aneeq-bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');

	//JS & CSS
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	add_action('wp_enqueue_scripts', 'example_enqueue_styles');	
	wp_enqueue_script('jquery');
	wp_enqueue_script('aneeq-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), 1.0, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

	//dropdown menus js
	wp_enqueue_script('aneeq-smartmenus-js', get_template_directory_uri() . '/js/jquery.smartmenus.js');
	wp_enqueue_script('aneeq-smartmenus-bootstrap-js', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js');

	//Slider
	wp_enqueue_script('jquery-owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.js');
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.css');
}
//Aneeq - Load Theme Option Panel CSS and JS End


/**
 * Aneeq Widgets Start
 */
function aneeq_theme_widgets() {

	//Blog / Page Sidebar Widget
	register_sidebar( array(
		'name'			=> esc_html__( 'Sidebar Widget', 'aneeq'),
		'id' 			=> 'sidebar-widget',
		'before_widget' => '<aside class="widget">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>'
	));

	//Get Footer Layout Settings
	$aneeq_footer_column_layout = get_theme_mod('aneeq_footer_column_layout', 3);
	if($aneeq_footer_column_layout == 1) $aneeq_footer_class_name = "col-md-12 col-sm-12 col-xs-12";	// one column
	if($aneeq_footer_column_layout == 2) $aneeq_footer_class_name = "col-md-6 col-sm-6 col-xs-12";		// two column
	if($aneeq_footer_column_layout == 3) $aneeq_footer_class_name = "col-md-4 col-sm-6 col-xs-12";		// three column
	if($aneeq_footer_column_layout == 4) $aneeq_footer_class_name = "col-md-3 col-sm-6 col-xs-12";		// four column
	//Footer Widget 1
	register_sidebar( array(
		'name'			=> esc_html__('Footer Widget', 'aneeq'),
		'id'			=> 'aneeq-footer-widget',
		'description'	=> 'This is footer widget area of the theme.',
		'before_widget'	=> "<aside class='$aneeq_footer_class_name widget'>",
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));

	register_sidebar( array(
		'name'			=> 'WooCommerce sidebar widget area',
		'id'			=> 'woocommerce',
		'description'	=> 'WooCommerce sidebar widget area.',
		'before_widget'	=> '<aside class="widget">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));
}
add_action('widgets_init', 'aneeq_theme_widgets');
// Aneeq Widgets End

//Plugin Recommend
add_action('tgmpa_register','aneeq_plugin_recommend');
function aneeq_plugin_recommend(){
	$plugins = array(
	array(
			'name'      => 'Portfolio Filter Gallery',
			'slug'      => 'portfolio-filter-gallery',
			'required'  => true,
		),
	array(
			'name'      => 'Animated Live Wall',
			'slug'      => 'animated-live-wall',
			'required'  => true,
		),
	array(
            'name'      => 'Blog Filter & Post Portfolio',
            'slug'      => 'blog-filter',
            'required'  => true,
        ),
	array(
            'name'      => 'Image Gallery',
            'slug'      => 'new-image-gallery',
            'required'  => false,
        ), 
	array(
            'name'      => 'Pricing Table',
            'slug'      => 'abc-pricing-table',
            'required'  => true,
        ),
	array(
			'name'      => 'Video Gallery',
			'slug'      => 'new-video-gallery',
			'required'  => false,
		),
	array(
			'name'      => 'Grid Gallery',
			'slug'      => 'new-grid-gallery',
			'required'  => false,
	),
	array(
			'name'      => 'Customizer Login Page',
			'slug'      => 'customizer-login-page',
			'required'  => false,
	),
	array(
			'name'      => 'Testimonial',
			'slug'      => 'testimonial-maker',
			'required'  => true,
	),
	array(
			'name'      => 'Photo + Video Gallery',
			'slug'      => 'new-photo-gallery',
			'required'  => false,
	),
	array(
			'name'      => 'Media Slider (Image , Video, Content Carousal)',
			'slug'      => 'media-slider',
			'required'  => false,
	),
	array(
			'name'      => 'Responsive Slider Gallery',
			'slug'      => 'responsive-slider-gallery',
			'required'  => false,
	),
	array(
			'name'      => 'Google Plus Badge',
			'slug'      => 'new-google-plus-badge',
			'required'  => false,
	),
	array(
			'name'      => 'Slider Responsive Slideshow/Carousel',
			'slug'      => 'slider-responsive-slideshow',
			'required'  => false,
	)
	);
    tgmpa( $plugins );
}

//Register area for custom menu
add_action( 'init', 'aneeq_menu' );
function aneeq_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu','aneeq' ) );
	require get_template_directory() . '/include/walker.php';
}// Include Walker file
?>