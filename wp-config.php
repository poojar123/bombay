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
define( 'DB_NAME', 'bombay' );

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
define( 'AUTH_KEY',         ':5mYheyb,/?2mcaHcO,wuty7;=gvyypc`YHt}`k-om{tqeOtccmBOSGM@@uL^cBn' );
define( 'SECURE_AUTH_KEY',  '=V;5gLg5n.i{xmsh$QR tY]S,&0Rh%0NmSVe4|Uu2v0T#ptTAe3>|^)XnI@HlU=]' );
define( 'LOGGED_IN_KEY',    'Z!QC<^9L`kn:xrib!1z&8$o/VruR,BfyJ;7eoL*K.~j:ygFc406P.?Cs4sarUqjk' );
define( 'NONCE_KEY',        'L+H[HX4hZ&UQ:d[3#$Bk6~UjN8*v;.!?>KYjUGJ=;=kD.}<`a{w&64_er)%wxX<>' );
define( 'AUTH_SALT',        '(#5!?)C-0?K$)g7XP8?=VZw8Rr78*iiTA!8v5Mq}2/Oyj~Kj|Sg!L*?&w+&FF_yi' );
define( 'SECURE_AUTH_SALT', 'lE|f&2(45#[^&?]^;[b=YSd {)-R@1qGjaF|n?0{Za7ztl 11cD]*xWsRDlykV.F' );
define( 'LOGGED_IN_SALT',   'sU|<ct +}Os hdcyFblkf*_FI&]x:Xw0L6X&A^mkt[-?~;v*>;K</@eN0m|{pN+/' );
define( 'NONCE_SALT',       'h-LD/mqK<~E{vh&$RzZV27,g2L!DB{W,(987@aR(TlA.rzgH!wB#K4,s&c;YkX4W' );

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
