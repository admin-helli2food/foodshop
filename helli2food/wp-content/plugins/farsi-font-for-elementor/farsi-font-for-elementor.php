<?php
/**
 * Plugin Name:  Farsi Font for Elementor
 * Description:  Adds Farsi fonts to Elementor.
 * Plugin URI:   https://wordpress.org/plugins/farsi-font-for-elementor/
 * Author: 			 babakfp
 * Author URI: 	 https://babakfp.ir
 * Version: 		 2.5.0
 * Text Domain:  farsi-font-for-elementor
 * Domain Path:  /languages
 * Tested up to: 5.8.2
 * Tags:         farsi, parsian, font, farsi font, elementor فونت فارسی, افزودنی المنتور
 * License:      GPL v2 or later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die;

define( 'FARSI_FONT_FOR_ELEMENTOR', [
	'NAME' => 'Farsi Font for Elementor',
	'V' => '2.5.0',

	'PHP_MIN_V' => '7.4.0',
	'ELE_MIN_V' => '3.5.0',

	'INCLUDES' => plugin_dir_path( __FILE__ ) . 'includes/',
	'CSS' => plugin_dir_url( __FILE__ ) . 'assets/css/',
] );

require_once FARSI_FONT_FOR_ELEMENTOR['INCLUDES'].'core.php';
