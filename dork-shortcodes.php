<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Plugin Name: Dork Shortcodes
 * Plugin URI: http://www.themedork.com/plugin/dork-shortcodes
 * Description: A super awesome collection of WordPress shortcodes built by ThemeDork...
 * Version: 1.0.0
 * Author: ThemeDork
 * Author URI: http://www.themedork.com
 * License: GNU General Public License v3
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

/**
 * "Dork Shortcodes" Copyright (C) 2014 ThemeDork (email: dork@themedork.com)
 *
 * Dork Shortcodes is free software: you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option) any later version.
 *
 * Dork Shortcodes is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with the
 * Dork Shortcodes plugin. If not, please see http://www.gnu.org/licenses/gpl-3.0.html
 */


// Dork Shortcodes plugin definitions
define( 'DORK_SHORTCODES_DIR', dirname( __FILE__ ) );
define( 'DORK_SHORTCODES_URI', plugins_url( '', __FILE__ ) );
define( 'DORK_SHORTCODES_SUPPORT', 'http://help.themedork.com' );
define( 'DORK_SHORTCODES_VERSION', '1.0.0' );

/**
 * Prepare the plugin for translation / localization. This will allow users to the
 * ability to translate strings into their respective languages.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_locale' ) ) {

	function dork_shortcodes_locale() {

		// Register our new text domain, make it unique!
		load_plugin_textdomain( '__scLang__', false, DORK_SHORTCODES_DIR . '/lib/lang' );

	} // End dork_shortcodes_locale()

	// Run our translation function
	add_action( 'plugins_loaded', 'dork_shortcodes_locale' );

} // End if


/**
 * Prepare our plugin for setup. Include any necessary files, instantiate our primary
 * class and get things up and running.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_setup' ) ) {

	function dork_shortcodes_setup() {

		// Load our general plugin functions
		require_once( DORK_SHORTCODES_DIR . '/lib/functions.php' );

		// Load our shortcode configurations
		if ( is_admin() && file_exists( DORK_SHORTCODES_DIR . '/lib/config.php' ) ) {

			require_once( DORK_SHORTCODES_DIR . '/lib/config.php' );

		} // End if

		// Setup the Dork_Shortcodes class
		if ( is_admin() && ! class_exists( 'Dork_Shortcodes' ) ) {

			// Include our shortcodes class
			require_once( DORK_SHORTCODES_DIR . '/lib/classes/class-dork-shortcodes.php' );
			$dork_shortcodes = new Dork_Shortcodes();

		} // End if

	} // End dork_shortcodes_setup()

	// Run our setup function
	add_action( 'after_setup_theme', 'dork_shortcodes_setup' );

} // End if