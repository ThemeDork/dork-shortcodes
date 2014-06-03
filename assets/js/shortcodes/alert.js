;(function ($) {
    "use strict";

    var alert = $('.dork-alert');

    /**
     * Alert shortcode dismissal.
     *
     * @since v1.0.0
     */
    alert.each(function () {

        var alertAnimate = 'easeOutSine',
            alertClose   = $('.alert-close');

        // Close the alert when close icon is clicked
        alertClose.on('click', function (e) {

            // Animate slide up to close
            $(this).parent().fadeOut(300, alertAnimate);

            // Prevent default click behavior
            e.preventDefault();

        });

    });

})(jQuery);