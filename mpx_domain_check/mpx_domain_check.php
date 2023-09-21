<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://metapixles.co.uk
 * @since             1.0.0
 * @package           Mpx_domain_check
 *
 * @wordpress-plugin
 * Plugin Name:       MPX Domain Check
 * Plugin URI:        https://metapixels.co.uk/plugins/domain_check
 * Description:       MPX Domain Search WordPress plugin is typically designed to help website owners and users find available domain names for their websites.
 * Version:           1.0.0
 * Author:            MPX dev
 * Author URI:        https://metapixles.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mpx_domain_check
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
define( 'MPX_DOMAIN_CHECK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mpx_domain_check-activator.php
 */
function activate_mpx_domain_check() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mpx_domain_check-activator.php';
	Mpx_domain_check_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mpx_domain_check-deactivator.php
 */
function deactivate_mpx_domain_check() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mpx_domain_check-deactivator.php';
	Mpx_domain_check_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mpx_domain_check' );
register_deactivation_hook( __FILE__, 'deactivate_mpx_domain_check' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mpx_domain_check.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mpx_domain_check() {

	$plugin = new Mpx_domain_check();
	$plugin->run();

}
run_mpx_domain_check();
