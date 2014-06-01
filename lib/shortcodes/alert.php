<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Alert.php
 *
 * Begin building our alert shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_alert' ) ) {

	function dork_shortcodes_alert( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'color'         => '#D3EDA3',
			'font_color'    => '#729640',
			'icon'          => 'no-icon',
			'rounded'       => 'true',
			'dismiss'       => 'true',
			'margin_top'    => '20px',
			'margin_bottom' => '20px',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$color      = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#D3EDA3' );
		$font_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#729640' );
		$icon       = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$rounded    = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'true' ) ? '' : ' ' . 'alert-rounded' );
		$dismiss    = ( ( isset( $atts['dismiss'] ) && $atts['dismiss'] != 'true' ) ? '' : 'true' );
		$m_top      = ( ( isset( $atts['margin_top'] ) && $atts['margin_top'] != '' ) ? $atts['margin_top'] : '20px' );
		$m_bot      = ( ( isset( $atts['margin_bottom'] ) && $atts['margin_bottom'] != '' ) ? $atts['margin_bottom'] : '20px' );
		$class      = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-alert' . esc_attr( $rounded ) . esc_attr( $class ) . '" style="background-color: ' . esc_attr( $color ) . '; color: ' . esc_attr( $font_color ) . '; margin-top: ' . esc_attr( $m_top ) . '; margin-bottom: ' . esc_attr( $m_bot ) . ';">';

		if ( $dismiss ) {
			$output .= '<i class="dork-icon alert-close times"></i>';
		} // End if

		if ( $icon ) {
			$output .= '<i class="dork-icon ' . esc_attr( $icon ) . '"></i>';
		} // End if

		$output .= '<div class="alert-content">';
		$output .= do_shortcode( $content );
		$output .= '</div>';
		$output .= '</div>';

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_alert()

	// Register the shortcode with WordPress
	add_shortcode( 'alert', 'dork_shortcodes_alert' );

} // End if