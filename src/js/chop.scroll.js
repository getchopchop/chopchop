// =============================================
// Scroller
// =============================================

;(function($){
    $(document).ready(function() {

        $(window).resize(function() {
            $('.js-scroll').each(function() {
                var $scrollContainer = $(this).children('.scroll__container');

                $scrollContainer.css('padding-bottom', 0);
                $(this).css('height', 'auto');
                $(this).height($(this).height());
                $scrollContainer.css('padding-bottom', 20);
            });
        }).resize();

        $('.js-scroll__container').scroll(function() {
            var containerWidth = $(this).width(),
                scrollPosition = containerWidth + $(this).scrollLeft(),
                scrollWidth = $(this).children('.scroll__body')[0].scrollWidth,
                leeway = 1;

            var $parent = $(this).parents('.js-scroll');

            // show left shadow
            if((scrollPosition - leeway) > containerWidth) {
                $parent.addClass('is-end');
            } else {
                $parent.removeClass('is-end');
            }

            // show right shadow
            if((scrollPosition + leeway) > scrollWidth) {
                $parent.removeClass('is-start');
            } else {
                $parent.addClass('is-start');
            }
        }).scroll();

        // lefty clicky
        $('.js-scroll-left').click(function(e) {
            e.preventDefault();
            var $scroll = $(this).parent('.js-scroll'),
                $scroller = $scroll.children('.js-scroll__container'),
                scrollWidth = $scroll.width() * 0.8,
                currentScrollPos = $scroller.scrollLeft();

            $scroller.animate({
                'scrollLeft' : (currentScrollPos - scrollWidth)
            }, scrollWidth/3);
        });

        // righty clicky
        $('.js-scroll-right').click(function(e) {
            e.preventDefault();
            var $scroll = $(this).parent('.js-scroll'),
                $scroller = $scroll.children('.js-scroll__container'),
                scrollWidth = $scroll.width() * 0.8,
                currentScrollPos = $scroller.scrollLeft();

            $scroller.animate({
                'scrollLeft' : (currentScrollPos + scrollWidth)
            }, scrollWidth/3);
        });
        

    });
}(jQuery));