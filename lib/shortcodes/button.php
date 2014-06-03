<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Button.php
 *
 * Begin building our button shortcode.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_button' ) ) {

	function dork_shortcodes_button( $atts, $content = null ) {

		// Default shortcode attributes
		$defaults = array(
			'link'       => '',
			'title'      => '',
			'icon'       => 'no-icon',
			'position'   => 'left',
			'color'      => '#00C8D7',
			'font_color' => '#FFFFFF',
			'style'      => 'flat',
			'size'       => 'medium',
			'rounded'    => 'false',
			'new_window' => 'true',
			'animated'   => 'true',
			'class'      => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$link     = ( ( isset( $atts['link'] ) && $atts['link'] != '' ) ? $atts['link'] : '#' );
		$title    = ( ( isset( $atts['title'] ) && $atts['title'] != '' ) ? $atts['title'] : '' );
		$icon     = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$pos      = ( ( isset( $atts['position'] ) && $atts['position'] != 'left' ) ? ' ' . 'icon-right' : '' );
		$color    = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#00C8D7' );
		$f_color  = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#FFFFFF' );
		$style    = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'button-' . $atts['style'] : ' ' . 'button-flat' );
		$size     = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? ' ' . 'button-' . $atts['size'] : ' ' . 'button-medium' );
		$rounded  = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'false' ) ? ' ' . 'button-rounded' : '' );
		$new_win  = ( ( isset( $atts['new_window'] ) && $atts['new_window'] != 'true' ) ? '_self' : '_blank' );
		$animated = ( ( isset( $atts['animated'] ) && $atts['animated'] != 'true' ) ? '' : ' ' . 'animated' );
		$class    = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Determine if content has been added to the button or just an icon
		if ( do_shortcode( $content ) == '' ) {
			$just_icon = ' ' . 'icon-only';
		} else {
			$just_icon = '';
		} // End if

		// Begin building the shortcode output
		$output = '';
		$output .= '<a href="' . esc_attr( $link ) . '" title="' . esc_attr( $title ) . '" class="dork-button' . esc_attr( $style ) . esc_attr( $size ) . esc_attr( $rounded ) . esc_attr( $animated ) . esc_attr( $pos ) . esc_attr( $just_icon ) . esc_attr( $class ) . '" target="' . esc_attr( $new_win ) . '" style="color: ' . esc_attr( $f_color ) . '; background-color: ' . esc_attr( $color ) . ';">';

		if ( $icon ) {
			$output .= '<span class="button-icon">';
			$output .= '<i class="dork-icon ' . esc_attr( $icon ) . '"></i>' . ' ';
			$output .= '</span>';
		} // End if

		if ( do_shortcode( $content ) != '' ) {
			$output .= '<span class="button-label">';
			$output .= do_shortcode( $content );
			$output .= '</span>';
		} // End if

		$output .= '</a>';

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_button()

	// Register the shortcode with WordPress
	add_shortcode( 'button', 'dork_shortcodes_button' );

} // End if