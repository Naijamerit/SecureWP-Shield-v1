<?php
/**
* wp-config-security-sample.php
* Drop this into your project as a starting point. Move this file one level above webroot
*/


// ** MySQL settings - use secrets manager in production ** //
define('DB_NAME', 'database_name_here');
define('DB_USER', 'wpuser');
define('DB_PASSWORD', 'change_this_strong_password');
define('DB_HOST', 'localhost');


// Change table prefix to something random (lowercase letters + numbers + underscore)
$table_prefix = 'as92_';


// Keys and salts - generate fresh for each site
define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
define('AUTH_SALT', 'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT', 'put your unique phrase here');
define('NONCE_SALT', 'put your unique phrase here');


// Disable file editing from dashboard
define('DISALLOW_FILE_EDIT', true);


// Disable plugin and theme updates from non-CI sources in production
// (Only allow via deploy pipeline)
define('AUTOMATIC_UPDATER_DISABLED', true);


// Force SSL for admin pages
define('FORCE_SSL_ADMIN', true);


// Hide errors
ini_set('display_errors', 0);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);


// Set memory limits sensible for small businesses
define('WP_MEMORY_LIMIT', '256M');


// Prevent directory browsing
if (!defined('ABSPATH')) define('ABSPATH', dirname(__FILE__) . '/');


/** End of security sample **/
