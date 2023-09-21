<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://metapixles.co.uk
 * @since      1.0.0
 *
 * @package    Mpx_domain_check
 * @subpackage Mpx_domain_check/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mpx_domain_check
 * @subpackage Mpx_domain_check/includes
 * @author     MPX dev <dev@mpx.co.uk>
 */
class Mpx_domain_check_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mpx_domain_check',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
