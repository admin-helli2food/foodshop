<?php

// Add new font group
add_filter('elementor/fonts/groups', function( $font_groups ) {
	$font_groups = ['FARSI' => 'فونت فارسی'] + $font_groups;
	return $font_groups;
});

// Add new fonts
add_filter('elementor/fonts/additional_fonts', function( $additional_fonts ) {
	$additional_fonts['Vazir'] = 'FARSI';
	$additional_fonts['Vazir_FD'] = 'FARSI';
	$additional_fonts['Vazir_FD_WOL'] = 'FARSI';
	$additional_fonts['Vazir_WOL'] = 'FARSI';

	return $additional_fonts;
});
