;(function($){
    $(document).ready(function() {

        // =============================================
        // Cookie to show menu
        // =============================================

        var $ccNav = $('#cc-nav'),
            $body = $('body');

        checkCookie();

        function checkCookie() {
            if($.cookie('cc-nav') == 1) {
                $ccNav.chopchop('toggle', 'activate');
                $body.addClass('has-cc-nav-active');
            }
        }

        $ccNav.on('chopchop:activate', function() {
            $.cookie('cc-nav', [1], { expires: 30, path: '/' });
            $body.addClass('has-cc-nav-active'); 
        });

        $ccNav.on('chopchop:deactivate', function() {
            $.cookie('cc-nav', [0], { expires: 30, path: '/' });
            $body.removeClass('has-cc-nav-active'); 
        });

    });
}(jQuery));
