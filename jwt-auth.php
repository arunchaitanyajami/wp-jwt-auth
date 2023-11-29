<?php

/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/arunchaitanyajami
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       JWT Authentication for WP-API
 * Plugin URI:        https://github.com/arunchaitanyajami
 * Description:       Extends the WP REST API using JSON Web Tokens Authentication as an authentication method.
 * Version:           1.0.3
 * Author:            Arun Chaitanya Jami
 * Author URI:        https://github.com/arunchaitanyajami
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jwt-auth
 * Domain Path:       /languages
 */
namespace AJ;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'JWT_PLUGIN_DIR', __DIR__ );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
if ( file_exists( JWT_PLUGIN_DIR . '/vendor/autoload.php' ) ) {
	include_once JWT_PLUGIN_DIR . '/vendor/autoload.php';
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jwt_auth() {
	$plugin = new Jwt_Auth();
	$plugin->run();
}

run_jwt_auth();
