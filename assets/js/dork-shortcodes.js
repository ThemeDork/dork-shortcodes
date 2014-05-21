(function($) {
    "use strict";

    /**
     * Accordion shortcode functionality, uses jQuery UI accordion.
     *
     * @since v1.0.0
     */

    if ($('.dork-accordion').length) {

        var accordion = $('.dork-accordion'),
            title = $('.accordion-title');

        accordion.each(function() {

            var title = $('.accordion-title');

            title.on('click', function() {

                if ($(this).next().is(':hidden')) {

                    title.removeClass('active').next().slideUp(500);
                    $(this).toggleClass('active').next().slideDown(500);

                } else if ($(this).hasClass('active')) {

                    $(this).removeClass('active').next().slideUp(500);

                }

                // Prevent default
                return false;

            });

        });

    }

})(jQuery);