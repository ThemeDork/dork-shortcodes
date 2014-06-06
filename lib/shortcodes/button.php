<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Button.php
 *
 * Begin building our button shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_button' ) ) {

	function dork_shortcodes_button( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'link'       => '',
			'icon'       => 'no-icon',
			'color'      => '#00C8D7',
			'font_color' => '#FFFFFF',
			'style'      => 'standard',
			'size'       => 'medium',
			'shadow'     => 'true',
			'rounded'    => 'false',
			'new_window' => 'true',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$link     = ( ( isset( $atts['link'] ) && $atts['link'] != '' ) ? $atts['link'] : '#' );
		$icon     = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$color    = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#00C8D7' );
		$f_color  = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#FFFFFF' );
		$style    = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? 'button-' . $atts['style'] : 'button-standard' );
		$size     = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? ' ' . 'button-' . $atts['size'] : ' ' . 'button-medium' );
		$shadow   = ( ( isset( $atts['shadow'] ) && $atts['shadow'] != 'true' ) ? '' : ' ' . 'button-shadow' );
		$rounded  = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'false' ) ? ' ' . 'button-rounded' : '' );
		$new_win  = ( ( isset( $atts['new_window'] ) && $atts['new_window'] != 'true' ) ? '_self' : '_blank' );
		$class    = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		//
		if ( $style != 'button-outlined' ) {
			$style_atts = 'color: ' . esc_attr( $f_color ) . '; background-color: ' . esc_attr( $color ) . ';';
		} else {
			$style_atts = 'border-color: ' . esc_attr( $color ) . '; color: ' . esc_attr( $f_color ) . ';';
		}

		// Begin building the shortcode output
		$output = '';
		$output .= '<a href="' . esc_attr( $link ) . '" class="dork-button' . ' ' . esc_attr( $style ) . esc_attr( $size ) . esc_attr( $shadow ) . esc_attr( $rounded ) . esc_attr( $class ) . '" target="' . esc_attr( $new_win ) . '" style="' . $style_atts . '">';

		if ( $icon ) {
			$output .= '<span class="button-icon">';
			$output .= '<i class="dork-icon ' . esc_attr( $icon ) . '"></i>' . ' ';
			$output .= '</span>';
		} // End if

		if ( do_shortcode( $content ) != '' ) {
			$output .= do_shortcode( $content );
		} // End if

		$output .= '</a>';

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_button()

	// Register the shortcode with WordPress
	add_shortcode( 'button', 'dork_shortcodes_button' );

} // End if