;(function($){
    $(document).ready(function() {
        
        $("#sidebar-toggle").click(function(e) {
            e.preventDefault();
            $("#primer-wrapper, #sidebar-toggle").toggleClass("js-toggled");
        });
        
    });
}(jQuery));