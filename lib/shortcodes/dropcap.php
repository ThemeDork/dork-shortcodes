<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Dropcap.php
 *
 * Begin building our dropcap shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_dropcap' ) ) {

	function dork_shortcodes_dropcap( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'style'    => 'round',
			'size'     => 'medium',
			'color'    => '#777777',
			'bg_color' => '#E5E5E5',
			'class'    => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$style    = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'dropcap-' . $atts['style'] : ' ' . 'dropcap-round' );
		$size     = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? ' ' . 'dropcap-' . $atts['size'] : ' ' . 'dropcap-medium' );
		$color    = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#777777' );
		$bg_color = ( ( isset( $atts['bg_color'] ) && $atts['bg_color'] != '' ) ? $atts['bg_color'] : '#E5E5E5' );
		$class    = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<span class="dork-dropcap' . esc_attr( $style ) . esc_attr( $size ) . esc_attr( $class ) . '" style="color: ' . esc_attr( $color ) . '; background-color: ' . esc_attr( $bg_color ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_dropcap()

	// Register the shortcode with WordPress
	add_shortcode( 'dropcap', 'dork_shortcodes_dropcap' );

} // End if