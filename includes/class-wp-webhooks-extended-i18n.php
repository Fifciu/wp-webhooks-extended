<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://fifciuu.com
 * @since      1.0.0
 *
 * @package    Wp_Webhooks_Extended
 * @subpackage Wp_Webhooks_Extended/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Webhooks_Extended
 * @subpackage Wp_Webhooks_Extended/includes
 * @author     Fifciuu <filip.jdrasik@gmail.com>
 */
class Wp_Webhooks_Extended_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-webhooks-extended',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
