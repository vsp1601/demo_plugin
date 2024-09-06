<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.vsp.com
 * @since             1.0.0
 * @package           Shortcode
 *
 * @wordpress-plugin
 * Plugin Name:       helloworld
 * Plugin URI:        https://print
 * Description:       Demo Plugin
 * Version:           1.0.0
 * Author:            VSP
 * Author URI:        https://www.vsp.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shortcode
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SHORTCODE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-shortcode-activator.php
 */
function activate_shortcode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shortcode-activator.php';
	Shortcode_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-shortcode-deactivator.php
 */
function deactivate_shortcode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-shortcode-deactivator.php';
	Shortcode_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_shortcode' );
register_deactivation_hook( __FILE__, 'deactivate_shortcode' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-shortcode.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_shortcode() {

	$plugin = new Shortcode();
	$plugin->run();

}
run_shortcode();
