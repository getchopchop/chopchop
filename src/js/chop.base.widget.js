// Chop Chop Base Class
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

        /* Pass in a prepend, otherwise use this class' default. Useful for getting a property from an element which doesn't have
         the widget in question initialised on it (I.e. Collapsible contains elements which can have properties, but each element
         does not have a collapsible widget upon it
         */
        _createDataProperty: function(prop, prepend) {
            return (prepend ? prepend : this.options.dataPrepend) + prop.replace(/^([a-z])/, function(a){
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

        /* Gets an option first from the elements data, then falls back to the option object */
        getLocalOption: function(option, prepend){
            // Replace first character with an uppercase version
            var localOption =  this._createDataProperty(option, prepend);
            var local = this.element.data(localOption);

            if(local !== undefined){
                return local;
            }

            return this.options[option];
        }
    });
}(jQuery));