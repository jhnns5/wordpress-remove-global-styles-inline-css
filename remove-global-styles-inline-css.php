<?php
/**
* Plugin Name: Remove global-styles-inline-css
* Description: Remove global-styles-inline-css in WordPress 5.9.
* Version: 20220126
* Author: Johannes
* Author URI: https://github.com/jhnns5/wordpress-remove-global-styles-inline-css
* License: GPL2
*/
function wps_deregister_styles() {
	wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );
?>