<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Functions.php
 *
 * General plugin functions, some file includes and some formatting fixes.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */


/**
 * Include any additional files we may need to add a little extra functionality to
 * this plugin.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_file_includes' ) ) {

	function dork_shortcodes_file_includes() {

		// Register and enqueue our scripts and styles
		include_once( DORK_SHORTCODES_DIR . '/lib/enqueue.php' );

		// Build an array of font icons for icon select field
		include_once( DORK_SHORTCODES_DIR . '/lib/font-icons.php' );

	} // End dork_shortcodes_file_includes()

	// Run the function on init
	add_action( 'init', 'dork_shortcodes_file_includes' );

} // End if


/**
 * Format our shortcodes to avoid conflict with the paragraph and break tags added by
 * the WordPress editor. This will strip those tags from only our shortcodes as they
 * are not needed.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_formatting' ) ) {

	function dork_shortcodes_formatting( $content ) {

		// Define the formatting tags to be stripped
		$tags = array(
			'<p>['    => '[',
			']</p>'   => ']',
			']<br>'   => ']',
			']<br />' => ']',
			']<br/>'  => ']',
		);

		// Filter the content and remove unwanted tags
		$new_content = strtr( $content, $tags );

		// Return our newly formatted content
		return $new_content;

	} // End dork_shortcodes_formatting()

	// Now we need to add our content filter to several points
	add_filter( 'the_content', 'dork_shortcodes_formatting' );
	add_filter( 'the_excerpt', 'dork_shortcodes_formatting' );
	add_filter( 'widget_text', 'dork_shortcodes_formatting' );

} // End if


/**
 * Cycle through each of the available shortcodes and begin registering them with
 * WordPress one by one. This should also make extending the plugin much easier
 * down the road.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_register_shortcodes' ) ) {

	function dork_register_shortcodes() {

		// Only register our shortcodes outside of the admin
		if ( ! is_admin() ) {

			// Rather than creating some long list of includes, lets just load them
			// all at once.
			foreach ( glob( DORK_SHORTCODES_DIR . '/lib/shortcodes/*.php' ) as $filename ) {

				if ( $filename ) {

					include_once( $filename );

				} // End if

			} // End foreach

		} // End if

	} // End dork_register_shortcodes()

	// Run the function on init
	add_action( 'init', 'dork_register_shortcodes' );

} // End if