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

        // Accordion shortcode parameters
        var accordionItems     = $('#accordion-items-select').val(),
            accordionBasic     = $('#accordion-basic-checkbox').prop('checked'),
            accordionRounded   = $('#accordion-rounded-checkbox').prop('checked'),
            accordionClass     = $('#accordion-class-text').val();

        // Alert shortcode parameters
        var alertHeading   = $('#alert-heading-text').val(),
            alertContent   = $('#alert-content-textarea').val(),
            alertIcon      = $('#alert-icon-icon-select').find('.selected').data('id'),
            alertDismiss   = $('#alert-dismiss-checkbox').prop('checked'),
            alertCompact   = $('#alert-compact-checkbox').prop('checked'),
            alertShadow    = $('#alert-shadow-checkbox').prop('checked'),
            alertPreColor  = $('#alert-pre-color-select').val(),
            alertColor     = $('#alert-color-text').val(),
            alertFontColor = $('#alert-font-color-text').val(),
            alertSize      = $('#alert-size-select').val(),
            alertClass     = $('#alert-class-text').val();

        // Divider shortcode parameters
        var dividerText = $('#divider-text-text').val(),
            dividerIcon = $('#divider-icon-icon-select').find('.selected').data('id'),
            dividerStyle = $('#divider-style-select').val(),
            dividerColor = $('#divider-color-text').val(),
            dividerMTop = $('#divider-margin-top-slider-value').html(),
            dividerMBot = $('#divider-margin-bottom-slider-value').html(),
            dividerClass = $('#divider-class-text').val();


        // Progress bar shortcode parameters
        var progressLabel    = $('#progress-label-text').val(),
            progressPercent  = $('#progress-completion-slider-value').html(),
            progressPreColor = $('#progress-pre-color-select').val(),
            progressColor    = $('#progress-color-text').val(),
            progressStriped  = $('#progress-striped-checkbox').prop('checked'),
            progressAnimated = $('#progress-animated-checkbox').prop('checked'),
            progressClass    = $('#progress-class-text').val();

        // Heading shortcode parameters
        var headingText      = $('#heading-text-text').val(),
            headingIcon      = $('#heading-icon-icon-select').find('.selected').data('id'),
            headingPosition  = $('#heading-position-select').val(),
            headingSize      = $('#heading-size-select').val(),
            headingStyle     = $('#heading-style-select').val(),
            headingColor     = $('#heading-color-text').val(),
            headingTopMargin = $('#heading-top-margin-slider-value').html(),
            headingBotMargin = $('#heading-bottom-margin-slider-value').html(),
            headingClass     = $('#heading-class-text').val();

        // Highlight shortcode parameters
        var highlightContent = $('#highlight-content-text').val(),
            highlightColor = $('#highlight-color-text').val(),
            highlightFontColor = $('#highlight-font-color-text').val(),
            highlightRounded = $('#highlight-rounded-checkbox').prop('checked'),
            highlightClass = $('#highlight-class-text').val();

        // List shortcode parameters
        var listItems = $('#list-items-select').val(),
            listIcon = $('#list-icon-icon-select').find('.selected').data('id'),
            listColor = $('#list-color-text').val(),
            listCircular = $('#list-circular-checkbox').prop('checked'),
            listAnimated = $('#list-animated-checkbox').prop('checked'),
            listDivided = $('#list-divided-checkbox').prop('checked'),
            listSize = $('#list-size-select').val(),
            listClass = $('#list-class-text').val();

        // Tooltip shortcode parameters
        var tooltipTitle = $('#tooltip-title-text').val(),
            tooltipPlacement = $('#tooltip-placement-select').val();

        // No need to run anything if a shortcode hasn't been selected
        if (shortcode !== '') {

            /**
             * Accordion shortcode.
             *
             * @since v1.0.0
             */
            if (shortcode === 'dork-accordion') {

                // Form output
                output = '[accordion basic="' + accordionBasic + '" rounded="' + accordionRounded + '" class="' + accordionClass + '"]' + '<br/>';

                for (var i = 1; i <= accordionItems; i++) {
                    output += '[accordion_item title="Accordion Title #' + i + '" open="false"]Accordion Content #' + i + '[/accordion_item]' + '<br/>';
                } // End for

                output += '[/accordion]';

                /**
                 * Alert shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-alert') {

                // Form output
                output = '[alert heading="' + alertHeading + '" icon="' + alertIcon + '" dismiss="' + alertDismiss + '" compact="' + alertCompact + '" shadow="' + alertShadow + '" color_scheme="' + alertPreColor + '" bg_color="' + alertColor + '" font_color="' + alertFontColor + '" size="' + alertSize + '" class="' + alertClass + '"]' + alertContent + '[/alert]';

                /**
                 * Divider shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-divider') {

                // Form output
                output = '[divider text="' + dividerText + '" icon="' + dividerIcon + '" style="' + dividerStyle + '" color="' + dividerColor + '" margin_top="' + dividerMTop + '" margin_bottom="' + dividerMBot + '" class="' + dividerClass + '"]';

                /**
                 * Heading shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-heading') {

                // Form output
                output = '[heading icon="' + headingIcon + '" position="' + headingPosition + '" size="' + headingSize + '" style="' + headingStyle + '" color="' + headingColor + '" top_margin="' + headingTopMargin + '" bottom_margin="' + headingBotMargin + '" class="' + headingClass + '"]' + headingText + '[/heading]';

                /**
                 * Highlight shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-highlight') {

                // Form output
                output = '[highlight color="' + highlightColor + '" font_color="' + highlightFontColor + '" rounded="' + highlightRounded + '" class="' + highlightClass + '"]' + highlightContent + '[/highlight]';

                /**
                 * List shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-list') {

                // Form output
                output = '[list animated="' + listAnimated + '" divided="' + listDivided + '" size="' + listSize + '" class="' + listClass + '"]' + '<br/>';

                for (var i = 1; i <= listItems; i++) {
                    output += '[list_item icon="' + listIcon + '" color="' + listColor + '" circular="' + listCircular + '"]List Content #' + i + '[/list_item]' + '<br/>';
                } // End for

                output += '[/list]';

                /**
                 * Progress bar shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-progress') {

                // Form output
                output = '[progress percentage="' + progressPercent + '" color_scheme="' + progressPreColor + '" bg_color="' + progressColor + '" striped="' + progressStriped + '" animated="' + progressAnimated + '" class="' + progressClass + '"]' + progressLabel + '[/progress]';

                /**
                 * Tooltip shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-tooltip') {

                // Form output
                output = '[tooltip title="' + tooltipTitle + '" placement="' + tooltipPlacement + '"][/tooltip]';

            }

            // Insert our shortcode into the tinyMCE editor
            window.send_to_editor(output);

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
                    postfix: $(this).data('units'),
                    decimals: 0
                }
            }
        });
    });

})(jQuery);