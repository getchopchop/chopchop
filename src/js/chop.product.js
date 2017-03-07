;(function($){
    $(document).ready(function() {
        
        // =============================================
        // Show and hide product bar - product detail
        // =============================================

        var $fixedBar = $('.js-product-bar'),
            $fixedBarTrigger = $('.js-product-bar-trigger');

        if($fixedBar.length && $fixedBarTrigger.length) {
            $(window).scroll(function() {
                if($(window).scrollTop() > $fixedBarTrigger.position().top) {
                    $fixedBar.addClass('is-active');
                } else {
                    $fixedBar.removeClass('is-active');
                }
            }).scroll();
        }

    });
}(jQuery));