<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Heading.php
 *
 * Build and register our heading shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_heading' ) ) {

	function dork_shortcodes_heading( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'icon'          => 'no-icon',
			'position'      => 'center',
			'size'          => 'default',
			'style'         => 'block',
			'color'         => '#555555',
			'top_margin'    => '20px',
			'bottom_margin' => '20px;',
			'class'         => '',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors

		// Begin building the shortcode output
		$output = '';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_heading()

} // End if