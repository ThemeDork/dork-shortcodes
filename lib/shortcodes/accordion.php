<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Accordion.php
 *
 * Begin building our accordion shortcode.
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
			'color'         => '',
			'margin_top'    => '20px',
			'margin_bottom' => '20px',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue accordion scripts
		wp_enqueue_script( 'dork-jquery-ui' );
		wp_enqueue_script( 'dork-accordion' );

		// Set defaults to avoid errors
		$color         = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '' );
		$margin_top    = ( ( isset( $atts['margin_top'] ) && $atts['margin_top'] != '' ) ? $atts['margin_top'] : '20px' );
		$margin_bottom = ( ( isset( $atts['margin_bottom'] ) && $atts['margin_bottom'] != '' ) ? $atts['margin_bottom'] : '20px' );
		$class         = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-accordion" style="margin-top: ' . esc_attr( $margin_top ) . '; margin-bottom: ' . esc_attr( $margin_bottom ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_accordion()

	// Register the shortcode with WordPress
	add_shortcode( 'accordion', 'dork_shortcodes_accordion' );

} // End if


if ( ! function_exists( 'dork_shortcodes_accordion_item' ) ) {

	function dork_shortcodes_accordion_item( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'title' => '',
			'icon'  => 'no-icon',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$title = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$icon  = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-accordion-header">';
		$output .= '<h4>' . esc_attr( $title ) . '</h4>';
		$output .= '</div>';
		$output .= '<div class="dork-accordion-body">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_accordion_item()

	// Register the shortcode with WordPress
	add_shortcode( 'accordion_item', 'dork_shortcodes_accordion_item' );

} // End if