<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Config.php
 *
 * We need options and lots of them! Lets get started by creating our configuration
 * file for the available shortcodes. Every option you see on the shortcode
 * forms was born right here...ahhh.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_config' ) ) {

	function dork_shortcodes_config() {

		/**
		 * Accordion shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-accordion'] = array(
			'name'   => __( 'Accordion', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'items' => array(
					'std'     => '3',
					'name'    => __( 'Number of Accordion Items', '__shortcodes__' ),
					'desc'    => __( 'Choose the number of accordion items that you would like to create. You can always add more items later.', '__shortcodes__' ),
					'key'     => 'accordion-items',
					'type'    => 'select',
					'options' => array(
						'1'  => __( 'One Item', '__shortcodes__' ),
						'2'  => __( 'Two Items', '__shortcodes__' ),
						'3'  => __( 'Three Items', '__shortcodes__' ),
						'4'  => __( 'Four Items', '__shortcodes__' ),
						'5'  => __( 'Five Items', '__shortcodes__' ),
						'6'  => __( 'Six Items', '__shortcodes__' ),
						'7'  => __( 'Seven Items', '__shortcodes__' ),
						'8'  => __( 'Eight Items', '__shortcodes__' ),
						'9'  => __( 'Nine Items', '__shortcodes__' ),
						'10' => __( 'Ten Items', '__shortcodes__' ),
					),
				),
				'icon' => array(
					'std' => 'no-icon',
					'name' => __( 'Accordion Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to choose an icon for your accordion items, you may do so here.', '__shortcodes__' ),
					'key'  => 'accordion-icon',
					'type' => 'icon-select',
				),
				'margin-top' => array(
					'std' => '20',
					'name' => __( 'Accordion Margin Top', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, above your new accordion. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'accordion-margin-top',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'margin-bottom' => array(
					'std' => '20',
					'name' => __( 'Accordion Margin Bottom', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, below your new accordion. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'accordion-margin-bottom',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'color' => array(
					'std' => '#00C8D7',
					'name' => __( 'Accordion Accent Color', '__shortcodes__' ),
					'desc' => __( 'Choose an accent color for your accordion items. This will be visible when the item is open / active.', '__shortcodes__' ),
					'key'  => 'accordion-color',
					'type' => 'color',
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'accordion-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Alert shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-alert'] = array(
			'name'   => __( 'Alert Message', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'content' => array(
					'std'  => __( 'Finally, I get some attention around here!', '__shortcodes__' ),
					'name' => __( 'Alert Content', '__shortcodes__' ),
					'desc' => __( 'Create the content, or message, to be displayed on your new alert. This can be just about anything, so get creative.', '__shortcodes__' ),
					'key'  => 'alert-content',
					'type' => 'textarea',
				),
				'color' => array(
					'std'  => '#D3EDA3',
					'name' => __( 'Alert Color', '__shortcodes__' ),
					'desc' => __( 'Choose a background color for your alert message. You might consider ( #D3EDA3 - success ), ( #E1F2FA - info ), and ( #F5AB9E - error ).', '__shortcodes__' ),
					'key'  => 'alert-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#729640',
					'name' => __( 'Alert Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose a font color for your alert message. Particularly helpful when you have a dark background and need a lighter font.', '__shortcodes__' ),
					'key'  => 'alert-font-color',
					'type' => 'color',
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Alert Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to display a custom icon beside your alert content, you may choose one here.', '__shortcodes__' ),
					'key'  => 'alert-icon',
					'type' => 'icon-select',
				),
				'rounded' => array(
					'std'  => 1,
					'name' => __( 'Add rounded corners to alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-rounded',
					'type' => 'checkbox',
				),
				'dismiss' => array(
					'std'  => 1,
					'name' => __( 'Allow user to dismiss alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-dismiss',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'margin-top' => array(
					'std'  => '20',
					'name' => __( 'Alert Margin Top', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, above your new alert. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'alert-margin-top',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'margin-bottom' => array(
					'std'  => '20',
					'name' => __( 'Alert Margin Bottom', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, below your new alert. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'alert-margin-bottom',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'alert-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Button shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-button'] = array(
			'name'   => __( 'Button', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'text' => array(
					'std'  => __( 'Please click me mister...', '__shortcodes__' ),
					'name' => __( 'Button Text', '__shortcodes__' ),
					'desc' => __( 'What would you like your button to say? The text can be as creative, or as boring as you like.', '__shortcodes__' ),
					'key'  => 'button-text',
					'type' => 'text',
				),
				'link' => array(
					'std'  => __( 'http://www.google.com', '__shortcodes__' ),
					'name' => __( 'Button Link', '__shortcodes__' ),
					'desc' => __( 'Create the link you would like to send your visitor to when they click this button.', '__shortcodes__' ),
					'key'  => 'button-link',
					'type' => 'text',
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Button Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add a custom icon to your new button, you may choose your favorite here.', '__shortcodes__' ),
					'key'  => 'button-icon',
					'type' => 'icon-select',
				),
				'position' => array(
					'std'     => 'left',
					'name'    => __( 'Button Icon Position', '__shortcodes__' ),
					'desc'    => __( 'If you are using an icon on your button, you may choose whether to align it to the left or right.', '__shortcodes__' ),
					'key'     => 'button-pos',
					'type'    => 'select',
					'options' => array(
						'left'  => __( 'Align Icon to the Left', '__shortcodes__' ),
						'right' => __( 'Align Icon to the Right', '__shortcodes__' ),
					),
				),
				'color' => array(
					'std'  => '#00C8D7',
					'name' => __( 'Button Color', '__shortcodes__' ),
					'desc' => __( 'Choose a color for the background of your new button, Make it bright or keep it simple, the choice is yours.', '__shortcodes__' ),
					'key'  => 'button-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#FFFFFF',
					'name' => __( 'Button Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose a font color for your new button. Particularly helpful if you need a light font for a darker background.', '__shortcodes__' ),
					'key'  => 'button-font-color',
					'type' => 'color',
				),
				'style' => array(
					'std'     => 'flat',
					'name'    => __( 'Button Style', '__shortcodes__' ),
					'desc'    => __( 'Choose a style for your button. There are several pre-defined styles to choose from, depending on your needs.', '__shortcodes__' ),
					'key'     => 'button-style',
					'type'    => 'select',
					'options' => array(
						'flat'     => __( 'Flat / Metro Styled Button', '__shortcodes__' ),
						'gradient' => __( 'Gradient Styled button', '__shortcodes__' ),
					),
				),
				'size' => array(
					'std'     => 'medium',
					'name'    => __( 'Button Size', '__shortcodes__' ),
					'desc'    => __( 'Choose a size for your new button. There are currently three sizes to choose from, small, medium, and large.', '__shortcodes__' ),
					'key'     => 'button-size',
					'type'    => 'select',
					'options' => array(
						'small'  => __( 'Small Button', '__shortcodes__' ),
						'medium' => __( 'Medium Button', '__shortcodes__' ),
						'large'  => __( 'Large Button', '__shortcodes__' ),
					),
				),
				'rounded' => array(
					'std'  => 0,
					'name' => __( 'Add rounded corners to button?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-rounded',
					'type' => 'checkbox',
				),
				'target' => array(
					'std'  => 1,
					'name' => __( 'Open button link in new window?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-target',
					'type' => 'checkbox',
				),
				'animated' => array(
					'std'  => 1,
					'name' => __( 'Animate the button icon?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-animated',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'button-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Callout shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-callout'] = array(
			'name'   => __( 'Callout Block', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(

			)
		);


		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if