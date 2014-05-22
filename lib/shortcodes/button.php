<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Button.php
 *
 * Lets build the button shortcode, register it with WordPress and get it ready for
 * use. Enjoy...
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
			'link'          => '#',
			'icon'          => 'no-icon',
			'color'         => '#E7E7E7',
			'font_color'    => '#777777',
			'full_width'    => 'false',
			'new_window'    => 'true',
			'rounded'       => 'false',
			'animated'      => 'false',
			'icon_position' => 'left',
			'size'          => 'default',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$link       = ( ( isset( $atts['link'] ) && $atts['link'] != '' ) ? $atts['link'] : '#' );
		$icon       = ( ( isset( $atts['icon'] ) && $atts['icon'] != 'no-icon' ) ? $atts['icon'] : '' );
		$color      = ( ( isset( $atts['color'] ) && $atts['color'] != '' ) ? $atts['color'] : '#E7E7E7' );
		$font_color = ( ( isset( $atts['font_color'] ) && $atts['font_color'] != '' ) ? $atts['font_color'] : '#777777' );
		$full_width = ( ( isset( $atts['full_width'] ) && $atts['full_width'] != 'false' ) ? ' ' . 'button-fullwidth' : '' );
		$new_window = ( ( isset( $atts['new_window'] ) && $atts['new_window'] != 'true' ) ? '_self' : '_blank' );
		$rounded    = ( ( isset( $atts['rounded'] ) && $atts['rounded'] != 'false' ) ? ' ' . 'button-rounded' : '' );
		$animated   = ( ( isset( $atts['animated'] ) && $atts['animated'] != 'false' ) ? ' ' . 'button-animated' : '' );
		$icon_pos   = ( ( isset( $atts['icon_position'] ) && $atts['icon_position'] != 'left' ) ? ' ' . 'button-icon-right' : '' );
		$size       = ( ( isset( $atts['size'] ) && $atts['size'] != '' ) ? $atts['size'] : 'default' );
		$class      = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Begin building the shortcode output
		$output = '';
		$output .= '<a class="dork-button button-' . esc_attr( $size ) . esc_attr( $animated ) . esc_attr( $full_width ) . esc_attr( $icon_pos ) . esc_attr( $rounded ) . esc_attr( $class ) . '" href="' . esc_attr( $link ) . '" style="background-color: ' . esc_attr( $color ) . '; color: ' . esc_attr( $font_color ) . ';" target="' . esc_attr( $new_window ) . '">';

		if ( $icon && $icon_pos == '' ) {
			$output .= '<i class="button-icon ' . esc_attr( $icon ) . '"></i>';
		}

		$output .= do_shortcode( $content );

		if ( $icon && $icon_pos != '' ) {
			$output .= '<i class="button-icon ' . esc_attr( $icon ) . '"></i>';
		}

		$output .= '</a>';

		// Return the shortcode output
		return $output;

	} // End dork_shortcodes_button()

	// Register the shortcode with WordPress
	add_shortcode( 'button', 'dork_shortcodes_button' );

} // End if