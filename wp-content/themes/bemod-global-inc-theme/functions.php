<?php defined( 'ABSPATH' ) || exit;

/**
 *	CHILD THEME FUNCTIONS
 */

define( 'PRIME2G_EXTRAS', true );
define( 'PRIME2G_CHILD', get_stylesheet_directory() . '/' );
define( 'CHILD2G_VERSION', wp_get_theme()->get( 'Version' ) );


/**
 *	GET PHP FILES THROUGH DIRECTORIES ARRAY
 */
$directories	=	[ 'includes' ];
foreach( $directories as $dir ) {

	$folder	=	PRIME2G_CHILD . $dir . '/';
	$files	=	scandir( $folder );

	foreach( $files as $file ) {
		$path	=	$folder . $file;

		if ( is_file( $path ) && pathinfo( $path )[ 'extension' ] === 'php' ) require_once $path;
	}

}


/**
 *	Add Files to the Queue
 */
add_action( 'wp_enqueue_scripts', 'prime2g_child_enqueues', 50 );
function prime2g_child_enqueues() {
	wp_register_style(
		'prime2g_child_css',
		get_theme_file_uri( '/files/child.css' ),
		array( 'prime2g_css' ),
		CHILD2G_VERSION
	);
    wp_enqueue_style( 'prime2g_child_css' );

	wp_enqueue_script(
		'prime2g_child_js',
		get_theme_file_uri( '/files/child.js' ),
		array( 'prime2g_js' ),
		CHILD2G_VERSION,
		true
	);
}


/**
 *	Login Page Queue: action added in parent
 */
function prime2g_login_enqueues() {

	wp_enqueue_style(
		'prime2g_login_css',
		get_theme_file_uri( '/files/login.css' ),
		array(),
		CHILD2G_VERSION
	);

}

