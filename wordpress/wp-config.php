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
define( 'DB_NAME', 'login_db' );

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
define( 'AUTH_KEY',         'Td5hH{2D*`5(*oJcNI@.?Yrt?p${zwUso{u8,o+mlfcr0Q!wcZ)2%[oF;+qH4a*g' );
define( 'SECURE_AUTH_KEY',  '#]$|n)(*->E&UFmlt@x$OoOoB{F:nNZip1wVOa)gfZnZAk6>E9nql[9O9$ i#4l%' );
define( 'LOGGED_IN_KEY',    '#e,vpJQ)c8.2UzWLqK`Z6!$R,EFt#<3kq7{^2Mb<@?1dTKF(plH/#(+fMvY^>sbK' );
define( 'NONCE_KEY',        'U_#@H@SUSF /M}-<[=Roe/>Z 0WeWihcZ`eTuFfQ4o`LERa4S7!i0tyhw+Xc2JCV' );
define( 'AUTH_SALT',        'RR+N]A9M]]{pCpKVZgk6G9L0f>D4?fuWKpl%oEBWFm0MX,4o1vV9n{W#:b+!soF*' );
define( 'SECURE_AUTH_SALT', 'fuuIaO1MIg&Q3E{{P9IUtf;WxE9Qej%shY_esJSYZ:J7I-OD0mHy^[eK(.30DRv;' );
define( 'LOGGED_IN_SALT',   'zp3DP+<0^R_s7ky-NX~H?pIS}[D~ag|lu}I?..x|jGWy_JT*^}<o7SmsI:!W8rW?' );
define( 'NONCE_SALT',       '0-KFjTaMeq<Pk Qn54Y|p6Ij|$S]exZSqa4q~}}8f>P#On~u-!|BL(I!^|[W7B-S' );

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
