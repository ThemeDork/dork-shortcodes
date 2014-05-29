<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Progress.php
 *
 * Build and register our progress bar shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_progress' ) ) {

	function dork_shortcodes_progress( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'percentage'   => '0%',
			'color_scheme' => '',
			'bg_color'     => '#E5E5E5',
			'striped'      => 'false',
			'animated'     => 'true',
			'class'        => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$percentage = ( ( isset( $atts['percentage'] ) && $atts['percentage'] != '' ) ? $atts['percentage'] : '0%' );
		$scheme     = ( ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) ? ' ' . $atts['color_scheme'] : '' );
		$bg_color   = ( ( isset( $atts['bg_color'] ) && $atts['bg_color'] != '' ) ? $atts['bg_color'] : '#E5E5E5' );
		$striped    = ( ( isset( $atts['striped'] ) && $atts['striped'] != 'false' ) ? ' ' . 'striped' : '' );
		$animated   = ( ( isset( $atts['animated'] ) && $atts['animated'] != 'true' ) ? '' : ' ' . 'animated' );
		$class      = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Check if a color scheme has been chosen
		if ( $scheme ) {
			$bg_color = '';
			$color = '';
		} else {
			$color = ' ' . 'background-color: ' . esc_attr( $bg_color ) . ';';
		}

		// Begin building the shortcode output
		$output = '';
		$output .= '<div class="dork-progress' . esc_attr( $scheme ) . esc_attr( $striped ) . esc_attr( $animated ) . esc_attr( $class ) . '">';
		$output .= '<div class="progress-bar" style="width: ' . esc_attr( $percentage ) . ';' . esc_attr( $color ) . '">';
		$output .= do_shortcode( $content );
		$output .= '</div>';
		$output .= '</div>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_progress()

	// Register the shortcode with WordPress
	add_shortcode( 'progress', 'dork_shortcodes_progress' );

} // End if