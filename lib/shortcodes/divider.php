<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Divider.php
 *
 * Begin building our divider shortcode.
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
			'margin_top'    => '30px',
			'margin_bottom' => '30px',
			'to_top'        => 'false',
			'class'         => '',
		);

		// Extract shortcode attributes
		extract( shortcode_atts( $defaults, $atts ) );

		// Set defaults to avoid errors
		$style  = ( ( isset( $atts['style'] ) && $atts['style'] != '' ) ? ' ' . 'divider-' . $atts['style'] : ' ' . 'divider-single' );
		$m_top  = ( ( isset( $atts['margin_top'] ) && $atts['margin_top'] != '' ) ? $atts['margin_top'] : '30px' );
		$m_bot  = ( ( isset( $atts['margin_bottom'] ) && $atts['margin_bottom'] != '' ) ? $atts['margin_bottom'] : '30px' );
		$to_top = ( ( isset( $atts['to_top'] ) && $atts['to_top'] != 'false' ) ? ' ' . 'divider-to-top' : '' );
		$class  = ( ( isset( $atts['class'] ) && $atts['class'] != '' ) ? ' ' . $atts['class'] : '' );

		// Enqueue our divider scripts
		wp_enqueue_script( 'dork-divider' );

		// Begin building our shortcode output
		$output = '';

		if ( $to_top != '' ) {

			$output .= '<div class="' . esc_attr( $to_top ) . '" style="margin-top: ' . esc_attr( $m_top ) . '; margin-bottom: ' . esc_attr( $m_bot ) . ';">';
			$output .= '<a href="#" class="go-to-top">' . __( 'Go to Top', '__scLang__' ) . '<i class="dork-icon level-up"></i></a>';
			$output .= '<hr class="dork-divider' . esc_attr( $style ) . esc_attr( $class ) . '" />';
			$output .= '</div>';

		} else {

			$output .= '<hr class="dork-divider' . esc_attr( $style ) . esc_attr( $class ) . '" style="margin-top: ' . esc_attr( $m_top ) . '; margin-bottom: ' . esc_attr( $m_bot ) . ';" />';

		}

		// Return the compiled shortcode output
		return force_balance_tags( $output );

	} // End dork_shortcodes_divider()

	// Register the shortcode with WordPress
	add_shortcode( 'divider', 'dork_shortcodes_divider' );

} // End if