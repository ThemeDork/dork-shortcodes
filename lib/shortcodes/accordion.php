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
			'rounded'      => 'true',
			'class'        => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue our accordion javascript
		wp_enqueue_script( 'dork-accordion' );

		// Set defaults to avoid errors
		$basic        = ( ( isset( $atts['basic'] ) && $atts['basic'] != 'false' ) ? ' ' . 'accordion-basic' : '' );
		$rounded      = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'true' ) ? '' : ' ' . 'accordion-rounded' );
		$class        = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-accordion' . esc_attr( $basic ) . esc_attr( $rounded ) . esc_attr( $class ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</div><!-- End .dork-accordion -->';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_accordion()

	// Register shortcode with WordPress
	add_shortcode( 'accordion', 'dork_shortcodes_accordion' );

} // End if


if ( ! function_exists( 'dork_shortcodes_accordion_item' ) ) {

	function dork_shortcodes_accordion_item( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'title' => '',
			'open'  => 'false',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$title = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$open  = ( ( isset( $atts['open'] ) && $atts['open'] != 'false' ) ? ' ' . 'active' : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="accordion-title' . esc_attr( $open ) . '">';
		$output .= '<i class="dork-icon accordion-icon caret-right"></i>';
		$output .= esc_html( $title );
		$output .= '</div><!-- End .accordion-title -->';
		$output .= '<div class="accordion-content' . esc_attr( $open ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</div><!-- End .accordion-content -->';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_accordion_item()

	// Register shortcode with WordPress
	add_shortcode( 'accordion_item', 'dork_shortcodes_accordion_item' );

} // End if