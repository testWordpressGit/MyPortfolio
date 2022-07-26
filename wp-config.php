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
define( 'DB_NAME', 'my port' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'iwwc6xxi#HPi,N5{mPz@(N|7oEx6MwH*<nlOd$%=.cB0PfpdZYO3UtD;5^z%7box' );
define( 'SECURE_AUTH_KEY',  'sl]D?$Tv#/vPO1My,HBsqY1(AJ}Ootx4`>k+?xMA/TDoHT78hn%I9+xs~o5Z.yp#' );
define( 'LOGGED_IN_KEY',    '3QPqBAe[>*}3)FG&vG/H(So]w)M}28=L?*{%ogXEq;q}u2Or.|Y%C:>wmhvTP|t~' );
define( 'NONCE_KEY',        'z$gnt{jUFA|aMio9ll}z_c| 2p)9He]u3X%T*:X4uDFQ]e2&O5[zirDqYS+$8fsi' );
define( 'AUTH_SALT',        'I?3E/g%{Xkx*5r+IjnRM=yulbB=st7&Had!x7O;sYwu@qfP&$Px))^/#tKuV)KNG' );
define( 'SECURE_AUTH_SALT', '(fskBGb{,qxmHof.ER i7z?k=(A?{+Dhmbq]H!Fq7*GN~*zv[7^^^8T7%+eQz68X' );
define( 'LOGGED_IN_SALT',   'kI/H1z#$jDn7Z<9G&d4+e/q=vw4P4]YuYafme)*#I9&RVKrQ~G3wWJ*<g/D.]%~g' );
define( 'NONCE_SALT',       'n#F<aV#-2.FY[h+/BM8mHH+U]1sWQv43U>bnj(4om51`yb^|jMS}CFDowvt>go2O' );

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
