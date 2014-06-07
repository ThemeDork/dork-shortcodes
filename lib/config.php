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
		 * Button shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-button'] = array(
			'name'   => __( 'Button', '__scLang__' ),
			'desc'   => __( '', '__scLang__' ),
			'params' => array(
				'text' => array(
					'std'  => __( 'Please click me mister...', '__scLang__' ),
					'name' => __( 'Button Text', '__shortcodes__' ),
					'desc' => __( 'Define the text that you would like to display on your new button. It can say just about anything so have some fun with it.', '__scLang__' ),
					'key'  => 'button-text',
					'type' => 'text',
				),
				'link' => array(
					'std'  => __( 'http://www.google.com', '__scLang__' ),
					'name' => __( 'Button Link / URL', '__scLang__' ),
					'desc' => __( 'Where would you like to send the user when they click on your button? You may define the link URL here.', '__scLang__' ),
					'key'  => 'button-link',
					'type' => 'text',
				),
				'color' => array(
					'std'  => '#00C8D7',
					'name' => __( 'Button Color', '__scLang__' ),
					'desc' => __( 'Choose a custom color for your new button. This can be any color of your choosing, bright or dull, its up to you.', '__scLang__' ),
					'key'  => 'button-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#FFFFFF',
					'name' => __( 'Button Font Color', '__scLang__' ),
					'desc' => __( 'Choose a font color for your new button. Great for adding light text to a darker button! Hint...hint...', '__scLang__' ),
					'key'  => 'button-font-color',
					'type' => 'color',
				),
				'size' => array(
					'std'     => 'medium',
					'name'    => __( 'Button Size', '__scLang__' ),
					'desc'    => __( 'What size would you like your button to be? Small, medium or large, you get to decide...', '__scLang__' ),
					'key'     => 'button-size',
					'type'    => 'select',
					'options' => array(
						'small'  => __( 'Small Button', '__scLang__' ),
						'medium' => __( 'Medium Button', '__scLang__' ),
						'large'  => __( 'Large Button', '__scLang__' ),
					),
				),
				'style' => array(
					'std'     => 'standard',
					'name'    => __( 'Button Style', '__scLang__' ),
					'desc'    => __( 'Choose a style for your new button. There are several styles to choose from, depending on your preferences.', '__scLang__' ),
					'key'     => 'button-style',
					'type'    => 'select',
					'options' => array(
						'standard' => __( 'Standard Button', '__scLang__' ),
						'outlined' => __( 'Outlined Button', '__scLang__' ),
						'animated' => __( 'Animated Button', '__scLang__' ),
					),
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Button Icon', '__scLang__' ),
					'desc' => __( 'If you would like to add an icon to your button, or have chosen the animated button from the style list, you may choose your icon here.', '__scLang__' ),
					'key'  => 'button-icon',
					'type' => 'icon-select',
				),
				'shadow' => array(
					'std'  => 1,
					'name' => __( 'Add a drop shadow to this button?', '__scLang__' ),
					'desc' => __( '', '__scLang__' ),
					'key'  => 'button-shadow',
					'type' => 'checkbox',
				),
				'target' => array(
					'std'  => 1,
					'name' => __( 'Open link in new window?', '__scLang__' ),
					'desc' => __( '', '__scLang__' ),
					'key'  => 'button-target',
					'type' => 'checkbox',
				),
				'rounded' => array(
					'std'  => 0,
					'name' => __( 'Add rounded corners to this button?', '__scLang__' ),
					'desc' => __( '', '__scLang__' ),
					'key'  => 'button-rounded',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__scLang__' ),
					'name' => __( 'Custom CSS Class', '__scLang__' ),
					'desc' => __( 'Here you have the option to add a custom CSS class. This would allow you to override, or add to, the default styles of this element.', '__scLang__' ),
					'key'  => 'button-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Column shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-column'] = array(
			'name'   => __( 'Column', '__scLang__' ),
			'desc'   => __( '', '__scLang__' ),
			'params' => array(

			)
		);


		/**
		 * Divider shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-divider'] = array(
			'name'   => __( 'Divider', '__scLang__' ),
			'desc'   => __( '', '__scLang__' ),
			'params' => array(
				'style' => array(
					'std'     => 'single',
					'name'    => __( 'Divider Style', '__scLang__' ),
					'desc'    => __( 'Choose the style of divider that you would like to create. There are several styles to choose from.', '__scLang__' ),
					'key'     => 'divider-style',
					'type'    => 'select',
					'options' => array(
						'blank'  => __( 'Blank Spacer / No Line' ),
						'single' => __( 'Single Divider', '__scLang__' ),
						'thick'  => __( 'Single Thick Divider', '__scLang__' ),
						'dashed' => __( 'Single Dashed Divider', '__scLang__' ),
						'dotted' => __( 'Single Dotted Divider', '__scLang__' ),
						'double' => __( 'Double Divider', '__scLang__' ),
						'shadow' => __( 'Shadow Divider', '__scLang__' ),
					),
				),
				'margin-top' => array(
					'std'     => '20',
					'name'    => __( 'Divider Top Margin', '__scLang__' ),
					'desc'    => __( 'Adjust the margin, or space, above your new divider. Helpful if you would like to add more space between content.', '__scLang__' ),
					'key'     => 'divider-margin-top',
					'type'    => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'margin-bottom' => array(
					'std'     => '20',
					'name'    => __( 'Divider Bottom Margin', '__scLang__' ),
					'desc'    => __( 'Adjust the margin, or space, below your new divider. Helpful if you would like to add more space between content.', '__scLang__' ),
					'key'     => 'divider-margin-bottom',
					'type'    => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'to-top' => array(
					'std'  => 0,
					'name' => __( 'Add a "Go to top" link to divider?', '__scLang__' ),
					'desc' => __( '', '__scLang__' ),
					'key'  => 'divider-to-top',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__scLang__' ),
					'name' => __( 'Custom CSS Class', '__scLang__' ),
					'desc' => __( 'Here you have the option to add a custom CSS class. This would allow you to override, or add to, the default styles of this element.', '__scLang__' ),
					'key'  => 'divider-class',
					'type' => 'text',
				),

			)
		);


		/**
		 * Dropcap shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-dropcap'] = array(
			'name'   => __( 'Dropcap', '__scLang__' ),
			'desc'   => __( '', '__scLang__' ),
			'params' => array(
				'symbol' => array(
					'std'  => 'R',
					'name' => __( 'Dropcap Symbol', '__scLang__' ),
					'desc' => __( 'Define the symbol, or letter, for your new dropcap. Typically the first letter of your sentence.', '__scLang__' ),
					'key'  => 'dropcap-symbol',
					'type' => 'text',
				),
				'style' => array(
					'std'     => 'round',
					'name'    => __( 'Dropcap Style', '__scLang__' ),
					'desc'    => __( 'Choose a style for your new dropcap. There are several styles to choose from depending on your preferences.', '__scLang__' ),
					'key'     => 'dropcap-style',
					'type'    => 'select',
					'options' => array(
						'plain'  => __( 'Plain Dropcap / No Background', '__scLang__' ),
						'round'  => __( 'Dropcap with Round Background', '__scLang__' ),
						'square' => __( 'Dropcap with Square Background', '__scLang__' ),
					),
				),
				'size' => array(
					'std'     => 'medium',
					'name'    => __( 'Dropcap Size', '__scLang__' ),
					'desc'    => __( 'Choose a size for your dropcap. You can choose from small, medium or large.', '__scLang__' ),
					'key'     => 'dropcap-size',
					'type'    => 'select',
					'options' => array(
						'small'  => __( 'Small Dropcap', '__scLang__' ),
						'medium' => __( 'Medium Dropcap', '__scLang__' ),
						'large'  => __( 'Large Dropcap', '__scLang__' ),
					),
				),
				'color' => array(
					'std'  => '#777777',
					'name' => __( 'Dropcap Font Color', '__scLang__' ),
					'desc' => __( 'Choose a font color for your new dropcap. If you are using a dark background, you may want to use a lighter font.', '__scLang__' ),
					'key'  => 'dropcap-color',
					'type' => 'color',
				),
				'bg-color' => array(
					'std'  => '#E5E5E5',
					'name' => __( 'Dropcap Background Color', '__scLang__' ),
					'desc' => __( 'If you have chosen a dropcap style with a background, you can pick a color for that background here.', '__scLang__' ),
					'key'  => 'dropcap-bg-color',
					'type' => 'color',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__scLang__' ),
					'name' => __( 'Custom CSS Class', '__scLang__' ),
					'desc' => __( 'Here you have the option to add a custom CSS class. This would allow you to override, or add to, the default styles of this element.', '__scLang__' ),
					'key'  => 'dropcap-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Highlight shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-highlight'] = array(
			'name'   => __( 'Highlight', '__scLang__' ),
			'desc'   => __( '', '__scLang__' ),
			'params' => array(
				'content' => array(
					'std'  => __( 'I\'ll be the highlight of the party...', '__scLang__' ),
					'name' => __( 'Highlight Content', '__scLang__' ),
					'desc' => __( 'Create the content to be highlighted. You can write as much, or as little as you would like.', '__scLang__' ),
					'key'  => 'highlight-content',
					'type' => 'textarea',
				),
				'color' => array(
					'std'  => '#00C8D7',
					'name' => __( 'Highlight Color', '__scLang__' ),
					'desc' => __( 'Choose a color for your highlight. Brighter colors tend to stand out and get noticed, but its up to you.', '__scLang__' ),
					'key'  => 'highlight-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#FFFFFF',
					'name' => __( 'Highlight Font Color', '__scLang__' ),
					'desc' => __( 'Pick a font color for your highlight. You might consider using a lighter font on a dark background.', '__scLang__' ),
					'key'  => 'highlight-font-color',
					'type' => 'color',
				),
				'rounded' => array(
					'std'  => 0,
					'name' => __( 'Make this highlight rounded?', '__scLang__' ),
					'desc' => __( '', '__scLang__' ),
					'key'  => 'highlight-rounded',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__scLang__' ),
					'name' => __( 'Custom CSS Class', '__scLang__' ),
					'desc' => __( 'Here you have the option to add a custom CSS class. This would allow you to override, or add to, the default styles of this element.', '__scLang__' ),
					'key'  => 'highlight-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Tooltip shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-tooltip'] = array(
			'name'   => __( 'Tooltip', '__scLang__' ),
			'desc'   => __( '', '__scLang__' ),
			'params' => array(
				'text' => array(
					'std'  => __( 'Hi there! I am a tooltip...', '__scLang__' ),
					'name' => __( 'Tooltip Text', '__scLang__' ),
					'desc' => __( 'This will be the text that is displayed on your tooltip. So when the user opens the tooltip, they will see what you put here.', '__scLang__' ),
					'key'  => 'tooltip-text',
					'type' => 'text',
				),
				'content' => array(
					'std'  => __( 'Hover me to see a tooltip...Yay!', '__scLang__' ),
					'name' => __( 'Tooltip Content', '__scLang__' ),
					'desc' => __( 'Here you will create the content that the user will hover over to see your new tooltip. It can be a few words or a whole paragraph if you want.', '__scLang__' ),
					'key'  => 'tooltip-content',
					'type' => 'textarea',
				),
				'link' => array(
					'std'  => __( 'http://www.google.com', '__scLang__' ),
					'name' => __( 'Tooltip Link', '__scLang__' ),
					'desc' => __( 'If you would like to send the user to another page when they click on your tooltip content created above, you may define the link to that page here. Or just leave it blank.', '__scLang__' ),
					'key'  => 'tooltip-link',
					'type' => 'text',
				),
				'direction' => array(
					'std'     => 'top',
					'name'    => __( 'Tooltip Direction', '__scLang__' ),
					'desc'    => __( 'Choose the direction, or position, of where your tooltip will open. May need to be modified based on where your tooltip is placed.', '__scLang__' ),
					'key'     => 'tooltip-direction',
					'type'    => 'select',
					'options' => array(
						'top'    => __( 'Tooltip on Top', '__scLang__' ),
						'bottom' => __( 'Tooltip on Bottom', '__scLang__' ),
						'left'   => __( 'Tooltip to the Left', '__scLang__' ),
						'right'  => __( 'Tooltip to the Right', '__scLang__' ),
					),
				),
				'target' => array(
					'std'  => 1,
					'name' => __( 'Open tooltip link in new window?', '__scLang__' ),
					'desc' => __( '', '__scLang__' ),
					'key'  => 'tooltip-target',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__scLang__' ),
					'name' => __( 'Custom CSS Class', '__scLang__' ),
					'desc' => __( 'Here you have the option to add a custom CSS class. This would allow you to override, or add to, the default styles of this element.', '__scLang__' ),
					'key'  => 'tooltip-class',
					'type' => 'text',
				),
			)
		);


		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if