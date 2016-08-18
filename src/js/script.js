// =============================================
// Set Breakpoints for Enquire
// =============================================

// var breakpoint = {
//     xs: "screen and (min-width: 28em)",
//     sm: "screen and (min-width: 35em)",
//     md: "screen and (min-width: 48em)",
//     lg: "screen and (min-width: 62em)",
//     xl: "screen and (min-width: 82em)"
// };


;(function($){
    $(document).ready(function() {

        // =============================================
        // Global variables
        // =============================================

        var $body   = $('body');
        var $window = $(window);


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


        // =============================================
        // Enquire Demo http://wicky.nillia.ms/enquire.js/
        // =============================================

        // enquire.register(breakpoint.md, {
        //     setup : function() {
        //         this.unmatch();
        //     },
        //     match: function () {
        //         console.log('Upper')
        //
        //     },
        //     unmatch: function () {
        //         console.log('Lower');
        //     }
        // });


    });
}(jQuery));
