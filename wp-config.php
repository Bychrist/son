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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'son' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wfp1rrT)F@#?/%/t@%LKW,&DTxs9j0KHrw_<R$b` w<KsWzW_2d!_!yJ@QMd{G,|' );
define( 'SECURE_AUTH_KEY',  '8%L+8q)8fzqM07G.Q +0N}r ` ldn?0?L7d*BpAZ3;!M?v3!/p=esS%b[o zf<b(' );
define( 'LOGGED_IN_KEY',    'w/p`_Qanh`pUNgQg7hL.y]DG1q;*qbX|gA;~(QyuZ|W*ls}TO>=UV>|M^.R? #}~' );
define( 'NONCE_KEY',        'H{FmssfUK6P5kp`GS%HnE%tss=aIej{bax2(IJCu{?l^+f#64-@6Z2n^[B0=(dL@' );
define( 'AUTH_SALT',        '3u??~O*r4~u,g$ex$u@^j8_^C:d}~HG3^rfn 3@Va,Khji_vMyRrWum KziGpRmt' );
define( 'SECURE_AUTH_SALT', '#fb16d#Zj*r,U%<[gCzOKHJ;Az*[>7znw>;@c&;A0y999-=v1BEubEL;uFL!EyU#' );
define( 'LOGGED_IN_SALT',   'K3XuE>c1W+`;(_SIa4_i;Cn@RcM>2HEtr[eZl703<%%3.pJ@<g&K~>>]bg7!%5^q' );
define( 'NONCE_SALT',       'n0J%qzRL+(eT0{C7A*%0Tnut#N(CHEGra3D4m)@vNBcnS|fZ^w+4>Qc#.o.|Fp#}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'son_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
