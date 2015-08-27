;(function($){
    $(document).ready(function() {
        $( '.js-toggle-theme' ).on('click', function(event) {
            event.preventDefault();            
            $('head').find('link[name="theme"]').remove();
            
            if(!$(this).data('state')){
                $('head').append(
                    $('<link rel="stylesheet" type="text/css" name="theme" />').attr('href', '/build/css/primer.min.css'),
                    $('<link rel="stylesheet" type="text/css" name="theme" />').attr('href', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic')
                );
                
                $(this).data('state', 1);
            }else{
                $(this).data('state', 0);
            }
        });
    });
}(jQuery));
