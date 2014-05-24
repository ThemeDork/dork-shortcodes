<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Divider.php
 *
 * Lets build the divider shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_divider' ) ) {

	function dork_shortcodes_divider( $atts ) {

		// Default shortcode attributes
		$defaults = array(
			'style'         => 'single',
			'top_margin'    => '30px',
			'bottom_margin' => '30px',
			'color'         => '#E5E5E5',
			'class'         => '',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$style         = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'divider-' . $atts['style'] : ' ' . 'divider-single' );
		$top_margin    = ( ( isset( $atts['top_margin'] ) && $atts['top_margin'] != '' ) ? $atts['top_margin'] : '30px' );
		$bottom_margin = ( ( isset( $atts['bottom_margin'] ) && $atts['bottom_margin'] != '' ) ? $atts['bottom_margin'] : '30px' );
		$color         = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#E5E5E5' );
		$class         = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<hr class="dork-divider' . esc_attr( $style ) . esc_attr( $class ) . '" style="border-color: ' . esc_attr( $color ) . '; margin: 0; margin-top: ' . esc_attr( $top_margin ) . '; margin-bottom: ' . esc_attr( $bottom_margin ) . ';" />';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_divider()

	// Register our shortcode with WordPress
	add_shortcode( 'divider', 'dork_shortcodes_divider' );

} // End if