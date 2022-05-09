<?php

function mlchanger_login_message() {
    $mlchanger_login_message = get_option('mlchanger_login_message');

    $mlchanger_custom_html_message_bool = intval(get_option('mlchanger_custom_html_message_bool'));

    if($mlchanger_custom_html_message_bool) {
        // When user wants to set custom html
        $mlchanger_custom_html_message = get_option('mlchanger_custom_html_message');
        if(!empty($mlchanger_custom_html_message)){
            return stripslashes($mlchanger_custom_html_message);
        } 

    } else {
        // When user use default
        if(!empty($mlchanger_login_message)){
            return "<p style=\"text-align: center; font-size: 1.5em\"><strong>$mlchanger_login_message</strong></p>";
        } 
    }

}

add_filter('login_message', 'mlchanger_login_message');