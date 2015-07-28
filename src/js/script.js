;(function($){
    $(document).ready(function() {
        
        var $body = $('body');
        
        
        
        // Hamburger Toggle Class
        var $hamburgers = $('.c-hamburger');
        
        $hamburgers.on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('is-active');
        });
    
    });
}(jQuery));
