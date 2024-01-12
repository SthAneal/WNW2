<?php
$environments = array(
	'local' => 'localhost:3000',
	'development' => '192.168.121.',
	'staging' => '',
	'production' => ''
);

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

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}


if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
