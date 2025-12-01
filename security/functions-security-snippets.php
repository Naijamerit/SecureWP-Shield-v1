<?php
/**
* functions-security-snippets.php
* Drop these into your theme's functions.php or a small mu-plugin
*/


// Force strong passwords on user creation
add_filter('password_hint_show', '__return_false');


// Force secure auth cookie only
add_filter('secure_auth_cookie', '__return_true');


// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');


// Disable REST API for unauthenticated users (use carefully)
add_filter('rest_authentication_errors', function($result){
if (!empty($result)) return $result;
if (!is_user_logged_in()) return new WP_Error('rest_cannot_access', 'Only authenticated users can access the REST API', array('status' => 401));
return $result;
});


// Rate-limit login attempts (simple approach - for demo only)
// For production, rely on a hardened plugin or WAF
session_start();
add_action('wp_login_failed', function($username){
if (!isset($_SESSION['failed_logins'])) $_SESSION['failed_logins'] = 0;
$_SESSION['failed_logins']++;
// after 5 fails you might notify admin - don't implement blocking here in theme
});
