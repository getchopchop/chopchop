;(function($){

    $(document).ready(function() {

        // =============================================
        // Priority nav
        // =============================================

        var $nav = $('.priority-nav__container');
        var $btn = $('.priority-nav__toggle');
        var $vlinks = $('.priority-nav__nav');
        var $hlinks = $('.priority-nav__sub-nav');

        var numOfItems = 0;
        var totalSpace = 0;
        var breakWidths = [];

        // Get initial state
        $vlinks.children().outerWidth(function(i, w) {
            totalSpace += w;
            numOfItems += 1;
            breakWidths.push(totalSpace);
        });

        var availableSpace, numOfVisibleItems, requiredSpace;

        function check() {
            // Get instant state
            availableSpace = $vlinks.width() - 10;
            numOfVisibleItems = $vlinks.children().length;
            requiredSpace = breakWidths[numOfVisibleItems - 1];

            // There is not enought space
            if (requiredSpace > availableSpace) {
                $vlinks.children().last().prependTo($hlinks);
                numOfVisibleItems -= 1;
                check();
            // There is more than enough space
            } else if (availableSpace > breakWidths[numOfVisibleItems]) {
                $hlinks.children().first().appendTo($vlinks);
                numOfVisibleItems += 100; // This used to be one but 100 fixes it
                check();
            }

            // Update the button accordingly
            $btn.attr("count", numOfItems - numOfVisibleItems);
            if (numOfVisibleItems === numOfItems) {
                $btn.removeClass('is-active');
            } else $btn.addClass('is-active');
        }

        // Window listeners
        $(window).resize(function() {
            check();
        });
        check();

    });
}(jQuery));
