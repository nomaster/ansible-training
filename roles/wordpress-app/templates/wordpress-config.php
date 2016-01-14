<?php

define('DB_NAME', '{{ blog.db_name }}');
define('DB_USER', '{{ blog.db_user }}');
define('DB_PASSWORD', '{{ blog.db_password }}');
define('DB_HOST', '{{ hostvars['db']['ansible_eth1']['ipv4']['address'] }}');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_';
define('WP_DEBUG', false);

define('AUTH_KEY','{{ lookup('password', 'wp_auth_key', length='64') }}');

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . ':8080' );

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
