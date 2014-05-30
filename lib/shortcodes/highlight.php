<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Highlight.php
 *
 * Build and register our highlight shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_highlight' ) ) {

	function dork_shortcodes_highlight( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'color'      => '#BF2ABF',
			'font_color' => '#F5F5F5',
			'rounded'    => 'true',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$color      = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#BF2ABF' );
		$font_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#F5F5F5' );
		$rounded    = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'true' ) ? '' : ' ' . 'highlight-rounded' );
		$class      = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<span class="dork-highlight' . esc_attr( $rounded ) . esc_attr( $class ) . '" style="background-color: ' . esc_attr( $color ) . '; color: ' . esc_attr( $font_color ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_highlight()

	// Register the shortcode with WordPress
	add_shortcode( 'highlight', 'dork_shortcodes_highlight' );

} // End if