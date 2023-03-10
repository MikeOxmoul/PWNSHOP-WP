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
define( 'DB_NAME', 'd6000sd415965' );

/** MySQL database username */
define( 'DB_USER', 'd6000sa374627' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Karulusikastass421' );

/** MySQL hostname */
define( 'DB_HOST', 'd6000.mysql.zonevs.eu' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         't6haAXyZyfi7nghKt2ZmVH6o9WxS6YhG6FKwfY5N0pvlI9ap3U5aFRhC7nAXwwo8');
define('SECURE_AUTH_KEY',  'AGAQDa1VR3M8ghKDybnldXrrSUzdYNxlw1iU4rmhxwoPsKVKZ1vpUaz2by3aEGn5');
define('LOGGED_IN_KEY',    'pelTv6XCVuagfT3GAwdG7imRxyuTdt0d5YmrLz60uG55JU1wR0ALRoiCjv24QI0y');
define('NONCE_KEY',        '7BFk6ECrA8i1k8JWv0EvuswNciRt3zgeRavqojMYuF0X9iZsdWEabVLLn5Fw9EHn');
define('AUTH_SALT',        '9lgMFiuEyXxHAtn34ABLfcRTqlNHXdcEBVKRBD1GySqfWnlcSPE05T2qvZJSkIE8');
define('SECURE_AUTH_SALT', '73XeV6yoYHQPlW089jgT3osqHdN43oWmI6yePDAPuhcyTx4h2wUWafAcW3WkbC2k');
define('LOGGED_IN_SALT',   'sak7tPs9qSunPQp8FOK0Cllmz5fGJG1TvgAsVVDxOGtxn83dOXXnMtB3urM5Sl1b');
define('NONCE_SALT',       'cx6JIVjunoFD4SmzWlnhyydONuyqOCWT0Sf8CKn5OVNfTuxMS2BkhLeDYUjtT6hS');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', false);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'y4up_';

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


define('WP_ALLOW_MULTISITE', true);


define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'tkepandimaja.ee');
define('PATH_CURRENT_SITE', '/blogi/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
