<?php
namespace Farsi_Font_For_Elementor;
defined( 'ABSPATH' ) or die;

function is_compatible() {

	// Check if Elementor installed and activated
	if ( ! did_action( 'elementor/loaded' ) ) {
		add_action( 'admin_notices', 'Farsi_Font_For_Elementor\admin_notice_missing_main_plugin' );
		return false;
	}

	// Check for required Elementor version
	if ( ! version_compare( ELEMENTOR_VERSION, FARSI_FONT_FOR_ELEMENTOR['ELE_MIN_V'], '>=' ) ) {
		add_action( 'admin_notices', 'Farsi_Font_For_Elementor\admin_notice_minimum_elementor_version' );
		return false;
	}

	// Check for required PHP version
	if ( version_compare( PHP_VERSION, FARSI_FONT_FOR_ELEMENTOR['PHP_MIN_V'], '<' ) ) {
		add_action( 'admin_notices', 'Farsi_Font_For_Elementor\admin_notice_minimum_php_version' );
		return false;
	}

	return true;

}

// Missing Elementor plugin notice
function admin_notice_missing_main_plugin() {
	if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

	// 1: Plugin name / 2: Elementor / 3: Required Elementor version
	$message = sprintf(
		esc_html__( '%1$s requires %2$s to be installed and activated.', 'farsi-font-for-elementor' ),
		'<strong>'. esc_html__( FARSI_FONT_FOR_ELEMENTOR['NAME'], 'farsi-font-for-elementor' ) .'</strong>',
		'<strong>'. esc_html__( 'Elementor', 'farsi-font-for-elementor' ) .'</strong>'
	);

	printf( '<div class="notice notice-error"><p>%1$s</p></div>', $message );
}

// Minimum Elementor version
function admin_notice_minimum_elementor_version() {
	if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

	// 1: Plugin name / 2: Elementor / 3: Required Elementor version
	$message = sprintf(
		esc_html__( '%1$s requires %2$s version ^%3$s.', 'farsi-font-for-elementor' ),
		'<strong>'. esc_html__( FARSI_FONT_FOR_ELEMENTOR['NAME'], 'farsi-font-for-elementor' ) .'</strong>',
		'<strong>'. esc_html__( 'Elementor', 'farsi-font-for-elementor' ) .'</strong>',
		'<strong>'. FARSI_FONT_FOR_ELEMENTOR['ELE_MIN_V'] .'</strong>'
	);

	printf( '<div class="notice notice-error"><p>%1$s</p></div>', $message );
}

// Minimum PHP version
function admin_notice_minimum_php_version() {
	if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

	// 1: Plugin name / 2: PHP / 3: Required PHP version
	$message = sprintf(
		esc_html__( '%1$s requires %2$s version ^%3$s.', 'farsi-font-for-elementor' ),
		'<strong>'. esc_html__( FARSI_FONT_FOR_ELEMENTOR['NAME'], 'farsi-font-for-elementor' ) .'</strong>',
		'<strong>PHP</strong>',
		'<strong>'. FARSI_FONT_FOR_ELEMENTOR['PHP_MIN_V'] .'</strong>',
	);

	printf( '<div class="notice notice-error"><p>%1$s</p></div>', $message );
}
