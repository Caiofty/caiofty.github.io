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
define( 'DB_NAME', 'caiofty.fi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'h- %5$+^%~8!tO7a@pR&Ip#mww%qH-0lH%*@T7suSy956j`^>_G@$Ix;W^BXS2mv' );
define( 'SECURE_AUTH_KEY',  ' qqm.3aWH+(TZ7Da_xv~*~50cgQyF>GCNMe6._g$3zn&/7T`2 oj6+sgHE^s>f2e' );
define( 'LOGGED_IN_KEY',    'orLNX8QHf@y2yM|u~+-+p{])tHkkgQTIXf~R,b`/0SM6L}BL-togCe!/P?yT~sAF' );
define( 'NONCE_KEY',        '$nDOB=(ivvGsSQ/W@,W6A{vT.Mt:1?LK%x+cj&u>?p]e]-@=_BM3R_{ 7%=S/{pJ' );
define( 'AUTH_SALT',        'ac<|P85oYO(gh:`&Ww%tX)O)+<Q,7H8hn!|<~Et&m2GTn+nrX!2QPT[4h`1Au@E@' );
define( 'SECURE_AUTH_SALT', 'uz`|.S<UGj6</#:#zhf%dkHd<W]k(wY]NYm#ft>f}B:M*$3bB6Z35ew>Dh-aEQ|O' );
define( 'LOGGED_IN_SALT',   '>PC F*%^&BvMPU*hoqKlqzPwkD.#L.rz#kq`4xX;T Vr--f!TG1@y*i16cE`l<Qf' );
define( 'NONCE_SALT',       'q]FXZg/fgp-63oi 1WM5D#%lVV+CX DZ7YnlyFH_x)~kN$1L6^_/k_8iiz>4`FO`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
