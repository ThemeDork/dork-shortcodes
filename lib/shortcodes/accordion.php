<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Accordion.php
 *
 * Begin building our accordion shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_accordion' ) ) {

	function dork_shortcodes_accordion( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'color'         => '#00C8D7',
			'margin_top'    => '20px',
			'margin_bottom' => '20px',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Enqueue accordion scripts
		wp_enqueue_script( 'dork-easing' );
		wp_enqueue_script( 'dork-accordion' );

		// Set defaults to avoid errors
		$color         = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#00C8D7' );
		$margin_top    = ( ( isset( $atts['margin_top'] ) && $atts['margin_top'] != '' ) ? $atts['margin_top'] : '20px' );
		$margin_bottom = ( ( isset( $atts['margin_bottom'] ) && $atts['margin_bottom'] != '' ) ? $atts['margin_bottom'] : '20px' );
		$class         = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-accordion' . esc_attr( $class ) . '" data-color="' . esc_attr( $color ) . '" style="margin-top: ' . esc_attr( $margin_top ) . '; margin-bottom: ' . esc_attr( $margin_bottom ) . ';">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_accordion()

	// Register the shortcode with WordPress
	add_shortcode( 'accordion', 'dork_shortcodes_accordion' );

} // End if


if ( ! function_exists( 'dork_shortcodes_accordion_item' ) ) {

	function dork_shortcodes_accordion_item( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'title' => '',
			'icon'  => 'no-icon',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$title = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$icon  = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );

		// User defined icon support
		if ( $icon ) {
			$acc_icon = '<i class="dork-icon ' . esc_attr( $icon ) . '"></i>';
		} else {
			$acc_icon = '';
		}

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-accordion-item">';
		$output .= '<a href="#" class="accordion-title">' . $acc_icon . esc_attr( $title ) . '</a>';
		$output .= '<div class="accordion-content">';
		$output .= do_shortcode( $content );
		$output .= '</div>';
		$output .= '</div>';

		// Return the shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_accordion_item()

	// Register the shortcode with WordPress
	add_shortcode( 'accordion_item', 'dork_shortcodes_accordion_item' );

} // End if