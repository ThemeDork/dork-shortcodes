<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Class-Shortcode-Controls.php
 *
 * A form is simply not a form without the proper controls. Lets begin defining and
 * building each of the controls that will be made available within our plugin.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

class Dork_Shortcodes_Controls {

	/**
	 * Class constructor.
	 *
	 * @since v1.0.0
	 */

	public function __construct() {}


	/**
	 * Start building the output for each of the controls that will be available
	 * within this plugin. We will be accepting the form variables and using those to
	 * populate the data needed for each control.
	 *
	 * @since v1.0.0
	 */

	public function generate_controls( $pname, $desc, $key, $type, $std, $options ) {

		// Create our output
		$output = '';

		// Begin building the controls
		switch ( $type ) {


			/**
			 * Build our custom text control.
			 *
			 * @since v1.0.0
			 */

			case 'text':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-text">' . esc_html( $pname ) . '</label>';
				$output .= '<input type="text" id="' . esc_attr( $key ) . '-text" name="' . esc_attr( $pname ) . '" placeholder="' . esc_attr( $std ) . '" autocomplete="off" />';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom select control
			 *
			 * @since v1.0.0
			 */

			case 'checkbox':
				$output .= '<div class="dork-control-field">';
				$output .= '<div class ="dork-checkbox-field">';
				$checked = ( 1 == $std ) ? ' checked' : '';
				$output .= '<input type="checkbox" id="' . esc_attr( $key ) . '-checkbox" name="' . esc_attr( $pname ) . '" autocomplete="off"' . esc_attr( $checked ) . ' />';
				$output .= '<label for="' . esc_attr( $key ) . '-checkbox">' . esc_html( $pname ) . '</label>';
				$output .= '</div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom select control
			 *
			 * @since v1.0.0
			 */

			case 'select':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-select">' . esc_html( $pname ) . '</label>';
				$output .= '<select id="' . esc_attr( $key ) . '-select" autocomplete="off">';
				$output .= '<option value="">' . esc_html__( 'Choose One:', '__shortcodes__' ) . '</option>';

				if ( ! empty( $options ) && is_array( $options ) ) {

					foreach ( $options as $option_id => $option ) {

						$selected = ( ( $option_id == $std ) ? ' selected' : '' );
						$output .= '<option value="' . esc_attr( $option_id ) . '"' . esc_attr( $selected ) . '>' . esc_html( ':: ' . $option ) . '</option>';

					} // End foreach

				} // End if

				$output .= '</select>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom icon select control
			 *
			 * @since v1.0.0
			 */

			case 'icon-select':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-icon-select">' . esc_html( $pname ) . '</label>';
				$output .= '<ul id="' . esc_attr( $key ) . '-icon-select" class="dork-icon-select" autocomplete="off">';

				// Access our icon array
				$icons = ( function_exists( 'dork_shortcodes_icons' ) ? dork_shortcodes_icons() : '' );

				// Verify that icons exists before continuing
				if ( ! empty( $icons ) && is_array( $icons ) ) {

					foreach ( $icons as $icon_id => $icon ) {

						// Determine the default selected item
						$selected = ( $icon_id == $std ) ? 'selected' : '';

						// Allow user the ability to not choose an icon
						$icon_red = '';
						if ( 'no-icon' == $icon_id ) { $icon_red = ' icon-red'; $selected = ' selected'; }

						// Generate the individual options for each icon
						$output .= '<li class="icon-select-option ' . esc_attr( $icon_red ) . esc_attr( $selected ) . '" data-id="' . esc_attr( $icon_id ) . '"><i class="' . esc_attr( $icon_id ) . '"></i>' . esc_html( $icon ) . '</li>';

					} // End foreach

				} // End if

				$output .= '</ul>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;

		} // End switch()

		// Return our control output to make them work
		return $output;

	} // End generate_controls()

} // End Dork_Shortcodes_Controls