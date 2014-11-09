<?php
/**
 * Plugin Name: Night and day
 * Plugin URI: https://github.com/HeikoMamerow/night-and-day
 * Description: Switch distraction free writing mode as light or dark theme.
 * Version: 0.0
 * Author: Heiko Mamerow
 * Author URI: http://heikomamerow.de
 * License: GPL2
 */


// Add theme support for custom CSS in the TinyMCE visual editor.
function tiny_mce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';
		$mce_css .= plugins_url( 'css/tinymce.css', __FILE__ );
		return $mce_css;
}
add_filter( 'mce_css', 'tiny_mce_css' );


// Enqeue style for the fullscreen overlay.
function overlay_css() {
	wp_enqueue_style( 'night-and-day', plugins_url( 'css/overlay.css', __FILE__, '1.0.0' ) );
}

add_action( 'admin_enqueue_scripts', 'overlay_css' );