<?php
/**
* Plugin Name: Fitness Calculators
* Description: Plugin for calculating Water intake ,BMI calculator ,Protien Intake for the fitness freaks.
* Version: 1.4.0
* Author: Gurcharan Singh
* Author URI: http://codeinitiator.com
* Text Domain: fitness-calculators
* License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once(dirname(__FILE__) . "/includes/js_css_register.php");
require_once(dirname(__FILE__) . "/includes/fc-class-short-code.php");
require_once(dirname(__FILE__) . "/includes/fc-class-settings.php");
require_once(dirname(__FILE__) . "/includes/fc-class-widgets.php");
new FcpSettings();

