;(function($){
    window.Chopchop = window.Chopchop || {};
    var Static = window.Chopchop.Collapsible = {};

    Static.WIDGET_ID = "chopchop.collapsible";
    Static.INSTANCE_NAME = "chopchop-collapsible";
    // Allows all to be collapsed, none remain open
    Static.MODE_COLLAPSE_ALL = "collapse-all";
    // One remains open
    Static.MODE_OPEN_ONE = "open-one";
    // All can be opened
    Static.MODE_OPEN_ALL = "open-all";


    Static.init = function(){
        $('.js-cc-collapsible').collapsible();
    };

    $(document).on('ready.' + Static.WIDGET_ID, function(){
        Static.init();
    });

    $.widget(Static.WIDGET_ID, $.chopchop.base, {
        options: {
            dataPrepend: 'ccCollapsible',
            dataMode: 'mode',

            // The data attribute 'activeInitial' is for children (to denote which is active initally), not for this.element
            dataActiveInitial: 'activeInitial',
            dataHeaderSelector: 'headerSelector',
            dataBodySelector: 'bodySelector',

            headerSelector: '[class*="__header"]',
            bodySelector: '[class*="__body"]',
            // By default, initialise as a tab
            mode: Static.MODE_OPEN_ONE
        },

        $headers: null,
        $bodies: null,

        _create: function(){
            this._super();
            this._setup();
        },

        _getToggleInstance: function($el, options){
            if(!$el.data(window.Chopchop.Toggle.INSTANCE_NAME)){
                $el.toggle(options);
            }

            return $el.data(window.Chopchop.Toggle.INSTANCE_NAME);
        },

        _setup: function(){
            var $header,
                $body,
                $headerToggle,
                $bodyToggle,
                actives = [],
                mode = this.getLocalOption(this.options.dataMode);

            this.$headers = $(this.options.headerSelector, this.element);
            this.$bodies = $(this.options.bodySelector, this.element);


            if(this.$headers.size() !== this.$bodies.size()){
                throw "Collapsible Headers do not match bodies";
            }

            /* If we've got a mode of MODE_COLLAPSE_ALL then create the toggle as toggleable, otherwise only activate */
            var headerValues = {
                action: mode == Static.MODE_COLLAPSE_ALL || Static.MODE_OPEN_ALL ? window.Chopchop.Toggle.ACTION_TOGGLE : window.Chopchop.Toggle.ACTION_ACTIVATE
            };

            /* The body elements should not have a trigger on them */
            var bodyValues = {
                trigger: null
            };

            for(var i = 0; i < this.$headers.size(); i++){
                $header = $(this.$headers.get(i));
                $body = $(this.$bodies.get(i));

                $headerToggle = this._getToggleInstance($header, headerValues);
                $headerToggle.addTargetElement(this.$bodies.get(i));

                $bodyToggle = this._getToggleInstance($body, bodyValues);
                $bodyToggle.addTargetCallbackElement($header);

                // Don't use grouping functionality if we allow all to be open
                if(mode !== Static.MODE_OPEN_ALL) {
                    $bodyToggle.addGroupElements(this.$bodies);
                }

                /* Log any bodies or headers with an active data flag */
                if($headerToggle.getLocalOption(this.options.dataActiveInitial, this.options.dataPrepend)){
                    actives.push($headerToggle);
                }

                if($bodyToggle.getLocalOption(this.options.dataActiveInitial, this.options.dataPrepend)){
                    actives.push($bodyToggle);
                }
            }

            /* After all toggles have been initialised, activate any toggles */
            $(actives).each(function(){
                this.activate();
            });

        }
    });
}(jQuery));