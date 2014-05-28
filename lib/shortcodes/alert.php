<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Alert.php
 *
 * Build and register our alert shortcode.
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
			'heading'      => '',
			'icon'         => 'no-icon',
			'dismiss'      => 'true',
			'compact'      => 'false',
			'shadow'       => 'true',
			'color_scheme' => '',
			'bg_color'     => '#E5E5E5',
			'font_color'   => '#555555',
			'size'         => 'default',
			'class'        => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$heading    = ( ( isset( $atts['heading'] ) && $atts['heading'] != '' ) ? $atts['heading'] : '' );
		$icon       = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$dismiss    = ( ( isset( $atts['dismiss'] ) && $atts['dismiss'] != 'true' ) ? '' : ' ' . 'alert-dismiss' );
		$compact    = ( ( isset( $atts['compact'] ) && $atts['compact'] != 'false' ) ? ' ' . 'alert-compact' : '' );
		$shadow     = ( ( isset( $atts['shadow'] ) && $atts['shadow'] != 'true' ) ? '' : ' ' . 'alert-shadow' );
		$scheme     = ( ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) ? $atts['color_scheme'] : '' );
		$bg_color   = ( ( isset( $atts['bg_color'] ) && $atts['bg_color'] != '' ) ? $atts['bg_color'] : '#E5E5E5' );
		$font_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#555555' );
		$size       = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? $atts['size'] : 'default' );
		$class      = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-alert' . esc_attr( $class ) . '">';

		if ( $dismiss ) {
			$output .= '<i class="alert-close dork-icon times"></i>';
		}

		if ( $icon != '' ) {
			$output .= '<i class="dork-icon ' . esc_attr( $icon ) . '"></i>';
		}

		$output .= '<div class="alert-content">';

		if ( $heading != '' ) {
			$output .= '<div class="alert-heading">' . esc_html( $heading ) . '</div>';
		}

		$output .= do_shortcode( $content );
		$output .= '</div>';
		$output .= '</div>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_alert()

	// Register the shortcode with WordPress
	add_shortcode( 'alert', 'dork_shortcodes_alert' );

} // End if