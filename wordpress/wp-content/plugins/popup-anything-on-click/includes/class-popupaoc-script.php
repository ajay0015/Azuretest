<?php
/**
 * Script Class
 * Handles the script and style functionality of plugin
 *
 * @package Popup anything on click
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Popupaoc_Script {

	function __construct() {

		// Action to add style in backend
		add_action( 'admin_enqueue_scripts', array($this, 'popupaoc_admin_style_script') );

		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'popupaoc_front_style') );

		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'popupaoc_plugin_script') );

	}

	/**
	 * Enqueue admin styles
	 * 
	 * @package Popup anything on click
	 * @since 1.0.0
	 */
	function popupaoc_admin_style_script( $hook ) {

		global $typenow, $wp_version;

		$new_ui = $wp_version >= '3.5' ? '1' : '0'; // Check wordpress version for older scripts

		// Taking pages array
		$pages_arr = array( POPUPAOC_POST_TYPE );

		if( in_array($typenow, $pages_arr) ) {
			wp_register_style( 'popupaoc-admin-style', POPUPAOC_URL.'assets/css/popupaoc-admin-style.css', array(), POPUPAOC_VERSION );
			wp_enqueue_style( 'popupaoc-admin-style' );

			// Registring admin script
			wp_register_script( 'popupaoc-admin-script', POPUPAOC_URL.'assets/js/popupaoc-admin-script.js', array('jquery'), POPUPAOC_VERSION, true );
			wp_enqueue_script( 'popupaoc-admin-script' );
			wp_localize_script( 'popupaoc-admin-script', 'PopupaocAdmin', array(
																		'new_ui' 	=>	$new_ui,
																		'sry_msg' => __('Sorry, One entry should be there.', 'buttons-with-style'),
																	));
		}
	}

	/**
	 * Function to add style at front side
	 * 
	 * @package Popup anything on click
	 * @since 1.0.0
	 */
	function popupaoc_front_style() {

		// Registring and enqueing button with style pro css
		wp_register_style( 'popupaoc-public-style', POPUPAOC_URL.'assets/css/popupaoc-public-style.css', array(), POPUPAOC_VERSION );
		wp_enqueue_style( 'popupaoc-public-style' );

	}

	/**
	 * Function to add script at front side
	 * 
	 * @package Popup anything on click
	 * @since 1.0.0
	 */
	function popupaoc_plugin_script() {

		global $popupaoc_options;

		// Registring frontend js
		if( !wp_script_is( 'jquery-custombox-legacy', 'registered' ) ) {
			wp_register_script( 'jquery-custombox-legacy', POPUPAOC_URL.'assets/js/custombox.legacy.min.js', array('jquery'), POPUPAOC_VERSION, false );
		}

		// Register js in header
		if( !empty($popupaoc_options['add_js']) && $popupaoc_options['add_js'] == 2 ) {
			wp_enqueue_script('jquery-custombox-legacy');
		}

		if( !wp_script_is( 'jquery-custombox', 'registered' ) ) {
			wp_register_script( 'jquery-custombox', POPUPAOC_URL.'assets/js/custombox.min.js', array('jquery'), POPUPAOC_VERSION, true );
		}

		wp_register_script( 'wpos-public-script-js', POPUPAOC_URL.'assets/js/popupaoc-public.js', array('jquery'), POPUPAOC_VERSION, true );

	}
}

$popupaoc_script = new Popupaoc_Script();