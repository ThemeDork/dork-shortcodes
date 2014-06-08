<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Error! Unauthorized access is denied...!' );
}

/**
 * Column.php
 *
 * Begin building our column shortcode.
 *
 * @package   Dork Shortcodes
 * @author    ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link      http://www.themedork.com
 * @since     v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_columns' ) ) {

	function dork_shortcodes_columns( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'class' => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$class = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-grid' . esc_attr( $class ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the compiled shortcode output
		return $output;

	} // End dork_shortcodes_columns()

	// Register the shortcode with WordPress
	add_shortcode( 'columns', 'dork_shortcodes_columns' );

} // End if

if ( ! function_exists( 'dork_shortcodes_column' ) ) {

	function dork_shortcodes_column( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'size' => 'grid-whole',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$size = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? $atts['size'] : 'grid-whole' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="grid-unit ' . esc_attr( $size ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the compiled shortcode output
		return $output;

	} // End dork_shortcodes_column()

	// Register the shortcode with WordPress
	add_shortcode( 'column', 'dork_shortcodes_column' );

} // End if