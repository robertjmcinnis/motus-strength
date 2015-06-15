<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'm0202397080650');
define('DB_NAME', 'motusdb-data');
// define('DB_NAME', 'motusdbdata');

/** MySQL database username */
// define('DB_USER', 'm0202397080650');
define('DB_USER', 'root');
// define('DB_USER', 'motusdbdata');

/** MySQL database password */
// define('DB_PASSWORD', 'BR.O.X0KmC9');
define('DB_PASSWORD', 'root');
// define('DB_PASSWORD', 'Stronglegs23!');


/** MySQL hostname */
// define('DB_HOST', 'm0202397080650.db.2397080.hostedresource.com:3308');
define('DB_HOST', 'localhost');
// define('DB_HOST', 'motusdbdata.db.9444595.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cO-T6mrzf 8k4X9TD Kx');
define('SECURE_AUTH_KEY',  'g7HcJBHf+75DXWjHZYg)');
define('LOGGED_IN_KEY',    'QayMwfCfpyUy+69y52-Z');
define('NONCE_KEY',        'r0L9CUX-%KIF0gA!n5Z#');
define('AUTH_SALT',        '%Zy9mI=A4yIcJDChJtc0');
define('SECURE_AUTH_SALT', '=D$z1h%vmI%$@jVj%W1Y');
define('LOGGED_IN_SALT',   'G%Er7W#z9afU PxDFURB');
define('NONCE_SALT',       '67*GW6zRr@JUpn60Y6NE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_k2bxp00xqc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');