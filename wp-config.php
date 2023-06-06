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
define( 'DB_NAME', 'camp' );

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
define( 'AUTH_KEY',         '8WZIR;Bm+a0dKeN`og|4(-N>b}f&E(&=P1E!vIvcM2l,/@bM<Y1)j*4t/<IK@W~b' );
define( 'SECURE_AUTH_KEY',  'bGdh8yj-g;z(]37#!|[i9{1P;@:2Y)0{Hw:(c>o`YU,gd5QRhPV)?QS-|3p`t.Yl' );
define( 'LOGGED_IN_KEY',    'AY^qA]1Y[/.M( *KT1HtG9>%){pLQH/N7{2P/sa2{ry8su3+?L0~{D=/a*8?.~1x' );
define( 'NONCE_KEY',        'eX=70DQUMOZFGi53,jdI~hPY+J/*~b/|qa)i?S:}czM_!cBwBF`-[~:p+/(t(Mv(' );
define( 'AUTH_SALT',        ' pV8U=*GEG7qKv6Gr+*MC(iv^(Yidn)m;P1Amr@s|)&Q,}mAi.#iw15tyYVh1,|7' );
define( 'SECURE_AUTH_SALT', '|bdX|]t1PK{s]v(RDau4At-e{5@qFh4k(gr=t3]8^snM9_Np;u1w>~Nq;Q0e5)rZ' );
define( 'LOGGED_IN_SALT',   '~bzu9T2R:= _*bWom,}k!rT$dc9vz>xsX(:u!]oz(!YzMJ7QnmAg46?ph[XOsF#C' );
define( 'NONCE_SALT',       'Z/(#9Mj;9c?z@YTbzL qs12]zL|@FK+)`]/zNgWbDR*R,r(y*~bYx `c5+O<s^Eq' );

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
