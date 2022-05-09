<?php 

	$lzrestaurant_custom_style = '';

	// Logo Size
	$lzrestaurant_logo_top_padding = get_theme_mod('lzrestaurant_logo_top_padding');
	$lzrestaurant_logo_bottom_padding = get_theme_mod('lzrestaurant_logo_bottom_padding');
	$lzrestaurant_logo_left_padding = get_theme_mod('lzrestaurant_logo_left_padding');
	$lzrestaurant_logo_right_padding = get_theme_mod('lzrestaurant_logo_right_padding');

	if( $lzrestaurant_logo_top_padding != '' || $lzrestaurant_logo_bottom_padding != '' || $lzrestaurant_logo_left_padding != '' || $lzrestaurant_logo_right_padding != ''){
		$lzrestaurant_custom_style .=' .logo {';
			$lzrestaurant_custom_style .=' padding-top: '.esc_attr($lzrestaurant_logo_top_padding).'px; padding-bottom: '.esc_attr($lzrestaurant_logo_bottom_padding).'px; padding-left: '.esc_attr($lzrestaurant_logo_left_padding).'px; padding-right: '.esc_attr($lzrestaurant_logo_right_padding).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	// service section padding
	$lzrestaurant_products_section_padding = get_theme_mod('lzrestaurant_products_section_padding');

	if( $lzrestaurant_products_section_padding != ''){
		$lzrestaurant_custom_style .=' #feature-pro {';
			$lzrestaurant_custom_style .=' padding-top: '.esc_attr($lzrestaurant_products_section_padding).'px; padding-bottom: '.esc_attr($lzrestaurant_products_section_padding).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	// Site Title Font Size
	$lzrestaurant_site_title_font_size = get_theme_mod('lzrestaurant_site_title_font_size');
	if( $lzrestaurant_site_title_font_size != ''){
		$lzrestaurant_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$lzrestaurant_custom_style .=' font-size: '.esc_attr($lzrestaurant_site_title_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}