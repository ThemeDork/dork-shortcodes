<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Accordion.php
 *
 * Lets build the accordion shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
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
			'basic' => 'false',
			'class' => '',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set default values to avoid errors
		$basic = ( ( isset( $atts['basic'] ) && $atts['basic'] != 'false' ) ? ' ' . 'basic-accordion' : '' );
		$class = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-accordion' . esc_attr( $basic ) . esc_attr( $class ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</div>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_accordion()

	// Register our accordion shortcode
	add_shortcode( 'accordion', 'dork_shortcodes_accordion' );

} // End if


/**
 * An accordion just wouldn't be an accordion without some content, so lets go ahead
 * and setup the shortcode for our accordion sections. The user can add as many
 * sections to their accordion as their little heart desires.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_accordion_section' ) ) {

	function dork_shortcodes_accordion_section( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'title' => '',
			'icon'  => 'no-icon',
			'open'  => 'false',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set default values to avoid errors
		$title = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$icon  = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? ' ' . $atts['icon'] : '' );
		$open  = ( ( isset( $atts['open'] ) && $atts['open'] != 'false' ) ? ' ' . 'active' : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="accordion-item">';
		$output .= '<div class="accordion-title' . esc_attr( $open ) . '"><a href="#"><i class="' . esc_attr( $icon ) . '"></i>' . esc_attr( $title ) . '</a><span><i class="dork-icon-plus"></i></span></div>';
		$output .= '<div class="accordion-inner">' . do_shortcode( $content ) . '</div>';
		$output .= '</div><!-- End .accordion-section -->';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_accordion_section()

	// Register our accordion items shortcode
	add_shortcode( 'accordion_section', 'dork_shortcodes_accordion_section' );

} // End if