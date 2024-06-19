<?php 

// show_admin_bar( false );

require_once 'inc/cpt.php';
require_once 'inc/ajax.php';

add_action('wp_enqueue_scripts', 'load_style_script');
function load_style_script(){
	wp_enqueue_style('my-normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('my-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
	wp_enqueue_style('my-font-awesome', get_stylesheet_directory_uri() . '/fonts/font-awesome-6-pro-main/css/all.css');
	wp_enqueue_style('my-fancybox', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css');
	wp_enqueue_style('my-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('my-nice-select', get_stylesheet_directory_uri() . '/css/nice-select.css');
	wp_enqueue_style('my-swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/styles.css');
	wp_enqueue_style('my-responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('my-style-main', get_stylesheet_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('my-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js');
	wp_enqueue_script('my-sticky', get_stylesheet_directory_uri() . '/js/jquery.sticky.js');
	wp_enqueue_script('my-swiper', get_stylesheet_directory_uri() . '/js/swiper.js');
	wp_enqueue_script('my-fancybox', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js');
	wp_enqueue_script('my-nice-select', get_stylesheet_directory_uri() . '/js/jquery.nice-select.min.js');
	wp_enqueue_script('my-nicescroll', get_stylesheet_directory_uri() . '/js/jquery.nicescroll.min.js');
	wp_enqueue_script('my-validate', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js');
	wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/js/script.js');
	wp_enqueue_script('my-add', get_stylesheet_directory_uri() . '/js/add.js');
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header-mobile' => 'Header mobile menu',
		'footer' => 'Footer menu'
	) );
});


add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}


add_action('wp_enqueue_scripts', 'wpcf7_recaptcha_no_refill', 15, 0);
function wpcf7_recaptcha_no_refill() {
	$service = WPCF7_RECAPTCHA::get_instance();
	if ( ! $service->is_active() ) { return; }
	wp_add_inline_script('contact-form-7', 'wpcf7.cached = 0;', 'before' );
}


add_filter('acfe/flexible/thumbnail', 'my_acf_layout_thumbnail', 10, 3);
function my_acf_layout_thumbnail($thumbnail, $field, $layout){

    // Must return an URL or Attachment ID
	return get_stylesheet_directory_uri() . '/img/acf/' . $layout['name'] . '.png';

}