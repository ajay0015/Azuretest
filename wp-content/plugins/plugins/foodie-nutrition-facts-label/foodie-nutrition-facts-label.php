<?php

/**
 * Plugin Name: Foodie Nutrition Facts Label
 * Description: The only WordPress plugin that lets you create nutrition facts labels and add them to your pages with ease.
 * Author:      wpfoodie
 * Version:     1.1.4
 * Author URI:  https://wpfoodie.com
 * Upgrade URI: https://wpfoodie.com
 */

/**
 * The current version of the plugin.
 */
define( 'FOODIE_NL_VERSION', '1.1.4' );

if ( ! function_exists( 'get_foodie_nl_plugin_file' ) ):

	function get_foodie_nl_plugin_file() {
		return __FILE__;
	}

endif;

if ( ! function_exists( 'get_foodie_nl_dir' ) ) :

	function get_foodie_nl_dir() {
		return dirname( __FILE__ );
	}
	
endif;

if ( ! function_exists( 'get_foodie_nl_inc_folder' ) ):

	function get_foodie_nl_inc_folder() {
		return dirname( __FILE__ ) . '/inc';
	}

endif;

if ( ! function_exists( 'get_foodie_nl_plugin_url' ) ):

	function get_foodie_nl_plugin_url() {
		return plugin_dir_url( __FILE__ );
	}

endif;

function activate_foodie_nl() {
	return true;
}

register_activation_hook( get_foodie_nl_plugin_file(), 'activate_foodie_nl' );

function deactivate_foodie_nl() {

}

register_deactivation_hook( get_foodie_nl_plugin_file(), 'deactivate_foodie_nl' );

/**
 * Initialize
 */
require_once( get_foodie_nl_inc_folder() . '/classes/class-foodie-nutrition-labels.php' );

add_action( 'plugins_loaded', array( Foodie_Nutrition_Labels(), 'initialize' ) );
