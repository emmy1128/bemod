<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bemoglbl___02938gckxnclmx' );

/** Database username */
define( 'DB_USER', 'bemd2ngprym_90j' );


/** Database password */
define( 'DB_PASSWORD', 'pwderi*9ejJHApm3' );

/** Database hostname */
define( 'DB_HOST', 'helen40297.ipagemysql.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5yh3SD1UYRBG7{m^edeOgS9J$GV<.TX![):x.|)+59_},r48!m?zXc`=)qI-AymJ' );
define( 'SECURE_AUTH_KEY',  ',^-`l$>BB#*zzD}W%K(CNO!~-pB`eBNql%KfXA)20>[@TiszwTzXemQK:MxlYNt:' );
define( 'LOGGED_IN_KEY',    'y~<Wo9&Dm=]k6Rt5BiNr:fGsbI3{@oJ{9vJ]yZqhf5 r]8J?_$<g-=1l&F.k/*,D' );
define( 'NONCE_KEY',        'O[^72b8K6h!%h>|g58D5~1@eQJnE$}s#e.H5(8H,ZfD6o@_A%<eG%p-l(xbeCxFZ' );
define( 'AUTH_SALT',        '#{EJp3P18}u7,A_c=`(h]NynetXB,I36ir7NnTnx2#r(f0Fi@1v.WikG_MU{Sj6B' );
define( 'SECURE_AUTH_SALT', 'Z10_AN|SDfW8lr|4n%Xsv8NsBz.*BT5Jf01_L5P{=6O2XkW.]hYgqWQLudJpkQ)>' );
define( 'LOGGED_IN_SALT',   '-M|O4s!Ps/?o_!9aGBZtHOM:smQ~SE6;xp6NF>MyA4|Fk?3@Jq<YI3}8PbZ^#dXF' );
define( 'NONCE_SALT',       '+PnMLG{!f.8 (ir:O -!@)]5rdUkEVvC&Du8=eP=/y.d2T<pbh[uF3PTjY)!3+B#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bgi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

//define( 'WP_DEBUG', true );
//define( 'WP_DEBUG_DISPLAY', true );
//define( 'WP_DEBUG_LOG', true );

define( 'WP_MEMORY_LIMIT', '512M' );

/* Add any custom values between this line and the "stop editing" line. */


define( 'WP_HOME', 'https://bemodglobalinc.com' );
define( 'WP_SITEURL', 'https://bemodglobalinc.com' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
