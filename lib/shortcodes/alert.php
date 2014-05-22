<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Alert.php
 *
 * Lets build the alert shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
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
			'heading' => '',
			'color'   => 'alert-muted',
			'icon'    => 'no-icon',
			'size'    => 'alert-default',
			'dismiss' => 'true',
			'class'   => '',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$heading = ( ( isset( $atts['heading'] ) && $atts['heading'] != '' ) ? $atts['heading'] : '' );
		$color   = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? ' ' . $atts['color'] : ' ' . 'alert-muted' );
		$icon    = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$size    = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? ' ' . $atts['size'] : ' ' . 'alert-default' );
		$dismiss = ( ( isset( $atts['dismiss'] ) && $atts['dismiss'] != 'true' ) ? 'false' : 'true' );
		$class   = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the alert shortcode output
		$output = '';
		$output .= '<div class="dork-alert' . esc_attr( $color ) . esc_attr( $size ) . esc_attr( $class ) . '">';

		if ( $dismiss == 'true' ) {
			$output .= '<i class="alert-dismiss dork-icon-times"></i>';
		}

		if ( $icon ) {
			$output .= '<i class="alert-icon ' . esc_attr( $icon ) . '"></i>';
		}

		$output .= '<div class="alert-content">';

		if ( $heading ) {
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