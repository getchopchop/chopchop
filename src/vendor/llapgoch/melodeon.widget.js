;(function($){
    $.widget('llapgoch.melodeonMenu', {
        options: {
            // Used to store on the element's data attribute and event namespace
            identifier: 'melodeon',
            hasChildrenClass: 'has-child',
            hasActiveChildrenClass: 'has-active-child',
            navItemHiddenClass: 'js-melodeon-hide',

            activeClass: 'is-active',
            openDefault: true,
            openDefaultSelector: '.js-melodeon-default',

            navContainerSelector: '.js-melodeon-list',
            navItemSelector: '.js-melodeon-item',
            triggerSelector: 'a',
            slideSpeed: 300
        },

        _create: function(){
            this._super();
            this._setupChildren();
        },

        _init: function(){
            if(this.options.openDefault) {
                this.activateNav($(this.options.openDefaultSelector, this.element));
            }

            this._addEvents()
        },

        _destroy: function(){
            this._removeDisplayStyles();
        },

        _addEvents: function(){
            var self = this;

            var events = {};

            events["click " + this._getTriggerSelector()] = function(ev){
                ev.preventDefault();
                this.activateNav($(event.target));
            };

            this._on(this.element, events);
        },

        _setupChildren: function(){
            // If the containing navItemSelector has children
            var self = this;

            $(this.options.navItemSelector, this.element).each(function(){
                var $this = $(this);

                if($(self.options.navContainerSelector, $this).size()){
                    $this.addClass(self.options.hasChildrenClass);
                }
            });

        },

        _getTriggerSelector: function(){
            return this.options.navItemSelector + "." + this.options.hasChildrenClass + ' > ' + this.options.triggerSelector;
        },


        _isItemActive: function($item){
            return $item.hasClass(this.options.activeClass);
        },

        _removeDisplayStyles: function(){
            this._deactivateAllItems();

            $(this.options.navItemSelector, this.element)
                .removeClass(this.options.navItemHiddenClass)
                .attr('style', '');
        },

       _deactivateAllItems: function(){
            // Remove active class
            $(this.options.navItemSelector, this.element)
                .stop()
                .removeClass(this.options.activeClass)
                .removeClass(this.options.hasActiveChildrenClass);
        },

        _getAllVisibleNavItems: function(){
            return $(this.options.navItemSelector + ':not(.' + this.options.navItemHiddenClass + ')', this.element);
        },

        _fireEvent: function(eventName, event, data){
            data = data || {};

            this._trigger(eventName, event, $.extend({}, data, {
                element: this.element
            }));

            var elementData = $.extend({}, data);
            elementData[this.options.identifier] = this;

            this.element.trigger(eventName, elementData);
        },

        activateNav: function($item){
            var self = this;

            if(this._isItemActive($item.closest(this.options.navItemSelector))){
                return;
            }

            // Use this to hook into
            this._fireEvent('activate')

            // Remove active class
            this._deactivateAllItems();

            var $navSiblingChildren = $item.siblings(this.options.navContainerSelector)
                .children(this.options.navItemSelector);

            var $itemContainer = $item.closest(this.options.navItemSelector);

            // Add active class, slide all children out
            $itemContainer.addClass(this.options.activeClass);
            $navSiblingChildren.slideDown(this.options.slideSpeed);
            $navSiblingChildren.removeClass(this.options.navItemHiddenClass);

            $itemContainer.parents(this.options.navItemSelector).addClass(this.options.hasActiveChildrenClass);

            // Only animate the items which currently don't have the hide class on them
            this._getAllVisibleNavItems().each(function(){
                var $this = $(this);
                var $parent = $this.parent().closest(self.options.navItemSelector);

                if($parent.size() && $parent.hasClass(self.options.activeClass) === false && $this.hasClass(self.options.activeClass) === false && $this.hasClass(self.options.hasActiveChildrenClass) === false){
                    $this.addClass(self.options.navItemHiddenClass);
                    $this.slideUp(self.options.slideSpeed);
                }
            });
        }
    });
}(jQuery));
