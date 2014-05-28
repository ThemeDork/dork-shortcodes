<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Accordion.php
 *
 * Build and register our accordion shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_accordion' ) ) {

	function dork_shortcodes_accordion( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'basic'        => 'false',
			'active_color' => '#E5E5E5',
			'font_color'   => '#555555',
			'rounded'      => 'true',
			'class'        => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue our accordion script and style
		wp_enqueue_script( 'dork-accordion' );
		wp_enqueue_style( 'dork-accordion' );

		// Set defaults to avoid errors
		$basic        = ( ( isset( $atts['basic'] ) && $atts['basic'] != 'false' ) ? ' ' . 'basic' : '' );
		$active_color = ( ( isset( $atts['active_color'] ) && $atts['active_color'] != '' ) ? $atts['active_color'] : '#E5E5E5' );
		$font_color   = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#555555' );
		$rounded      = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'true' ) ? '' : 'accordion-rounded' );
		$class        = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

	} // End dork_shortcodes_accordion()

	// Register shortcode with WordPress
	add_shortcode( 'accordion', 'dork_shortcodes_accordion' );

} // End if