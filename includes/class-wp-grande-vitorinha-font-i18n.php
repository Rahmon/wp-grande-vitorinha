<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Rahmon
 * @since      1.0.0
 *
 * @package    WP_Grande_Vitorinha_Font
 * @subpackage WP_Grande_Vitorinha_Font/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WP_Grande_Vitorinha_Font
 * @subpackage WP_Grande_Vitorinha_Font/includes
 * @author     Rahmohn <https://github.com/Rahmon>
 */
class WP_Grande_Vitorinha_Font_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-grande-vitorinha-font',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
