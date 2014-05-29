<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Tooltip.php
 *
 * Build and register our tooltip shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_tooltip' ) ) {

	function dork_shortcodes_tooltip( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'title'       => '',
			'description' => '',
			'size'        => 'small',
			'style'       => 'light',
			'class'       => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue our tooltip scripts
		wp_enqueue_script( 'dork-tooltip' );

		// Set defaults to avoid errors
		$title       = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$description = ( ( isset( $atts['description'] ) && $atts['description'] != '' ) ? $atts['description'] : '' );
		$size        = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? ' ' . 'tooltip-' . $atts['size'] : ' ' . 'tooltip-small' );
		$style       = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'tooltip-' . $atts['style'] : 'tooltip-light' );
		$class       = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<span class="dork-tooltip" data-title="hello" data-content="hey there">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_tooltip()

	// Register the shortcode with WordPress
	add_shortcode( 'tooltip', 'dork_shortcodes_tooltip' );

} // End if