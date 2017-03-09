;(function($){
$(document).on('ready', function() {

        // =============================================
        // Cookie to show menu
        // =============================================

        var $ccNav = $('#cc-nav'),
            $body = $('body');

            console.log(Cookies.set('cc-nav'));

        if(Cookies.set('cc-nav') == 1) {
            $ccNav.data('chopchop-toggle').activate();
            $body.addClass('has-cc-nav-active');
        }

        $ccNav.on('toggleactivate', function() {
            Cookies.set('cc-nav', 1, { expires: 30, path: '/' });
            $body.addClass('has-cc-nav-active');
        });

        $ccNav.on('toggledeactivate', function() {
            Cookies.set('cc-nav', 0, { expires: 30, path: '/' });
            $body.removeClass('has-cc-nav-active');
        });

    });
}(jQuery));
