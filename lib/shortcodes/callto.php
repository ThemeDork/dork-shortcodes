<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Callto.php
 *
 * Begin building our Call to Action shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_cta' ) ) {

	function dork_shortcodes_cta( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'color'         => '#E5E5E5',
			'font_color'    => '#777777',
			'border_color'  => '#00C8D7',
			'style'         => 'flat',
			'border_style'  => 'none',
			'margin_top'    => '20px',
			'margin_bottom' => '20px',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$color   = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#E5E5E5' );
		$f_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#777777' );
		$b_color = ( ( isset( $atts['border_color'] ) && $atts['border_color'] != '' ) ? $atts['border_color'] : '#00C8D7' );
		$style   = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'cta-' . $atts['style'] : ' ' . 'cta-flat' );
		$b_style = ( ( isset( $atts['border_style'] ) && $atts['border_style'] != '' ) ? ' ' . 'cta-border-' . $atts['border_style'] : ' ' . 'cta-border-none' );
		$m_top   = ( ( isset( $atts['margin_top'] ) && $atts['margin_top'] != '' ) ? $atts['margin_top'] : '20px' );
		$m_bot   = ( ( isset( $atts['margin_bottom'] ) && $atts['margin_bottom'] != '' ) ? $atts['margin_bottom'] : '20px' );
		$class   = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building cta shortcode output
		$output = '';
		$output .= '<div class="dork-cta' . esc_attr( $style ) . esc_attr( $b_style ) . esc_attr( $class ) . '" style="color: ' . esc_attr( $f_color ) . '; background-color: ' . esc_attr( $color ) . '; border-color: ' . esc_attr( $b_color ) . '; margin-top: ' . esc_attr( $m_top ) . '; margin-bottom: ' . esc_attr( $m_bot ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_cta()

	// Register shortcode with WordPress
	add_shortcode( 'cta', 'dork_shortcodes_cta' );

} // End if