<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Accordion.php
 *
 * Lets build the accordion shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_accordion' ) ) {

	function dork_shortcodes_accordion( $atts, $content = null ) {

	} // End dork_shortcodes_accordion()

	// Register our accordion shortcode
	add_shortcode( 'accordion', 'dork_shortcodes_accordion' );

} // End if


/**
 * An accordion just wouldn't be an accordion without some content, so lets go ahead
 * and setup the shortcode for our accordion items. The user can add as many items to
 * their accordion as their little heart desires.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_accordion_item' ) ) {

	function dork_shortcodes_accordion_item( $atts, $content = null ) {

	} // End dork_shortcodes_accordion_item()

	// Register our accordion items shortcode
	add_shortcode( 'accordion_item', 'dork_shortcodes_accordion_item' );

} // End if