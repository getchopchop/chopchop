;(function($){
    $(document).ready(function() {
        
        $(".js-menu-toggle").click(function(e) {
            e.preventDefault();
            $("#primer-wrapper, .js-menu-toggle").toggleClass("js-toggled");
        });
        
    });
}(jQuery));