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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edge360d_medical' );

/** Database username */
define( 'DB_USER', 'edge360demo' );

/** Database password */
define( 'DB_PASSWORD', 'Fa9wf^s9PXk8' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '3D#G[F.y&UBExW&).#LJD%K,PW5a~mkxh9Ly=7C]ndF MC }Jqdf*h{AtX;7aN}6' );
define( 'SECURE_AUTH_KEY',  'lKsP#onR+WLFc(vevI|d4]=QH?Y$GcuH, W;a`:Z+jl<&U{%Dkx{v7YquzBU&C^c' );
define( 'LOGGED_IN_KEY',    '>%:m1p6^9^P><o}CZBQ&Z{|L6jy:QetN3D:gmqc`o7UjPS2tjcm^{{dTh;EDenV5' );
define( 'NONCE_KEY',        'B_&JA#Ni>YKw5V_aw1rtW3vY+=&})EXagRO~^eUd+!6*$nwB#CFTh01@Erm7!H)s' );
define( 'AUTH_SALT',        'pa@4T40W+lal_%ZTM?Gpa%PJ1WX]!~P,k(*HnJ:>980Q/asfc(z$]+=)~(?-ABl,' );
define( 'SECURE_AUTH_SALT', 'IsLF{m2|^^8mt}e2sCn{bFo^abx?Jb(xiYdC;Lo#J-<mY`O=4)a2fX{Bx9ucE41p' );
define( 'LOGGED_IN_SALT',   '7%i0^R:8B=}hP-u`RA<jIx`hH5V;#TDgA!CFL|:dTS7Dk&Y56`4Tq|%CVS5=-.L+' );
define( 'NONCE_SALT',       'Kc??P6=/0~FB@)XEm!|Jux&I<y]zG_JOj_FrQbKGHY!@j<(>[Thrh9H@(Yon0h*#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
