<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Dropcap.php
 *
 * Lets build the dropcap shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
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
			'style'      => 'circle',
			'bg_color'   => '#EBEBEB',
			'font_color' => '#333333',
			'size'       => 'default',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$style = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? 'dropcap-' . $atts['style'] : 'dropcap-circle' );
		$bg_color = ( ( isset( $atts['bg_color'] ) && $atts['bg_color'] != '' ) ? $atts['bg_color'] : '#EBEBEB' );
		$font_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#333333' );
		$size = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? 'dropcap-' . $atts['size'] : 'dropcap-default' );
		$class = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? $atts['class'] : '' );

		//
		if ( $style == 'dropcap-plain' ) {
			$bg_color = 'transparent';
		}

		// Begin building the shortcode output
		$output = '';
		$output .= '<span class="dork-dropcap' . ' ' . esc_attr( $style ) . ' ' . esc_attr( $size ) . ' ' . esc_attr( $class ) . '" style="background: ' . esc_attr( $bg_color ) . '; color: ' . esc_attr( $font_color ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</span>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_dropcap()

	// Register the shortcode with WordPress
	add_shortcode( 'dropcap', 'dork_shortcodes_dropcap' );

} // End if