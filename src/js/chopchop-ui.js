;(function($){
$(document).on('ready', function() {

        // =============================================
        // Cookie to show menu
        // =============================================

        var $ccNav = $('#cc-nav'),
            $body = $('body');

        if($.cookie('cc-nav') == 1) {
            $ccNav.data('chopchop-toggle').activate();
            $body.addClass('has-cc-nav-active');
        }

        $ccNav.on('toggleactivate', function() {
            $.cookie('cc-nav', [1], { expires: 30, path: '/' });
            $body.addClass('has-cc-nav-active');
        });

        $ccNav.on('toggledeactivate', function() {
            $.cookie('cc-nav', [0], { expires: 30, path: '/' });
            $body.removeClass('has-cc-nav-active');
        });

    });
}(jQuery));
