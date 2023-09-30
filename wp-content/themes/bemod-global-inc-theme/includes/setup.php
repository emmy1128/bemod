<?php defined( 'ABSPATH' ) || exit;

/**
 *	SETTING THINGS UP
 */

add_action( 'after_setup_theme', 'toongeeprime_child_setup2', 15 );
function toongeeprime_child_setup2() {
$logo_width		=	200;
$logo_height	=	200;
add_theme_support(
	'custom-logo',
	array(
		'height'				=>	$logo_height,
		'width'					=>	$logo_width,
		'flex-width'			=>	true,
		'flex-height'			=>	true,
		'unlink-homepage-logo'	=>	true,
		'header-text'			=>	array( 'site-title', 'site-description' ),
	)
);
}

