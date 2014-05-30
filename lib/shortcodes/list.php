<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * List.php
 *
 * Build and register our list shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_list' ) ) {

	function dork_shortcodes_list( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(

		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

	} // End dork_shortcodes_list()

} // End if