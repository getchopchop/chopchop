;(function($){
    $(document).ready(function() {

        // =============================================
        // Global variables
        // =============================================

        var $body = $('body');


        // =============================================
        // Initialise toggles globally
        // =============================================

        ChopChop.init();


        // =============================================
        // Overlay
        // =============================================

        $('#overlay').on('chopchop:activate', function() {
            $body.addClass('overlay-is-active');
        });

        $('#overlay').on('chopchop:deactivate', function() {
            $body.removeClass('overlay-is-active');
        });

    });
}(jQuery));
