;(function($){
    $(document).on('ready', function() {

        // =============================================
        // Global variables
        // =============================================

        var $body   = $('body');
        var $window = $(window);


        // =============================================
        // Overlay
        // =============================================

        $('#overlay').on('toggleactivate', function() {
            $body.addClass('has-active-overlay');
        });

        $('#overlay').on('toggledeactivate', function() {
            $body.removeClass('has-active-overlay');
        });


        // =============================================
        // Move search
        // =============================================

        enquire.register(breakpoint.md, {
            setup : function() {
                this.unmatch();
            },
            match: function(){
                $('.js-search').appendTo('.js-search-lg');
            },
            unmatch: function(){
                $('.js-search').appendTo('.js-search-sm');
            }
        });



        // =============================================
        // Initialise melodeon
        // =============================================

        function initMenu(){
            var menu = $('.js-melodeon').data('llapgoch-melodeonMenu');

            if(menu){
                menu.destroy();
            }
            $('.js-melodeon').melodeonMenu({
                navItemSelector: 'li',
                navContainerSelector: 'ul'
            });
        }


        // =============================================
        // Hook into melodeon to scroll menu
        // =============================================

        $('.js-melodeon').on('activate', function(ev, data){
            var $menuContainer = $('.drawer--left .drawer__dialog');
            $menuContainer.animate({
                scrollTop: $menuContainer.scrollTop() + $('.js-melodeon').offset().top
            }, 500);
        });


        // =============================================
        // Activate/Deactivate melodeon & move Primary Nav
        // =============================================

        enquire.register(breakpoint.md, {
            setup: function(){
                this.unmatch();
            },
            match: function(){
                $('.js-melodeon').each(function(){
                    var $menu = $(this).data('llapgoch-melodeonMenu'),
                        $lg = $('.js-primary-nav-lg');
                    if ($menu) {
                        $menu.destroy();
                    }
                    if ($lg) {
                        $(this).appendTo($lg);
                    }
                });
            },
            unmatch: function(){
                var init = false;
                $('.js-melodeon').each(function(){
                    var $sm = $('.js-primary-nav-sm');
                    if ($sm) {
                        $(this).appendTo($sm);
                        if (!$(this).data('llapgoch-melodeonMenu')) {
                            init = true;
                        }
                    }
                });
                if (init) {
                    initMenu();
                }
            }
        });


    });
}(jQuery));
