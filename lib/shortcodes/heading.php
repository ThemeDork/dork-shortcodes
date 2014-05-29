<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Heading.php
 *
 * Build and register our heading shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_heading' ) ) {

	function dork_shortcodes_heading( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'position'      => 'center',
			'size'          => 'h3',
			'style'         => 'basic',
			'color'         => '#555555',
			'top_margin'    => '20px',
			'bottom_margin' => '20px;',
			'class'         => '',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$position      = ( ( isset( $atts['position'] ) && $atts['position'] != '' ) ? ' ' . 'heading-' . $atts['position'] : ' ' . 'heading-center' );
		$size          = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? $atts['size'] : 'h3' );
		$style         = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'heading-' . $atts['style'] : ' ' . 'heading-basic' );
		$color         = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#555555' );
		$top_margin    = ( ( isset( $atts['top_margin'] ) && $atts['top_margin'] != '' ) ? $atts['top_margin'] : '20px' );
		$bottom_margin = ( ( isset( $atts['bottom_margin'] ) && $atts['bottom_margin'] != '' ) ? $atts['bottom_margin'] : '20px' );
		$class         = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<' . esc_attr( $size ) . ' class="dork-heading' . esc_attr( $style ) . esc_attr( $position ) . esc_attr( $class ) . '" style="color: ' . esc_attr( $color ) . '; margin-top: ' . esc_attr( $top_margin ) . '; margin-bottom: ' . esc_attr( $bottom_margin ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</' . esc_attr( $size ) . '>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_heading()

	// Register the shortcode with WordPress
	add_shortcode( 'heading', 'dork_shortcodes_heading' );

} // End if