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
					'std' => '#729640',
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
					'std' => 1,
					'name' => __( 'Add rounded corners to alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-rounded',
					'type' => 'checkbox',
				),
				'dismiss' => array(
					'std' => 1,
					'name' => __( 'Allow user to dismiss alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-dismiss',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'margin-top' => array(
					'std' => '20',
					'name' => __( 'Alert Margin Top', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, above your new alert. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'alert-margin-top',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'margin-bottom' => array(
					'std' => '20',
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


		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if