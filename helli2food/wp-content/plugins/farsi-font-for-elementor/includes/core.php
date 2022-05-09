<?php
defined( 'ABSPATH' ) or die;

require_once FARSI_FONT_FOR_ELEMENTOR['INCLUDES'].'is-compatible.php';

use function Farsi_Font_For_Elementor\is_compatible;


final class Farsi_Font_For_Elementor {

  private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

  public function __construct() {
		add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );
    add_action( 'init', [ $this, 'i18n' ] );
  }

	public function on_plugins_loaded() {
		if ( is_compatible() ) {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}
	}

	public function init() {
		require_once FARSI_FONT_FOR_ELEMENTOR['INCLUDES'] .'fonts.php';
		require_once FARSI_FONT_FOR_ELEMENTOR['INCLUDES'] .'editor.php';
	}

	public function i18n() {
		load_plugin_textdomain( 'farsi-font-for-elementor', false, 'farsi-font-for-elementor/languages' );
	}

}

if ( ! class_exists(' Farsi_Font_For_Elementor ') ) {
	Farsi_Font_For_Elementor::instance();
}
