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
define( 'DB_NAME', 'wordpressnew' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g+~PsYcmY=Q FUbRJ)A(>1u2TC<OH|v-,32h_Odw57OX2UR]b#}gw~%Q1DP3+SdV' );
define( 'SECURE_AUTH_KEY',  'j_=RF7yx>iHJazABj|C3Je]~(lkLr?{;YS_`h.9_F_O(H.OAuZ()B.2H,/LO!4iX' );
define( 'LOGGED_IN_KEY',    'WDU9i^[V%qo9Y!c?!-8 ixI*_Sx@4$%0eV;I( 2G#-apXG-;=O@}TS}2qH.5N;Tw' );
define( 'NONCE_KEY',        'rT6{p[pyK;FUNPCl*q`2x<yBD!=qQ63fMI;e-f(a*p94M.2uN2UnwUax-UwvmaWE' );
define( 'AUTH_SALT',        'p;P,ei%X@|bU{,}xZ<q6HCbMT.]XNJUTeP.<4dA`>GVr.y Rv/+g%A+<=:EYN }<' );
define( 'SECURE_AUTH_SALT', 'xsPrHOk8KZrY|G)gE@a))Vr Hb:w}QNuBv;l#fg-Kp??HH|kd/.2}usKtTo<5Q r' );
define( 'LOGGED_IN_SALT',   '+7Ch.qq)xftR{N5ulNYb=k{U0&[a,0A13wsyz1Yrv)6fuCiDikh04HzaC=twe3b4' );
define( 'NONCE_SALT',       ',V15|g;uPq5 vc+gZ-Q~5yJqCly~vhu:<y4Ibux>r;|Z[cz(}4RENjQ<o?)rp<*r' );

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
