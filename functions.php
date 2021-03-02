<?php
/**
 * Catch Fire Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Catch Fire
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_CATCH_FIRE_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'catch-fire-theme-css', get_stylesheet_directory_uri() . '/css/main.css', array('astra-theme-css'), CHILD_THEME_CATCH_FIRE_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * ENQUE COMMONLY USED JS SCRIPTS
 *
 */

function jquery_js() {
	wp_enqueue_script( 'jquery_js', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'jquery_js');

function bootstrap_js() {
   wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'bootstrap_js');

function custom_js() {
wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'custom_js');


function wow_js() {
wp_enqueue_script( 'wow_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'wow_js');

if( function_exists('acf_add_options_page') ) {

acf_add_options_page();

}


/**
* REGISTER BOOTSTRAP NAV WALKER
**/

require_once('class-wp-bootstrap-navwalker.php');


// Add ACF Options Pages
if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
'page_title' 	=> 'Theme General Settings',
'menu_title'	=> 'Theme Settings',
'menu_slug' 	=> 'theme-general-settings',
'capability'	=> 'edit_posts',
'redirect'		=> false
));

}
