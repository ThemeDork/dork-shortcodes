<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Highlight.php
 *
 * Lets build the highlight shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
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
			'bg_color'   => '#00A0DC',
			'font_color' => '#FFFFFF',
			'rounded'    => 'true',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$bg_color   = ( ( isset( $atts['bg_color'] ) && $atts['bg_color'] != '' ) ? $atts['bg_color'] : '#00A0DC' );
		$font_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#FFFFFF' );
		$rounded    = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'true' ) ? '' : ' ' . 'highlight-rounded' );
		$class      = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<span class="dork-highlight' . esc_attr( $rounded ) . esc_attr( $class ) . '" style="background-color: ' . esc_attr( $bg_color ) . '; color: ' . esc_attr( $font_color ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_highlight()

	// Register the shortcode with WordPress
	add_shortcode( 'highlight', 'dork_shortcodes_highlight' );

} // End if