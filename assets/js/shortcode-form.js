;(function($) {
    "use strict";

    var shortcodeSelect = $('#shortcode-select'),
        shortcodeSubmit = $('#shortcode-submit'),
        iconSelect      = $('.dork-icon-select li'),
        colorSelect     = $('.dork-color-select li'),
        colorPicker     = $('.dork-color-picker'),
        colorPreview    = $('.color-picker-preview'),
        rangeSlider     = $('.dork-range-slider');


    /**
     * Begin compiling the parameters for our shortcode output.
     *
     * @since v1.0.0
     */
    $.fn.shortcodes = {

        // Button shortcode
        button: function () {

            // Button shortcode parameters
            var buttonText      = $('#button-text-text').val(),
                buttonLink      = $('#button-link-text').val(),
                buttonColor     = $('#button-color-text').val(),
                buttonFontColor = $('#button-font-color-text').val(),
                buttonSize      = $('#button-size-select').val(),
                buttonStyle     = $('#button-style-select').val(),
                buttonIcon      = $('#button-icon-icon-select').find('.selected').data('id'),
                buttonShadow    = $('#button-shadow-checkbox').prop('checked'),
                buttonTarget    = $('#button-target-checkbox').prop('checked'),
                buttonRounded   = $('#button-rounded-checkbox').prop('checked'),
                buttonClass     = $('#button-class-text').val(),
                output;

            // Remove no-icon value if exists
            if (buttonIcon === 'no-icon') { buttonIcon = ''; }

            // Shortcode form output
            output = '[button link="' + buttonLink + '" icon="' + buttonIcon + '" color="' + buttonColor + '" font_color="' + buttonFontColor + '" style="' + buttonStyle + '" size="' + buttonSize + '" shadow="' + buttonShadow + '" rounded="' + buttonRounded + '" new_window="' + buttonTarget + '" class="' + buttonClass + '"]' + buttonText + '[/button]';

            // Return the shortcode output
            return output;

        },

        // Divider shortcode
        divider: function () {

            // Divider shortcode parameters
            var dividerStyle = $('#divider-style-select').val(),
                dividerMTop  = $('#divider-margin-top-slider-value').html(),
                dividerMBot  = $('#divider-margin-bottom-slider-value').html(),
                dividerToTop = $('#divider-to-top-checkbox').prop('checked'),
                dividerClass = $('#divider-class-text').val(),
                output;

            // Shortcode form output
            output = '[divider style="' + dividerStyle + '" margin_top="' + dividerMTop + '" margin_bottom="' + dividerMBot + '" to_top="' + dividerToTop + '" class="' + dividerClass + '"]';

            // Return the shortcode output
            return output;

        },

        // Dropcap shortcode
        dropcap: function () {

            // Dropcap shortcode parameters
            var dropcapSymbol  = $('#dropcap-symbol-text').val(),
                dropcapStyle   = $('#dropcap-style-select').val(),
                dropcapSize    = $('#dropcap-size-select').val(),
                dropcapColor   = $('#dropcap-color-text').val(),
                dropcapBgColor = $('#dropcap-bg-color-text').val(),
                dropcapClass   = $('#dropcap-class-text').val(),
                output;

            // Shortcode form output
            output = '[dropcap style="' + dropcapStyle + '" size="' + dropcapSize + '" color="' + dropcapColor + '" bg_color="' + dropcapBgColor + '" class="' + dropcapClass + '"]' + dropcapSymbol + '[/dropcap]';

            // Return the shortcode output
            return output;

        },

        // Highlight shortcode
        highlight: function () {

            // Highlight shortcode parameters
            var highlightContent   = $('#highlight-content-textarea').val(),
                highlightColor     = $('#highlight-color-text').val(),
                highlightFontColor = $('#highlight-font-color-text').val(),
                highlightRounded   = $('#highlight-rounded-checkbox').prop('checked'),
                highlightClass     = $('#highlight-class-text').val(),
                output;

            // Shortcode form output
            output = '[highlight color="' + highlightColor + '" font_color="' + highlightFontColor + '" rounded="' + highlightRounded + '" class="' + highlightClass + '"]' + highlightContent + '[/highlight]';

            // Return the shortcode output
            return output;

        },

        // Tooltip shortcode
        tooltip: function () {

            // Tooltip shortcode parameters
            var tooltipText      = $('#tooltip-text-text').val(),
                tooltipContent   = $('#tooltip-content-textarea').val(),
                tooltipLink      = $('#tooltip-link-text').val(),
                tooltipDirection = $('#tooltip-direction-select').val(),
                tooltipTarget    = $('#tooltip-target-checkbox').prop('checked'),
                tooltipClass     = $('#tooltip-class-text').val(),
                output;

            // Shortcode form output
            output = '[tooltip text="' + tooltipText + '" link="' + tooltipLink + '" direction="' + tooltipDirection + '" new_window="' + tooltipTarget + '" class="' + tooltipClass + '"]' + tooltipContent + '[/tooltip]';

            // Return the shortcode output
            return output;
        }


    };


    /**
     * Send the shortcode output to the WordPress editor once the submit button has
     * been clicked.
     *
     * @since v1.0.0
     */
    shortcodeSubmit.unbind().on('click', function (e) {

        // Get the currently selected shortcode
        var shortcodeSelect = $('#shortcode-select'),
            shortcode       = shortcodeSelect.val().replace('dork-', ''),
            output          = $.fn.shortcodes[shortcode](),
            wysiwyg;

        // Determine if the tinyMCE editor is active
        if  (typeof 'undefined' !== tinyMCE && tinyMCE.activeEditor && !tinyMCE.activeEditor.isHidden() ) {
            wysiwyg = true;
        }

        // Remove the line breaks if plain text editor is active
        if (!wysiwyg) {
            output = output.replace(/<br\/>/g, '\n');
        }

        // Send the shortcode output to the editor
        window.send_to_editor(output);

        // Prevent default click behavior
        e.preventDefault();

    });


    /**
     * Load the shortcode form that corresponds to a newly selected item from our
     * shortcode select list.
     *
     * @since v1.0.0
     */
    shortcodeSelect.on('change', function (e) {

        var shortcode        = $(this).val(),
            shortcodeContent = $('.shortcode-content-display'),
            shortcodeForm    = $('#dork-' + shortcode + '-form');

        // Disable our shortcode submit button if no selection
        shortcodeSubmit.attr('disabled', true);

        // Verify that a shortcode is selected before continuing
        if (shortcode !== '') {

            // Load our shortcode forms as needed
            shortcodeContent.fadeOut('fast').delay(400);
            shortcodeForm.slideDown(2000);

            // Enable the shortcode submit button
            shortcodeSubmit.removeAttr('disabled');

        } // End if

        // Prevent default
        e.preventDefault();

    });


    /**
     * Add select functionality to our custom icon select fields.
     *
     * @since v1.0.0
     */
    iconSelect.on('click', function(e) {

        var iconSiblings = $(this).siblings();

        // Remove the selected class from items
        iconSiblings.removeClass('selected');

        // Add the selected class to the user selected item
        $(this).addClass('selected');

        // Prevent default
        e.preventDefault();

    });


    /**
     * Add functionality to our color picker fields.
     *
     * @since v1.0.0
     */

    // Set preview color based on default value
    colorPicker.each(function() {
        $(this).parent().find(colorPreview).css('color', this.value);
    });

    // Attach the color picker to input field and update when value changes
    colorPicker.colpick({
        layout: 'full',
        submit: 0,
        colorScheme: 'light',
        onChange: function(hsb,hex,rgb,el,bySetColor) {
            $(el).parent().find('.color-picker-preview i').css('color', '#' + hex);
            if ( ! bySetColor) { $(el).val('#' + hex); }
        },
        onBeforeShow: function(el) {
            $(this).colpickSetColor(this.value);
        }
    }).keyup(function() {
        $(this).colpickSetColor(this.value);
    });


    /**
     * Add functionality to the range slider control.
     *
     * @since v1.0.0
     */
    rangeSlider.each(function() {
        $(this).noUiSlider({
            start        : $(this).data('start'),
            orientation  : 'horizontal',
            connect: 'lower',
            range        : {
                'min': 0,
                'max': 100
            },
            serialization: {
                lower : [
                    $.Link({
                        target: $(this).next('.range-slider-value')
                    })
                ],
                format: {
                    postfix: $(this).data('units'),
                    decimals: 0
                }
            }
        });
    });

})(jQuery);