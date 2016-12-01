// Generics
;(function($){
    $.widget('chopchop.base', {
        options: {
            activeClass: 'is-active',
            inactiveClass: 'is-inactive',
            dataPrepend: 'cc'
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
            var localOption =  this._createDataProperty(option.replace(/^([a-z])/, function(a){return a.toUpperCase()}));
            var local = this.element.data(localOption);

            if(local){
                return local;
            }

            return this.options[option];
        },

        _createDataProperty: function(prop) {
            return this.options.dataPrepend + "-" + prop;
        },

        _getData: function(prop) {
            return this.element.data(this._createDataProperty(prop));
        }
    });
}(jQuery));

;(function($){
    /* Definition consts */
    var WIDGET_ID = "chopchop.toggle",
        DEFAULT_SELECTOR = "[data-cc-toggle]";



    /* Widget */
    $.widget(WIDGET_ID, $.chopchop.base, {
        TRIGGER_DIRECT: 'direct-only',
        TRIGGER_INDIRECT: 'indirect-only',
        TRIGGER_BOTH: 'both',

        options: {
            dataTarget: 'target',
            dataMode: 'trigger-on',
            dataAction: 'action'

            initEvent: 'click'
        },

        _create: function(){
            this._super();
            this._addEvents();
        }

        _addEvents: function(){
            var self = this;
            var events = {};

            events[this.options.initEvent] = function(ev){
                ev.preventDefault();
                self.performAction();
            }

            this._on(this.element, events);
        },

        _getTargets: function(){
            return this.element.data(this._getData(this.options.dataTarget)).split(' ');
        },

        performAction: function(){
            var 
        }
    });



    /* Initialisation */
    $(document).on('ready.' + WIDGET_ID, function(ev) {
        console.log("horse");
        $(DEFAULT_SELECTOR).toggle();
    });

    /* Reinitialisation */
    $(document).on('click.' + WIDGET_ID, DEFAULT_SELECTOR, function(ev) {
        // if($(this).data('chopchop-'))
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