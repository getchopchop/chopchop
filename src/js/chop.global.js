;(function($){
    $(document).on('ready', function() {

        // =============================================
        // Overlay
        // =============================================

        $('#overlay').on('toggleactivate', function() {
            $('body').addClass('has-active-overlay');
        });

        $('#overlay').on('toggledeactivate', function() {
            $('body').removeClass('has-active-overlay');
        });

    });
}(jQuery));
