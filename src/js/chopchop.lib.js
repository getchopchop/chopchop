// Generics
;(function($){
    $.widget('chopchop.base', {
        options: {
            activeClass: 'is-active',
            inactiveClass: 'is-inactive',
            // Override data prepend in subclasses
            dataPrepend: '',
            dataActiveClass: 'activeClass',
            dataInactiveClass: 'inactiveClass'
        },

        _create: function(){
            this._super();
        },

        _debounce: function(func, wait, immediate) {
            var timeout;

            return function() {
                var context = this,
                    args = arguments;

                var later = function() {
                    timeout = null;

                    if (!immediate) {
                        func.apply(context, args);
                    }
                };

                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);

                if (callNow) {
                    func.apply(context, args);
                }
            };
        },

        /* Gets an option first from the elements data, then falls back to the option object */
        _getLocalOption: function(option){
            // Replace first character with an uppercase version
            var localOption =  this._createDataProperty(option);
            var local = this.element.data(localOption);

            if(local !== undefined){
                return local;
            }

            return this.options[option];
        },

        _createDataProperty: function(prop) {
            return this.options.dataPrepend + prop.replace(/^([a-z])/, function(a){
                return a.toUpperCase();
            });
        },

        // Constructs a global selector to be used, E.g. 'group' in the toggle
        // widget will result in something like [data-cc-toggle-group="val"]
        _getGlobalDataSelector: function(prop, val) {
            val = val ? '="' + val + '"' : '';
            return '[data-' + this.options.dataPrepend.replace(/([A-Z])/g, function(a){
                return "-" + a.toLowerCase();
            }) + "-" + prop + val + ']';
        },

        _getData: function(prop) {
            return this.element.data(this._createDataProperty(prop));
        }
    });
}(jQuery));

;(function($){
    /* Definition constants */
    window.Chopchop = window.Chopchop || {};
    window.Chopchop.Toggle = {};

    var Static = window.Chopchop.Toggle;
    Static.WIDGET_ID = "chopchop.toggle";
    Static.TRIGGER_TYPE_DIRECT = 'direct-only';
    Static.TRIGGER_TYPE_ALL = 'all';
    Static.ACTION_ACTIVATE = 'activate';
    Static.ACTION_DEACTIVATE = 'deactivate';
    Static.ACTION_TOGGLE = 'toggle';
    Static.INSTANCE_NAME = 'chopchop-toggle';

    // An array of all processed elements to prevent infinite loops
    Static.processed = [];

    // To reinitialise at a later point, use window.Chopchop.Toggle.init();
    // Only initialise on elements which have been explicitly given a class of js-cc-toggle an action,
    // or triggers for activate or deactivate
    Static.init = function(){
        $('.js-cc-toggle, [data-cc-toggle-action], ' +
            '[data-cc-toggle-trigger-activate], ' +
            '[data-cc-toggle-trigger-deactivate').toggle();
    };

    /* Initialisation */
    $(document).on('ready.' + Static.WIDGET_ID, function(ev) {
        Static.init();
    });


    /* Widget Definition*/
    $.widget(Static.WIDGET_ID, $.chopchop.base, {
        options: {
            dataPrepend: 'ccToggle',

            dataAction: 'action',
            dataGroup: 'group',
            dataTrigger: 'trigger', // Type of event
            dataTriggerType: 'triggerType', // direct-only (only for this element) or all (allow bubbling)
            dataCascade: 'cascade',
            dataTarget: 'target',
            dataStateful: 'stateful',
            dataClosestContainer: 'closestContainer',
            /* A target to callback to and execute the action, but don't chain on its targets or cascades */
            dataTargetCallback: 'targetCallback',
            dataTriggerActivate: 'triggerActivate',
            dataTriggerDeactivate: 'triggerDeactivate',

            triggerType: 'all',
            trigger: 'click',
            triggerActivate: '', // E.g. 'mouseenter'
            triggerDeactivate: '', // E.g. 'mouseleave'
            closestContainer: null, // A closest() container to look within for target selectors
            action: 'toggle',
            targetCallback: '',
            stateful: true,
            target: '',
            group: ''
        },

        _create: function(){
            this._super();
            this._addEvents();
        },

        _addEvents: function(){
            var self = this,
                events = {},
                action = this._getLocalOption(this.options.dataAction),
                triggerOn = this._getLocalOption(this.options.dataTrigger),
                triggerDeactivate = this._getLocalOption(this.options.dataTriggerDeactivate),
                triggerActivate = this._getLocalOption(this.options.dataTriggerActivate),
                triggerType = this._getLocalOption(this.options.dataTriggerType);


            // Explicitly require a data attribute of action to init this form of event
            if(action) {
                events[triggerOn] = function (ev) {
                    ev.preventDefault();

                    if(triggerType == Static.TRIGGER_TYPE_DIRECT && (self.element.is(ev.target) === false)){
                        return;
                    }

                    self.performAction(action);
                };
            }

            if(triggerActivate) {
                events[triggerActivate] = function (ev) {
                    ev.preventDefault();

                    if(triggerType == Static.TRIGGER_TYPE_DIRECT && (self.element.is(ev.target) === false)){
                        return;
                    }

                    self.activate();
                };
            }

            if(triggerDeactivate) {
                events[triggerDeactivate] = function (ev) {
                    ev.preventDefault();

                    if(self.options.triggerType == Static.TRIGGER_TYPE_DIRECT && ev.target !== self.element){
                        return;
                    }

                    self.deactivate();
                };
            }

            this._on(this.element, events);
        },

        _getTargets: function(){
            return $(this._getLocalOption(this.options.dataTarget), this._getClosestContainer());
        },

        // Cascades can be used by data-cc-toggle-cascade, and can also be type based such
        // as data-cc-toggle-cascade-activate and data-cc-toggle-cascade-deactivate
        _getCascades: function(type){
            var cascade = this._getLocalOption(this.options.dataCascade) || '';

            if(type){
                var cascadeType = this._getLocalOption(this.options.dataCascade + '-' + type);

                if(cascadeType){
                    cascade = cascade ? ", " + cascadeType : cascadeType;
                }
            }

            return $(cascade, this._getClosestContainer());
        },

        _getClosestContainer: function(){
            var closestContainer = this._getLocalOption(this.options.dataClosestContainer);

            if(!closestContainer){
                return document;
            }

            var $container = this.element.closest(closestContainer);

            if($container.size()){
                return $container;
            }

            return document;
        },

        // Create a toggle instance on the element if one doesn't exist, default the trigger to null so it
        // does not listen for events, unless overridden by data-cc-toggle-trigger
        _getInstance: function($el){
            if(!$el.data(Static.INSTANCE_NAME)){
                $el.toggle({
                    trigger: null
                });
            }

            return $el.data(Static.INSTANCE_NAME);
        },

        _removeActiveClass: function () {
            this._removeClass(this._getLocalOption(this.options.dataActiveClass));
        },

        _addActiveClass: function () {
            this._addClass(this._getLocalOption(this.options.dataActiveClass));
        },

        _addInactiveClass: function () {
            this._addClass(this._getLocalOption(this.options.dataInactiveClass));
        },

        _removeInactiveClass: function () {
            this._removeClass(this._getLocalOption(this.options.dataInactiveClass));
        },

        _isStateful: function(){
            return this._getLocalOption(this.options.dataStateful);
        },

        /******************************************
         * Public methods
         ******************************************/

        activate: function(partOfChain, cascade){
            this.performAction(Static.ACTION_ACTIVATE, partOfChain, cascade);
        },

        deactivate: function(partOfChain, cascade){
            this.performAction(Static.ACTION_DEACTIVATE, partOfChain, cascade);
        },

        toggle: function(){
            this.performAction(Static.ACTION_TOGGLE);
        },

        isActive: function(){
            return this.element.hasClass(this.options.activeClass);
        },

        destroy: function(){
            this._super();
            this._removeActiveClass();
            this._removeInactiveClass();
        },

        performAction: function(type, partOfChain, cascade){
            var self = this,
                stateful = this._isStateful(),
                group;

            // Default to true for cascades
            cascade = cascade === false ? false : true;

            if(!partOfChain){
                Static.processed = [];
            }

            if(Static.processed.indexOf(this.element) !== -1){
                return;
            }

            // Add this element to the processed chain so we don't get an infinite loop
            Static.processed.push(this.element);

            if(!type){
                type = this.options.action;
            }

            // Flip the actions if we're toggling
            if(type == Static.ACTION_TOGGLE){
                type = this.isActive() ? Static.ACTION_DEACTIVATE : Static.ACTION_ACTIVATE;
            }

            // TODO: Consider merging cascades and targets (they appear to be synonymous) into something like 'chain'
            if(cascade) {
                var totalElements = this._getTargets().toArray().concat(this._getCascades(type).toArray());

                $(totalElements).each(function () {
                    var $this = $(this);

                    self._getInstance($this).performAction(type, true);
                });
            }

            if(type == Static.ACTION_ACTIVATE){
                if(stateful) {
                    this._addActiveClass();
                    this._removeInactiveClass();
                }

                // Deal with groups
                group = this._getLocalOption(this.options.dataGroup);

                if(group){
                    $(this._getGlobalDataSelector(this.options.dataGroup, group), this._getClosestContainer()).each(function(){
                        var $this = $(this);

                        // Don't do anything for *this* element, we're only interested in
                        // deactivating other members of the group
                        if($this.is(self.element)){
                            return true;
                        }

                        // Don't cascade when deactivating group items otherwise targets
                        // which should remain active will be deactivated
                        self._getInstance($this).deactivate(true, false);
                    });
                }
            }else{
                if(stateful) {
                    this._removeActiveClass();
                    this._addInactiveClass();
                }
            }

            // data-cc-toggle-target-callback allows a selector to be chained, without it having its targets
            // or cascades also called. Most useful for group items to call back to a button or link
            var $targetCallback = $(this._getLocalOption(this.options.dataTargetCallback), this._getClosestContainer());
            
            $targetCallback.each(function(){
                var $this = $(this);

                self._getInstance($this).performAction(type, true, false);
            });

            this._trigger(type);
        }
    });
}(jQuery));


// var ChopChop = (function($, ChopChop) {


//
// // Utilities
// var ChopChop = (function($, ChopChop) {

//
//     return ChopChop;
// })(jQuery, ChopChop || {});
//
// // Toggles
// var ChopChop = (function($, ChopChop) {
//     var defaultOptions = {
//         classActive: 'is-active',
//         classInactive: 'is-inactive'
//     };
//
//     // Toggle
//     var Toggle = ChopChop.Toggle = function(options) {
//         this.options = $.extend({}, defaultOptions, options);
//         this.pending = [];
//         this.processed = [];
//         this.init();
//     };
//
//     var Action = {
//         TOGGLE: 'toggle',
//         ACTIVATE: 'activate',
//         DEACTIVATE: 'deactivate'
//     };
//
//     var Trigger = {
//         DIRECT_ONLY: 'direct-only',
//         INDIRECT_ONLY: 'indirect-only',     // Why would you want this? Oh well.
//         BOTH: 'both'    // Default
//     };
//
//     Toggle.prototype = {
//         init: function() {
//             var self = this;
//
//             $(document).on('click', '[data-cc-action]', function(e) {
//                 var $this = $(this),
//                     targets = $this.data('cc-target').split(' '),
//                     mode = $this.data('cc-trigger-on') || Trigger.BOTH,
//                     $target;
//
//                 for (var i = 0, l = targets.length; i < l; ++i) {
//                     $target = $('#' + targets[i]);
//
//                     if ($target.size() === 0) {
//                         continue;
//                     }
//
//                     if (mode === Trigger.DIRECT_ONLY && e.target !== this) {
//                         continue;
//                     } else if (mode === Trigger.INDIRECT_ONLY && e.target === this) {
//                         continue;
//                     }
//
//                     e.preventDefault();
//                     self.performAction($target, $this.data('cc-action') || Action.TOGGLE, $this);
//                 }
//             });
//         },
//         toggle: function(target, action) {
//             var $target = typeof target === 'string' ? $('#' + target) : $(target);
//
//             if (!$target.size()) {
//                 return;
//             }
//
//             this.performAction($target, action || Action.TOGGLE);
//         },
//         cascade: function($el, action) {
//             var i, l, $other,
//                 chain = ($el.data('cc-cascade-' + action) || '').split(' ')
//                         .concat(($el.data('cc-cascade') || '').split(' '));
//
//             for (i = 0, l = chain.length; i < l; ++i) {
//                 $other = $('#' + chain[i]);
//
//                 if (this.processed.indexOf($other[0]) !== -1 || this.pending.indexOf($other[0]) !== -1) {
//                     continue;
//                 }
//
//                 this.pending.push({
//                     action: action,
//                     target: $other
//                 });
//             }
//         },
//         performAction: function($el, action, $source) {
//             this.pending.length = 0;
//             this.processed.length = 0;
//
//             if (action === Action.TOGGLE) {
//                 if ($el.hasClass('is-active')) {
//                     action = Action.DEACTIVATE;
//                 } else {
//                     action = Action.ACTIVATE;
//                 }
//             }
//
//             this.pending.push({
//                 action: action,
//                 target: $el
//             });
//
//             var id, dependants, group, $current, item,
//                 iterations = 0,
//                 el, chain, $other, i;
//
//             while (this.pending.length > 0) {
//                 item = this.pending.shift();
//                 action = item.action;
//                 $current = item.target;
//
//                 // Skip already processed nodes
//                 if (this.processed.indexOf($current) !== -1) {
//                     continue;
//                 }
//
//                 id = $current.attr('id');
//                 group = $current.data('cc-group');
//
//                 // Process group members, if a group is present
//                 for (i = 0, all = $('[data-cc-group="' + group + '"]'), l = all.length; i < l; ++i) {
//                     el = all[i];
//                     $other = $(el);
//
//                     // Skip element itself
//                     if (el === $current[0]) {
//                         continue;
//                     }
//
//                     // Just a group member, not the target: deactivate
//                     $other.addClass('is-inactive').removeClass('is-active');
//                     this.cascade($other, Action.DEACTIVATE);
//                 }
//
//                 // Process target
//                 if (action === Action.ACTIVATE) {
//                     $current.addClass('is-active').removeClass('is-inactive');
//                     $current.trigger('chopchop:activate', [$source]);
//                 } else {
//                     $current.addClass('is-inactive').removeClass('is-active');
//                     $current.trigger('chopchop:deactivate', [$source]);
//                 }
//
//                 // Chain onto targets
//                 this.cascade($current, action);
//                 this.processed.push($current[0]);
//                 iterations += 1;
//
//                 if (iterations > 100) {
//                     throw new ChopChop.Exception("Too many iterations, aborting");
//                 }
//             }
//         }
//     };
//
//     // Expose toggle api
//     ChopChop.api.toggle = function() {
//         return ChopChop.plugins.toggle.toggle.apply(ChopChop.plugins.toggle, arguments);
//     };
//
//     return ChopChop;
// })(jQuery, ChopChop || {});
//
// // Collapse
// var ChopChop = (function($, ChopChop) {
//     // Tabordion types
//     var Types = {
//         ONE_OPEN: 'one-open',
//         ONE_COLLAPSIBLE: 'one-collapsible',
//         ALL_COLLAPSIBLE: 'all-collapsible'
//     };
//
//     var defaultOptions = {
//         classActive: 'is-active',
//         classInactive: 'is-inactive',
//         headerSelector: '> [class*="__header"]',
//         bodySelector: '> [class*="__body"]',
//         type: Types.ONE_OPEN
//     };
//
//     // Collapse
//     var Collapse = ChopChop.Collapse = function(options) {
//         this.options = $.extend({}, defaultOptions, options);
//         this.id = 0;
//         this.init();
//     };
//
//     // Attribute creators and appliers for all collapse types
//     var attributors = {};
//     attributors[Types.ONE_OPEN] = function($header, $body, name, i) {
//         $header.attr({
//             'id': name + '-header-' + i,
//             'data-cc-group': name + '-headers',
//             'data-cc-action': 'activate',
//             'data-cc-target': name + '-body-' + i
//         });
//         $body.attr({
//             'id': name + '-body-' + i,
//             'data-cc-group': name + '-bodies',
//             'data-cc-cascade-activate': name + '-header-' + i
//         });
//     };
//     attributors[Types.ONE_COLLAPSIBLE] = function($header, $body, name, i) {
//         $header.attr({
//             'id': name + '-header-' + i,
//             'data-cc-group': name + '-headers',
//             'data-cc-action': 'toggle',
//             'data-cc-target': name + '-body-' + i
//         });
//         $body.attr({
//             'id': name + '-body-' + i,
//             'data-cc-group': name + '-bodies',
//             'data-cc-cascade': name + '-header-' + i
//         });
//     };
//     attributors[Types.ALL_COLLAPSIBLE] = function($header, $body, name, i) {
//         $header.attr({
//             'id': name + '-header-' + i,
//             'data-cc-action': 'toggle',
//             'data-cc-target': name + '-body-' + i
//         });
//         $body.attr({
//             'id': name + '-body-' + i,
//             'data-cc-cascade': name + '-header-' + i
//         });
//     };
//
//     Collapse.prototype = {
//         init: function() {
//             var self = this;
//
//             $('[data-cc-collapse]').each(function() {
//                 self.applyToContainer(this);
//             });
//         },
//         getNextName: function() {
//             return 'collapse' + (++this.id);
//         },
//         applyToContainer: function(root, options) {
//             options = $.extend({}, this.options, options);
//
//             var $root = $(root),
//                 name = options.name || $root.data('cc-collapse-name') || this.getNextName(),
//                 type =  $root.data('cc-collapse') || options.type,
//                 headers = $root.find(options.headerSelector),
//                 bodies = $root.find(options.bodySelector);
//
//             if (headers.size() !== bodies.size()) {
//                 throw new ChopChop.Exception(
//                     "Collapse: number of headers does not match number of bodies (" + headers.size() + " vs " + bodies.size()+ ")"
//                 );
//             }
//
//             for (var i = 0, l = headers.size(); i < l; ++i) {
//                 attributors[type]($(headers[i]), $(bodies[i]), name, i);
//             }
//         }
//     };
//
//     // Expose api
//     ChopChop.api.collapse = function() {
//         return ChopChop.plugins.collapse.applyToContainer.apply(ChopChop.plugins.collapse, arguments);
//     };
//
//     return ChopChop;
// })(jQuery, ChopChop || {});