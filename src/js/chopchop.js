(function($){
    function tog ($ul){
        $ul.removeClass('show');
        $ul.find('li').removeClass('active');
        $ul.find('>li').addClass('show');
        $ul.addClass('show');
    }

    $(document).ready(function(){

        // SHOW MENU
        var nav = $('.nav-collapse'),
            navLi = nav.find('li');

        nav.find('li.active').each(function(){
            $(this).find('> ul').addClass('show');
        });

        nav.find('.parent > a').on('click', function(e){
            e.preventDefault();

            var $el = $(this);
                $li = $el.closest('li');
                $ul = $li.find('>ul');
                $topParent = $(this).closest('li.level0');


            navLi.each(function(index, el){
                var $tp = $(el).closest('li.level0');

                // if(el == $topParent[0] || $tp[0] == $topParent[0]){
                //     return;
                // }
                $(el).find('ul').removeClass('show');
            });

            $li.siblings().each(function(index, el){
                $(el).addClass('hidden');
            });

            navLi.removeClass('active');
            $li.parents('li').addClass('active');
            $li.addClass('active');

            tog($ul);
            
        });
        
    });
})(jQuery);
