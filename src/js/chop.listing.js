
;(function($){
    $(document).ready(function() {


        // =============================================
        // Move filters - product list/search result list
        // =============================================

        enquire.register(breakpoint.md, {
            setup : function() {
                this.unmatch();
            },
            match: function(){
                $('.js-filters').appendTo('.js-filters-lg');
                if($('#drawer-left').hasClass('is-active')) {
                    $('#drawer-left').data('chopchop-toggle').deactivate();
                }
            },
            unmatch: function(){
                $('.js-filters').appendTo('.js-filters-sm');
            }
        });


    });
}(jQuery));