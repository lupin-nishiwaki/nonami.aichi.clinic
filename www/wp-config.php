<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aichiclinic_nonami' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY', '[r|r(#+G7!vxO-f!+8799XwlUw1~UwWen&+L~([/cb~[5v:f2TXY8j0|AL/8i]3Q');
define('SECURE_AUTH_KEY', 'uXK|6WZDNnY99y4V88C)Fm_|]7b2o3|O6q-5f4w~219I1K|(l/T_P2;j75~|iMa&');
define('LOGGED_IN_KEY', ';06H&FK18(yj~vZ*Ip#9OI&3N[YA1~n136CV68HrviXDza54GN_iv#+as#wkWm5u');
define('NONCE_KEY', 'sU0Vq-%7:FX#&j7P|jo#(HT8uuUL2w9y;!X4hmU((2:5tMZ2m*YYW)9P80A|-eZW');
define('AUTH_SALT', '_Y68O]Bpro0I!]Dh|21HFIc||O8C7Z5#j@w~&+L4@D62HPU-L~-Ae;Eo5/*5hwol');
define('SECURE_AUTH_SALT', 'Pun7ZuPLX/I5&LPsVM63/f:B|7+rs!!H[Nv8V[69_M+|iwdG#!b|J0|2oJMi~0H*');
define('LOGGED_IN_SALT', '4veM1s0ZfR*W*!8J6+iCL;b4Wu8e0L:VEPSa%D+XN5|o@]GltlrN4e2D3/MW~7g6');
define('NONCE_SALT', '@b~7B--_yaz5iRQyJj6qX*]%4-z/z6XFGe07J(2L&CW0s0yl-Zy9!7ew46%dZ93L');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XtJMD_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
