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
define( 'DB_NAME', 'hai14966_haitamchin' );

/** MySQL database username */
define( 'DB_USER', 'hai14_haitamchin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Thuy2809!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ':M@[rjKim9kgL2dJ#iZJu++K(pX6~x4LT0+@H2r2w|N2e43Q/oaA7a#|921cOkzY');
define('SECURE_AUTH_KEY', '@EAei4l%jC02KZI0OOZ0l5z74u@lY*t35+TMM2Unz4_e0/]!!*o4N3M2@nH!P3ZQ');
define('LOGGED_IN_KEY', '3(rZJ%%[83K#F#B5)-E1:dg07T_Gs5F/v(zEDD4X9A3%(22)]e#D+-@5M&;+8qz4');
define('NONCE_KEY', ']NRvTUsq|v*#1NJss5662mGR)0[6ivHv-C+5e0+3N09750#f4sT+6-fg&9G+:wam');
define('AUTH_SALT', '8Qsgh-ROt(6:(7A65aCP_A7H75hxFv06Y_9Q7RQ@62i+B46Ky;|)i%7YZN|@*#la');
define('SECURE_AUTH_SALT', 'O4O;1F7#vG0rQv68!FV!!(%:6Xz/S_F:%(UCMdT5+*2+baat47r9WXi@Z!fi7U#1');
define('LOGGED_IN_SALT', 'XA/9a]u8x0~O884UJ|8I5192O*6m])d3T86NJFRt36h)@|1]!2|8:)P@#Za67R75');
define('NONCE_SALT', ';02Y+|ZSmK(r2q#*2NNSoj53-D:1M9&&FSTUq7xU96y!x]Xo(2W1#8n12]*/%T3]');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '';


define('WP_ALLOW_MULTISITE', true);
define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
