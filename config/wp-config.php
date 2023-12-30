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

$environments = array(
	'local' => 'localhost:3000',
	'development' => '192.168.121.',
	'staging' => '',
	'production' => ''
);
// Get the hostname
$http_host = $_SERVER['HTTP_HOST'];

foreach ($environments as $environment => $hostname) {
	if (stripos($hostname, $http_host) !== FALSE) {
		define('ENVIRONMENT', $environment);
		break;
	}
}

if (!defined('ENVIRONMENT')) {
	define('ENVIRONMENT', 'production');
}

define('DB_NAME', 'wnw');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db:3306');
define('FS_METHOD', 'direct');

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
define('AUTH_KEY', '53d43ab1c6ee5f90c7039a3638f3f6b58ac9b0ce');
define('SECURE_AUTH_KEY', 'f1d74aa0575c953bd4407e2a03e34aaf62c1e8f4');
define('LOGGED_IN_KEY', 'f5fe8618143b2f693067e37ff298910ec49bb788');
define('NONCE_KEY', '37e70ddef1fda910fef316f5265ced43ed494622');
define('AUTH_SALT', '55627f759abfcb185e41e21e677974b0f266257e');
define('SECURE_AUTH_SALT', 'a89ad3de97f933aa1e2c8a81f0ddc6427ffa9b37');
define('LOGGED_IN_SALT', '5341a1289477d74ce4559c96bc0e946e196a8753');
define('NONCE_SALT', '37253cb68f63f636a23b89389e50fc1996a432ff');

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


// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
