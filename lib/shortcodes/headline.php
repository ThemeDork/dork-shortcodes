<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Headline.php
 *
 * Lets build the headline shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_headline' ) ) {

	function dork_shortcodes_headline( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'icon'          => 'no-icon',
			'animated'      => 'true',
			'color'         => '#2B2B2B',
			'style'         => 'left',
			'size'          => 'default',
			'top_margin'    => '20px',
			'bottom_margin' => '20px',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$icon          = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$animated      = ( ( isset( $atts['animated'] ) && $atts['animated'] != 'false' ) ? ' ' . 'headline-animated' : '' );
		$color         = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#2B2B2B' );
		$style         = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? 'headline-' . $atts['style'] : 'headline-left' );
		$size          = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? 'headline-' . $atts['size'] : 'headline-default' );
		$top_margin    = ( ( isset( $atts['top_margin'] ) && $atts['top_margin'] != '' ) ? $atts['top_margin'] : '20px' );
		$bottom_margin = ( ( isset( $atts['bottom_margin'] ) && $atts['bottom_margin'] != '' ) ? $atts['bottom_margin'] : '20px' );
		$class         = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? $atts['class'] : '' );

		// Begin build the shortcode output
		$output = '';
		$output .= '<h3 class="dork-headline' . ' ' . esc_attr( $style ) . ' ' . esc_attr( $size ) . esc_attr( $animated ) . ' ' . esc_attr( $class ) . '" style="color: ' . esc_attr( $color ) .'; margin: 0; margin-top: ' . esc_attr( $top_margin ) . '; margin-bottom: ' . esc_attr( $bottom_margin ) . ';">';

		$output .= '<span>';

		if ( $icon ) {
			$output .= '<i class="headline-icon ' . esc_attr( $icon ) . '"></i>';
		} // End if

		$output .= do_shortcode( $content );
		$output .= '</span>';
		$output .= '</h3>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_headline()

	// Register the shortcode with WordPress
	add_shortcode( 'headline', 'dork_shortcodes_headline' );

} // End if