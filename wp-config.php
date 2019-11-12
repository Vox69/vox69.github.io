<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adminlol' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(:Q@)Yy0[/b#ycyPN*j(C6nSmiv9bKM 9 QA #<.8{%pWlz3#BLv(S>IuC=-s=>k' );
define( 'SECURE_AUTH_KEY',  '^C$]UJC~h8T4W5M{cqfN<h$BB1*~NBBF2go0!#/(7xoa@wq5U.P>Ro0 E$ujr`.]' );
define( 'LOGGED_IN_KEY',    'q_%R$8Hw`*/{28qTZr80gFQ;;4xs&H0$4>(exT~];YZuWDse./Gbv[*NKqLE3,%7' );
define( 'NONCE_KEY',        '$Z?I|tAXA*rym^M7fO8%JzE0+jxM(VRw$.@C2w {hyOK4lbD<zUcSIE6Et.Zr8Zr' );
define( 'AUTH_SALT',        'yh2vv74f,LoKF]A1`qMOlQL;sgUb::+Qv#Le[t@W3z~-zC|_K<7shv9nqT :hB)^' );
define( 'SECURE_AUTH_SALT', '#=w~Kb9kIfh`v,zs39CBz-VJ}Y_>1X+i^-ry$F!RUedb }jCjP/JycFtOBfxK?Ub' );
define( 'LOGGED_IN_SALT',   'k;d%vJk#nZH4(meNzCUE{WYuIUBZFTFxroB]}Hk!|<|@O1s eN6Sn)!^;1y}7}GY' );
define( 'NONCE_SALT',       '-c/4 j_@H`)fu~@J}8Gk>9Z9m?I;U*]DKTckNzp}Zf(adhE6Ccwo!%@iu7H6sDEa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
