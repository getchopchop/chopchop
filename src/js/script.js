;(function($){
    $(document).ready(function() {
        
        // =============================================
        // Sensible Variables
        // =============================================
        var $body = $('body');


        // =============================================
        // Hamburger Toggle Class
        // =============================================
        var $hamburgers = $('.c-hamburger');
        
        $hamburgers.on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('is-active');
        });


        // =============================================
        // Accordion to Tabs
        // =============================================
		var tabLinkSelector = ".tabs__tab",
			tabContentSelector = ".tabs__content",
			tabContainerSelector = ".tabs",
			activeLinkClass = "tabs__tab--active",
			activeContentClass = "tabs__content--active";

		$(tabContainerSelector).each(function(){
			var $this = $(this);
				$links = $this.find(tabLinkSelector);
		
			$this.find(tabContentSelector).removeClass(activeContentClass);
			$this.find(tabLinkSelector).removeClass(activeLinkClass);
	
			if($links.size()){
				var $firstLink = $($links[0]);
				$this.find(tabLinkSelector + "[href='" + $firstLink.attr('href') + "']").addClass(activeLinkClass);
				$this.find($firstLink.attr('href')).addClass(activeContentClass);
			}
		});

		$(tabLinkSelector).on('click.tabs', function(e){
			e.preventDefault();
	
			var $this = $(this),
				$container = $(this).closest(tabContainerSelector);
				$content = $container.find($this.attr('href'));

				if(!$content.size()){
					return;
				}

			$container.find(tabLinkSelector).removeClass(activeLinkClass);
			$container.find(tabContentSelector).removeClass(activeContentClass);
			$content.addClass(activeContentClass);
			$container.find(tabLinkSelector + "[href='" + $this.attr('href') + "']").addClass(activeLinkClass);
		});
        
        
        
        // Toggle Blocks
        $.fn.toggleSingle = function() {
            return this.on('click', function(e) {
                e.preventDefault();
                $(this).next().toggleClass('active');
            });
        }
        $('.block-toggle').toggleSingle();
  



    });
}(jQuery));