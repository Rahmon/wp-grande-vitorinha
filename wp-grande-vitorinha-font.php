<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Rahmon
 * @since             1.0.0
 * @package           WP_Grande_Vitorinha_Font
 *
 * @wordpress-plugin
 * Plugin Name:       WP Grande Vitorinha Font
 * Plugin URI:        https://github.com/Rahmon
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Rahmohn
 * Author URI:        https://github.com/Rahmon
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-grande-vitorinha-font
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-grande-vitorinha-font.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_grande_vitorinha_font() {

	$plugin = new WP_Grande_Vitorinha_Font();
	$plugin->run();

}
run_wp_grande_vitorinha_font();
