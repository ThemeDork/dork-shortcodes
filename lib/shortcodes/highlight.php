<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Highlight.php
 *
 * Begin building our highlight shortcode.
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
			'color'      => '#00C8D7',
			'font_color' => '#FFFFFF',
			'rounded'    => 'false',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$color   = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#00C8D7' );
		$f_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#FFFFFF' );
		$rounded = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'false' ) ? '' : ' ' . 'highlight-rounded' );
		$class   = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<span class="dork-highlight' . esc_attr( $rounded ) . esc_attr( $class ) . '" style="color: ' . esc_attr( $f_color ) . '; background-color: ' . esc_attr( $color ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_highlight()

	// Register the shortcode with WordPress
	add_shortcode( 'highlight', 'dork_shortcodes_highlight' );

} // End if