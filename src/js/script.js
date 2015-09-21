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


        // =============================================
        // Single Toggle
        // =============================================

        $.fn.toggleSingle = function() {
            return this.on('click', function(e) {
                e.preventDefault();
                $(this).next().toggleClass('no-display');
            });
        };
        $('.block-toggle').toggleSingle();


        // =============================================
        // Skip Links
        // =============================================

        var skipContents = $('.skip-content');
        var skipLinks = $('.skip-link');

        skipLinks.on('click', function (e) {
            e.preventDefault();

            var self = $(this);
            // Use the data-target-element attribute, if it exists. Fall back to href.
            var target = self.attr('data-target-element') ? self.attr('data-target-element') : self.attr('href');

            // Get target element
            var elem = $(target);

            // Check if stub is open
            var isSkipContentOpen = elem.hasClass('skip-active') ? 1 : 0;

            // Hide all stubs
            skipLinks.removeClass('skip-active');
            skipContents.removeClass('skip-active');

            // Toggle stubs
            if (isSkipContentOpen) {
                self.removeClass('skip-active');
            } else {
                self.addClass('skip-active');
                elem.addClass('skip-active');
            }
        });


        // =============================================
        // Drawers
        // =============================================
        var $title = $('.title--drawer'),
            $overlay = $('.overlay');

        var $originalDrawerTitle = $title.html();


        // =============================================
        // Drawer
        // =============================================

        function closeDrawers(targetDrawer) {

            // get original drawer title
            // we switch this later
            $title.html($originalDrawerTitle);

            // Deal with contents
            if(targetDrawer){
                targetDrawer.removeAttr('data-content');
            }

            // close the drawers
            $('[data-toggle=drawer]').each(function(){
                var bodyClassName = 'drawer--' + $(this).data('target') + '--open';
                $body.removeClass(bodyClassName);
                $body.removeClass('drawer--open');
            });

            $overlay.off('touchstart.close.drawer click.close.drawer');

            // reset body overflow
            $body.css('overflow', 'auto');
            $(window).unbind('scroll.drawer');
            //$overlay.stop().fadeOut();
        }


        $(document.body).on('click', '[data-toggle=drawer]', function(event) {
            event.preventDefault();

            var target          = $(this).data('target'),
                targetDrawer    = $('.drawer--' + target),
                bodyClassName   = 'drawer--' + target + '--open',
                content         = $(this).data('content'),
    			drawerAttr		= $(this).data('drawer-attr'),
                drawerOpen      = false;

    		$('[data-toggle=drawer]').removeClass('btn--active');

            // Work out if the drawer is open
            if($body.hasClass(bodyClassName)){
                if(content && targetDrawer.data('content') == content){
                    drawerOpen = true;
                }

                if(!content){
                    drawerOpen = true;
                }
            }
            //console.log(content);
            closeDrawers(targetDrawer);


            if(drawerOpen){
                return;
            }

    		$(this).addClass('btn--active');

            if(content){
                targetDrawer.data('content', content);
            }

    		if(drawerAttr){
    			targetDrawer.addClass(drawerAttr);
    		}

            $overlay.on('touchstart.close.drawer click.close.drawer', function() {
               closeDrawers();
            });

            // Show relevant content inside
            // the target drawer
            if(content) {
                $(targetDrawer).find('.toggleable').hide();
                $(targetDrawer).find('.' + content).show();
            }

            // switch drawer title
            $title.html($(this).data('title'));

            // add open class
            $body.addClass('drawer--open');
            $body.addClass(bodyClassName);

            // freeze body scrolling
            var top = $(window).scrollTop(),
                left = $(window).scrollLeft();

            $body.css('overflow', 'hidden');
            $(window).on('scroll.drawer', function(){
                $(this).scrollTop(top).scrollLeft(left);
            });
            //$overlay.stop().fadeIn();
        });


    });
}(jQuery));
