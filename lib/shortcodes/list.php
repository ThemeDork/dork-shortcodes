<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * List.php
 *
 * Build and register our list shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_list' ) ) {

	function dork_shortcodes_list( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'animated' => 'true',
			'divided'  => 'true',
			'size'     => 'default',
			'class'    => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$animated = ( ( isset( $atts['animated'] ) && $atts['animated'] != 'true' ) ? '' : ' ' . 'list-animated' );
		$divided  = ( ( isset( $atts['divided'] ) && $atts['divided'] != 'true' ) ? '' : ' ' . 'list-divided' );
		$size     = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? ' ' . 'list-' . $atts['size'] : ' ' . 'list-default' );
		$class    = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<ul class="dork-list' . esc_attr( $animated ) . esc_attr( $divided ) . esc_attr( $size ) . esc_attr( $class ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</ul>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_list()

	// Register our shortcode with WordPress
	add_shortcode( 'list', 'dork_shortcodes_list' );

} // End if


if ( ! function_exists( 'dork_shortcodes_list_item' ) ) {

	function dork_shortcodes_list_item( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'icon'     => 'no-icon',
			'color'    => '#555555',
			'circular' => 'false',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$icon     = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$color    = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#555555' );
		$circular = ( ( isset( $atts['circular'] ) && $atts['circular'] != 'false' ) ? 'circular' : '' );

		// Set the icon color
		if ( $color && $circular != '' ) {

			$icon_color = 'background-color: ' . esc_attr( $color ) . ';';

		} else {

			$icon_color = 'color: ' . esc_attr( $color ) . ';';

		} // End if

		// Begin building the shortcode output
		$output = '';
		$output .= '<li>';

		if ( $icon ) {
			$output .= '<i class="' . esc_attr( $circular ) . ' dork-icon ' . esc_attr( $icon ) . ' list-icon" style="' . esc_attr( $icon_color ) . '"></i>';
		}

		$output .= do_shortcode( $content );
		$output .= '</li>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_list_item()

	// Register shortcode with WordPress
	add_shortcode( 'list_item', 'dork_shortcodes_list_item' );

} // End if