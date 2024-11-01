<?php
/**
 * Plugin Name: Widget for Google Map
 * Description: It will embed your google map into a widget area. You can add a widget in any of your widget areas and It will show your map.
 * Version: 1.0.0
 * Author: MhrTheme
 * Author URI: https://mhrtheme.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: widget-for-google-map
 * Domain Path: /languages
 */

/**
 * Include Assets
 */
add_action('wp_enqueue_scripts', 'widget_for_google_map_scripts');

function widget_for_google_map_scripts() {
	wp_register_style( 'widget-for-google-map-style', plugins_url('/assets/css/widget-for-google-map.css', __FILE__ ) );
    wp_enqueue_style( 'widget-for-google-map-style' );

    wp_enqueue_script( 'widget-for-google-map-script', plugins_url('/assets/js/widget-for-google-map.js', __FILE__ ), array( 'jquery' ) );
}

if(file_exists(dirname(__File__).'/includes/widget-for-google-map-embed.php')) {
	require_once(dirname(__File__).'/includes/widget-for-google-map-embed.php');
}
