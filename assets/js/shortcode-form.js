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

        // Accordion shortcode
        accordion: function () {

            // Accordion shortcode parameters
            var accordionItems = $('#accordion-items-select').val(),
                accordionIcon  = $('#accordion-icon-icon-select').find('.selected').data('id'),
                accordionColor = $('#accordion-color-text').val(),
                accordionMTop  = $('#accordion-margin-top-slider-value').html(),
                accordionMBot  = $('#accordion-margin-bottom-slider-value').html(),
                accordionClass = $('#accordion-class-text').val(),
                output;

            // Shortcode form output
            output = '[accordion color="' + accordionColor + '" margin_top="' + accordionMTop + '" margin_bottom="' + accordionMBot + '" class="' + accordionClass + '"]' + '<br/>';

            for (var i = 1; i <= accordionItems; i++) {

                output += '[accordion_item title="Accordion Title #' + i + '" icon="' + accordionIcon + '"]Accordion Content #' + i + '[/accordion_item]' + '<br/>';

            }

            output += '[/accordion]';

            // Return the shortcode output
            return output;

        },

        // Alert shortcode
        alert: function () {

            // Alert shortcode parameters
            var alertContent   = $('#alert-content-textarea').val(),
                alertColor     = $('#alert-color-text').val(),
                alertFontColor = $('#alert-font-color-text').val(),
                alertIcon      = $('#alert-icon-icon-select').find('.selected').data('id'),
                alertRounded   = $('#alert-rounded-checkbox').prop('checked'),
                alertDismiss   = $('#alert-dismiss-checkbox').prop('checked'),
                alertMTop      = $('#alert-margin-top-slider-value').html(),
                alertMBot      = $('#alert-margin-bottom-slider-value').html(),
                alertClass     = $('#alert-class-text').val(),
                output;

            // Shortcode form output
            output = '[alert color="' + alertColor + '" font_color="' + alertFontColor + '" icon="' + alertIcon + '" rounded="' + alertRounded + '" dismiss="' + alertDismiss + '" margin_top="' + alertMTop + '" margin_bottom="' + alertMBot + '" class="' + alertClass + '"]' + alertContent + '[/alert]';

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
                    postfix: $(this).data('units'),
                    decimals: 0
                }
            }
        });
    });

})(jQuery);