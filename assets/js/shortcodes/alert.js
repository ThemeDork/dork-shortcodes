(function ($) {
    "use strict";

    var alertDismiss = $('.alert-close');

    // Allow dismissal of alert messages
    alertDismiss.on('click', function (e) {

        $(this).parent().fadeOut(500, function () {
            $(this).addClass('hidden');
        });

        // Prevent default
        e.preventDefault();

    });


})(jQuery);