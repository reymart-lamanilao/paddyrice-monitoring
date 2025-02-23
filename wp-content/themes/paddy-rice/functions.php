<?php
/**
 * Paddy Rice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Paddy_Rice
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
function paddy_rice_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Paddy Rice, use a find and replace
		* to change 'paddy-rice' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'paddy-rice', get_template_directory() . '/languages' );

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
			'main' => esc_html__( 'Primary', 'paddy-rice' ),
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
			'paddy_rice_custom_background_args',
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
add_action( 'after_setup_theme', 'paddy_rice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function paddy_rice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'paddy_rice_content_width', 640 );
}
add_action( 'after_setup_theme', 'paddy_rice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function paddy_rice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'paddy-rice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'paddy-rice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'paddy_rice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function paddy_rice_scripts() {
	$theme_css_ver = date("ymd-Gis", filemtime( get_stylesheet_directory() . '/style.css' ));
	wp_enqueue_style( 'paddy-rice-style', get_stylesheet_uri(), array(), $theme_css_ver );
	wp_style_add_data( 'paddy-rice-style', 'rtl', 'replace' );

	// Auto update style version
  	$app_css_ver = date("ymd-Gis", filemtime( get_stylesheet_directory() . '/assets/css/app.css' ));
  	wp_enqueue_style( 'theme-app-style', get_stylesheet_directory_uri() . '/assets/css/app.css', false, $app_css_ver );

	wp_enqueue_script( 'paddy-rice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// Auto update js theme version
	$theme_js_ver  = date("ymd-Gis", filemtime(  get_stylesheet_directory() . '/assets/js/app.js' ));
  	wp_enqueue_script('theme-app-js', get_theme_file_uri( '/assets/js/app.js' ), array('jquery'), $theme_js_ver, true);

	wp_enqueue_script('paddyrice-readings-js', get_template_directory_uri() . '/js/app-readings.js', array( 'jquery' ),1.9);
	wp_localize_script( 'paddyrice-readings-js', 'wp_ajax', array(
	   'ajaxurl' => admin_url( 'admin-ajax.php' )
   ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'paddy_rice_scripts' );

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

add_filter('show_admin_bar', '__return_false');

add_filter( 'nav_menu_css_class', function($classes) {
    $classes[] = 'nav-item';
    return $classes;
}, 10, 1 );

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );

// Example function to call the moisture prediction endpoint
function get_predicted_moisture() {
	$data_received = $_POST['some_data'];
	$sensor_data = 1;
    // $url = 'http://192.168.1.100:5000/api/predict_moisture'; // Use your laptop's IP here
	$url = 'http://127.0.0.1:5000/api/predict_moisture';
    $body = json_encode(array('sensor_data' => $data_received));
    $args = array(
        'body'        => $body,
        'headers'     => array('Content-Type' => 'application/json'),
        'timeout'     => 15,
        'method'      => 'POST'
    );
    
    $response = wp_remote_post($url, $args);
    
    if (is_wp_error($response)) {
        // return 'Error: ' . $response->get_error_message();
		$data = $response->get_error_message();
		echo $data;
    }
    echo $response;
    $data = json_decode(wp_remote_retrieve_body($response), true);
    // return isset($data['predicted_moisture']) ? $data['predicted_moisture'] : 'No moisture value returned';

	echo json_encode(array('moist' => $data));
	die();
}

function get_predicted_moisture2($sensor_data = null) {
	echo json_encode(array('moist' => 10));
	die();
}

// Example usage within a page template:
function read_device_data() {
	$sensor_data = array(50, 25, 60); // Replace with actual sensor data or form input
	$moisture = get_predicted_moisture($sensor_data);
	echo '<p>Predicted Moisture Content: ' . esc_html($moisture) . '</p>';

	// echo json_encode($moisture);
	die();
}

add_action( 'wp_ajax_get_predicted_moisture', 'get_predicted_moisture' );    
add_action( 'wp_ajax_nopriv_get_predicted_moisture', 'get_predicted_moisture' );

