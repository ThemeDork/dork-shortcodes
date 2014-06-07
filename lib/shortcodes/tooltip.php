<?php if ( !defined( 'ABSPATH' ) ) {
	die( 'Error! Unauthorized access is denied...!' );
}

/**
 * Tooltip.php
 *
 * Begin building our tooltip shortcode.
 *
 * @package   Dork Shortcodes
 * @author    ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link      http://www.themedork.com
 * @since     v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_tooltip' ) ) {

	function dork_shortcodes_tooltip( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'text'       => '',
			'link'       => '#',
			'direction'  => 'top',
			'new_window' => 'true',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue tooltip scripts
		wp_enqueue_script( 'dork-tooltip' );

		// Set defaults to avoid errors
		$text   = ( ( isset( $atts['text'] ) && $atts['text'] != '' ) ? $atts['text'] : '' );
		$link   = ( ( isset( $atts['link'] ) && $atts['link'] != '' ) ? $atts['link'] : '#' );
		$direc  = ( ( isset( $atts['direction'] ) && $atts['direction'] != '' ) ? $atts['direction'] : 'top' );
		$target = ( ( isset( $atts['new_window'] ) && $atts['new_window'] != 'true' ) ? '_self' : '_blank' );
		$class  = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<a href="' . esc_attr( $link ) . '" class="dork-tooltip' . esc_attr( $class ) . '" data-original-title="' . esc_attr( $text ) . '" data-placement="' . esc_attr( $direc ) . '" target="' . esc_attr( $target ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</a>';

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_tooltip()

	// Register the shortcode with WordPress
	add_shortcode( 'tooltip', 'dork_shortcodes_tooltip' );

} // End if