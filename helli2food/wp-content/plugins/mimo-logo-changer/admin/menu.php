<?php

add_action('admin_menu','mlchanger_menu');

function mlchanger_menu() {
    $menu = add_menu_page(translate('Wordpress Logo Changer', 'mimo-logo-changer'), translate('Wordpress Logo Changer', 'mimo-logo-changer'), 'manage_options', 'mimo_logo_changer','mlchanger_setting_func','dashicons-admin-appearance');
    add_submenu_page('lc', translate('Wordpress Logo Changer', 'mimo-logo-changer'), translate('Wordpress Logo Changer', 'mimo-logo-changer'), 'manage_options', 'mlchanger_setting','mlchanger_setting_func');

}