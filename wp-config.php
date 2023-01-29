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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ')sf+GGcV5W.;LnxW]7/o80Va0c}2}KLJ]7`z*4TH|>e-,wt*a=C~M oo*3`lpFB.' );
define( 'SECURE_AUTH_KEY',  'llXY-Y_9gmZuJsGZHB`B/Z!~!*D*6F6&uA)Uv;_x=(p$GQA:(d/bv$GY|EU_,%z7' );
define( 'LOGGED_IN_KEY',    '%m< g(,vDEODGev3fPz/?;rUM;IH30f6OvWdB*-lP#2nSxob/zok,<k#4Y,2%ckI' );
define( 'NONCE_KEY',        'Q)~rx&2{yQDH|`;VxG[|[4ig[**f@Mf~<R+KI4.!B;y>)BTC*O@.==WKT/HOYE?:' );
define( 'AUTH_SALT',        'F:$^#h/j&yqJZ%{WD7,2:%(+g~3-Xm8gRI6O42;1Z1<{`Uk63:K.i`tJ{zr&3F,5' );
define( 'SECURE_AUTH_SALT', 'A8o<WeuS5**S,4spQa7wAPg@KDW_tWbt(t*.1xXdKhaIziLA@B(Ih:[PP{j9v%?_' );
define( 'LOGGED_IN_SALT',   '5J0|mv1Vc.!+$;uhQ(70R-*iQK|}TQ=<RPnYY]<hiC2^imE5#%Dc n7~|jn!WFbb' );
define( 'NONCE_SALT',       'aoEp#MA~cF[&>A^{s4M@RF+E-Xq4G}$6hFtIFB39rHt^D`3g,@/*+(}_kMVU:Hf9' );

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
