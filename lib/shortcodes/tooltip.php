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
			'placement'   => 'top',
			'class'       => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue our tooltip scripts
		wp_enqueue_script( 'dork-tooltip' );

		// Set defaults to avoid errors
		$title       = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$placement   = ( ( isset( $atts['placement'] ) && $atts['placement'] != '' ) ? $atts['placement'] : 'top' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<span href="#" class="dork-tooltip' . '" data-original-title="' . esc_attr( $title ) . '" data-placement="' . esc_attr( $placement ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_tooltip()

	// Register the shortcode with WordPress
	add_shortcode( 'tooltip', 'dork_shortcodes_tooltip' );

} // End if