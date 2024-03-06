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
define( 'DB_NAME', 'tuongvi' );

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
define( 'AUTH_KEY',         'X=gI8L]r9;I8azXS3D0H1mBE2]}qSq?~vYhR5vm|BuCE6H1]2d[u~<+e;h^sNY^_' );
define( 'SECURE_AUTH_KEY',  'ekLek+*QGfvqQL3=3jrfLm@72*h4kQY0]jPRF)!TAthjj=!J;!^Jpc$c9@p{8wOJ' );
define( 'LOGGED_IN_KEY',    'pRF2{7`qQuoCppZ+)iZB|o^|oT%uXA>v%|ON9NEf/58W}qNwzXzXwR>1W*wJivF5' );
define( 'NONCE_KEY',        '.GX0mKL9ke%J=4Z6$eQkE)C#4xd_}xX#sRb*==V{z3I+EQ+7A]!:K{/MA_U|[%jZ' );
define( 'AUTH_SALT',        '3@aMahPY6^:Bf//xurQ0!aU!<Em79CZ&?J.p1i%~p*cWOpk]6cKyh4!p`:dGnSf5' );
define( 'SECURE_AUTH_SALT', '!QZi),0 ^NJ(x[1 !%S6s6#I@|A(6q:qJ?5rfuh-3v4&N#3YWHD6s)4yO^j=UDYE' );
define( 'LOGGED_IN_SALT',   'oIW<D.tvb/h}QVB_%$rAj{w#uSMJD+MEtUT$ 89L;D?09a{2F}NAp/}T)[rb{-KH' );
define( 'NONCE_SALT',       '!2ZE1|5u[zJX~#g^Nnrr>2B4AjaR5];{o/SZU~# ty<zmzP0MYvZi%*wJFJsjIgR' );

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
