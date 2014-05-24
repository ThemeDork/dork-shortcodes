<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Blockquote.php
 *
 * Lets build the blockquote shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_blockquote' ) ) {

	function dork_shortcodes_blockquote( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'cite'         => '',
			'link'         => '',
			'new_window'   => 'true',
			'basic'        => 'false',
			'accent_color' => '#00B5AD',
			'position'     => 'left',
			'class'        => '',
		);

		// Extract the shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$cite         = ( ( isset( $atts['cite'] ) && $atts['cite'] != '' ) ? $atts['cite'] : '' );
		$link         = ( ( isset( $atts['link'] ) && $atts['link'] != '' ) ? $atts['link'] : '' );
		$new_window   = ( ( isset( $atts['new_window'] ) && $atts['new_window'] != 'true' ) ? '_self' : '_blank' );
		$basic        = ( ( isset( $atts['basic'] ) && $atts['basic'] != 'false' ) ? ' ' . 'blockquote-basic' : '' );
		$accent_color = ( ( isset( $atts['accent_color'] ) && $atts['accent_color'] != '' ) ? $atts['accent_color'] : '#00B5AD' );
		$position     = ( ( isset( $atts['position'] ) && $atts['position'] != '' ) ? ' ' . 'blockquote-cite-' . $atts['position'] : 'blockquote-cite-left' );
		$class        = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<blockquote class="dork-blockquote' . esc_attr( $basic ) . esc_attr( $position ) . esc_attr( $class ) . '" style="border-color: ' . esc_attr( $accent_color ) . ';">';

		if ( $basic ) {
			$output .= '<i class="blockquote-icon dork-icon-quote-left"></i>';
		} // End if

		$output .= do_shortcode( $content );

		if ( $cite ) {

			if ( $link ) {
				$output .= '<a href="' . esc_attr( $link ) . '" target="' . esc_attr( $new_window ) . '">';
			} // End if

			$output .= '<span style="color: ' . esc_attr( $accent_color ) . '">' . esc_html( $cite ) . '</span>';

			if ( $link ) {
				$output .= '</a>';
			} // End if

		} // End if

		$output .= '</blockquote>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_blockquote()

	// Register the shortcode with WordPress
	add_shortcode( 'blockquote', 'dork_shortcodes_blockquote' );

} // End if