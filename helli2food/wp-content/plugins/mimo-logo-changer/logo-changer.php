<?php

/*
Plugin Name: Wordpress Logo Changer
Plugin URI: http://rihanet.com/wordpress-logo-changer
Description: with this plugin you can change wordpress login page logo and (logo link)
Version: 1.4.1
Author: Rihanet
Author URI: https://rihanet.com
*/

//define('MLCHANGER_DB_VERSION',1);

defined('ABSPATH') || exit('No direct.');

define('MLCHANGER_PATH', plugin_dir_path(__FILE__));
define('MLCHANGER_URL', plugin_dir_url(__FILE__));

define('MLCHANGER_ADMIN_DIR', trailingslashit(MLCHANGER_PATH . 'admin'));
define('MLCHANGER_TPL_DIR', trailingslashit(MLCHANGER_PATH . 'templates'));
define('MLCHANGER_CORE_DIR', trailingslashit(MLCHANGER_PATH . 'core'));

define('MLCHANGER_CSS_URL', trailingslashit(MLCHANGER_URL . 'assets/css'));
define('MLCHANGER_JS_URL', trailingslashit(MLCHANGER_URL . 'assets/js'));
define('MLCHANGER_IMG_URL', trailingslashit(MLCHANGER_URL . 'assets/img'));


if(is_admin()) {
    include MLCHANGER_ADMIN_DIR . 'page.php';
    include MLCHANGER_ADMIN_DIR . 'menu.php';
}

include MLCHANGER_CORE_DIR . 'autoload.php';
