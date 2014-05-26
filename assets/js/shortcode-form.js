(function($) {
    "use strict";

    var shortcodeSelect = $('#shortcode-select'),
        shortcodeSubmit = $('#shortcode-submit'),
        iconSelect      = $('.dork-icon-select li'),
        colorSelect     = $('.dork-color-select li'),
        colorPicker     = $('.dork-color-picker'),
        colorPreview    = $('.color-picker-preview'),
        rangeSlider     = $('.dork-range-slider');


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
     * Begin compiling each of our shortcodes so that they can be sent to the tinyMCE
     * editor when the user clicks the submit button.
     *
     * @since v1.0.0
     */
    shortcodeSubmit.on('click', function (e) {

        // Get the currently selected shortcode
        var shortcodeSelect = $('#shortcode-select'),
            shortcode       = shortcodeSelect.val(),
            output;

        // Accordion shortcode variables
        var accordionCount = $('#accordion-count-select').val(),
            accordionIcon  = $('#accordion-icon-icon-select').find('.selected').data('id'),
            accordionBasic = $('#accordion-basic-checkbox').prop('checked'),
            accordionClass = $('#accordion-class-text').val();

        // Alert shortcode variables
        var alertHeading = $('#alert-heading-text').val(),
            alertContent = $('#alert-content-textarea').val(),
            alertColor   = $('#alert-color-color-select').find('.selected').data('id'),
            alertIcon    = $('#alert-icon-icon-select').find('.selected').data('id'),
            alertSize    = $('#alert-size-select').val(),
            alertDismiss = $('#alert-dismiss-checkbox').prop('checked'),
            alertClass   = $('#alert-class-text').val();

        // Button shortcode variables
        var buttonText      = $('#button-text-text').val(),
            buttonLink      = $('#button-link-text').val(),
            buttonIcon      = $('#button-icon-icon-select').find('.selected').data('id'),
            buttonColor     = $('#button-color-text').val(),
            buttonFontColor = $('#button-font-color-text').val(),
            buttonFullwidth = $('#button-fullwidth-checkbox').prop('checked'),
            buttonTarget    = $('#button-target-checkbox').prop('checked'),
            buttonRounded   = $('#button-rounded-checkbox').prop('checked'),
            buttonAnimated  = $('#button-animated-checkbox').prop('checked'),
            buttonPosition  = $('#button-position-select').val(),
            buttonSize      = $('#button-size-select').val(),
            buttonClass     = $('#button-class-text').val();

        // Blockquote shortcode variables
        var blockquoteContent  = $('#blockquote-content-textarea').val(),
            blockquoteCite     = $('#blockquote-cite-text').val(),
            blockquoteLink     = $('#blockquote-link-text').val(),
            blockquoteTarget   = $('#blockquote-target-checkbox').prop('checked'),
            blockquoteBasic    = $('#blockquote-basic-checkbox').prop('checked'),
            blockquoteColor    = $('#blockquote-color-text').val(),
            blockquotePosition = $('#blockquote-position-select').val(),
            blockquoteClass    = $('#blockquote-class-text').val();

        // Divider shortcode variables
        var dividerStyle        = $('#divider-style-select').val(),
            dividerMarginTop    = $('#divider-margin-top-slider-value').html(),
            dividerMarginBottom = $('#divider-margin-bottom-slider-value').html(),
            dividerColor        = $('#divider-color-text').val(),
            dividerClass        = $('#divider-class-text').val();

        // Dropcap shortcode variables
        var dropcapSymbol    = $('#dropcap-symbol-text').val(),
            dropcapStyle     = $('#dropcap-style-select').val(),
            dropcapColor     = $('#dropcap-color-text').val(),
            dropcapFontColor = $('#dropcap-font-color-text').val(),
            dropcapSize      = $('#dropcap-size-select').val(),
            dropcapClass     = $('#dropcap-class-text').val();

        // Headline shortcode variables
        var headlineText         = $('#headline-text-text').val(),
            headlineIcon         = $('#headline-icon-icon-select').find('.selected').data('id'),
            headlineAnimated     = $('#headline-animated-checkbox').prop('checked'),
            headlineColor        = $('#headline-color-text').val(),
            headlineStyle        = $('#headline-style-select').val(),
            headlineSize         = $('#headline-size-select').val(),
            headlineMarginTop    = $('#headline-margin-top-slider-value').html(),
            headlineMarginBottom = $('#headline-margin-bottom-slider-value').html(),
            headlineClass        = $('#headline-class-text').val();

        // No need to run anything if a shortcode hasn't been selected
        if (shortcode !== '') {

            /**
             * Accordion shortcode.
             *
             * @since v1.0.0
             */
            if (shortcode === 'dork-accordion') {

                output = '[accordion basic="' + accordionBasic + '" class="' + accordionClass + '"]' + '<br/>';

                for (var i = 1; i <= accordionCount; i++) {
                    output += '[accordion_section title="Accordion Title #' + i + '" icon="' + accordionIcon + '" open="false"]Accordion Content #' + i + '[/accordion_section]' + '<br/>';
                } // End for

                output += '[/accordion]';

                /**
                 * Alert shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-alert') {

                output = '[alert heading="' + alertHeading + '" color="' + alertColor + '" icon="' + alertIcon + '" size="' + alertSize + '" dismiss="' + alertDismiss + '" class="' + alertClass + '"]' + alertContent + '[/alert]';

                /**
                 * Blockquote shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-blockquote') {

                output = '[blockquote cite="' + blockquoteCite + '" link="' + blockquoteLink + '" new_window="' + blockquoteTarget + '" basic="' + blockquoteBasic + '" accent_color="' + blockquoteColor + '" position="' + blockquotePosition + '" class="' + blockquoteClass + '"]' + blockquoteContent + '[/blockquote]';

                /**
                 * Button shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-button') {

                output = '[button link="' + buttonLink + '" icon="' + buttonIcon + '" icon_position="' + buttonPosition + '" color="' + buttonColor + '" font_color="' + buttonFontColor + '" full_width="' + buttonFullwidth + '" new_window="' + buttonTarget + '" rounded="' + buttonRounded + '" animated="' + buttonAnimated + '" size="' + buttonSize + '" class="' + buttonClass + '"]' + buttonText + '[/button]';

                /**
                 * Divider shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-divider') {

                output = '[divider style="' + dividerStyle + '" top_margin="' + dividerMarginTop + '" bottom_margin="' + dividerMarginBottom + '" color="' + dividerColor + '" class="' + dividerClass + '"]';

                /**
                 * Dropcap shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-dropcap') {

                output = '[dropcap style="' + dropcapStyle + '" bg_color="' + dropcapColor + '" font_color="' + dropcapFontColor + '" size="' + dropcapSize + '" class="' + dropcapClass + '"]' + dropcapSymbol + '[/dropcap]';

                /**
                 * Headline shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-headline') {

                output = '[headline icon="' + headlineIcon + '" animated="' + headlineAnimated + '" color="' + headlineColor + '" style="' + headlineStyle + '" size="' + headlineSize + '" top_margin="' + headlineMarginTop + '" bottom_margin="' + headlineMarginBottom + '" class="' + headlineClass + '"]' + headlineText + '[/headline]';

            }

            // Insert our shortcode into the tinyMCE editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', false, output);

        }


        // Prevent default
        e.preventDefault();

    });

    /**
     * Add select functionality to our custom icon select fields.
     *
     * @since v1.0.0
     */
    iconSelect.on('click', function() {

        var iconSiblings = $(this).siblings();

        // Remove the selected class from items
        iconSiblings.removeClass('selected');

        // Add the selected class to the user selected item
        $(this).addClass('selected');

        // Prevent default
        return false;

    });


    /**
     * Add select functionality to our custom color select fields.
     *
     * @since v1.0.0
     */
    colorSelect.on('click', function() {

        var colorSiblings = $(this).siblings();

        // Remove the selected class from items
        colorSiblings.removeClass('selected');

        // Add the selected class to the user selected item
        $(this).addClass('selected');

        // Prevent default
        return false;

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
                    postfix: 'px',
                    decimals: 0
                }
            }
        });
    });

})(jQuery);