<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lk.linkedin.com/in/hussain-t
 * @since             1.0.0
 * @package           Gutenberg_Paragraph_Selection_Length
 *
 * @wordpress-plugin
 * Plugin Name:       Gutenberg Paragraph Selection Length
 * Plugin URI:        https://github.com/hussain-t/gutenberg-paragraph-selection-length
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hussain Thajutheen
 * Author URI:        https://lk.linkedin.com/in/hussain-t
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gutenberg-paragraph-selection-length
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
define( 'GUTENBERG_PARAGRAPH_SELECTION_LENGTH_VERSION', '1.0.0' );

/**
 * Enqueues editor assests for selecting number of paragraphs for Gutenberg.
 * 
 * @since    1.0.0
 */
function gutenberg_paragraph_selection_script_assets() {
    wp_register_script( 'gutenberg-paragraph-selection-script', plugins_url( '/js/gutenberg-paragraph-selection-length.js' , __FILE__ ) );

    wp_enqueue_script( 'gutenberg-paragraph-selection-script' );
}

add_action( 'enqueue_block_editor_assets', 'gutenberg_paragraph_selection_script_assets' );