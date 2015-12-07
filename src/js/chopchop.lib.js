// Generics
var ChopChop = (function($, ChopChop) {
    var api = ChopChop.api = {},
        plugins = ChopChop.plugins = {};

    // Exception
    var Exception = ChopChop.Exception = function(message) {
        this.message = message;
    };

    Exception.prototype = {
        toString: function() {
            return 'EXCEPTION: ' + this.message;
        }
    };

    // Initialisation
    var defaultInitOptions = {
        'toggle': {}
    };

    ChopChop.init = api.init = function(options) {
        options = options || defaultInitOptions;

        for (var plugin in options) {
            if (!options.hasOwnProperty(plugin)) {
                continue;
            }

            var name = plugin.charAt(0).toUpperCase() + plugin.substr(1);

            if (!plugins[plugin] && ChopChop[name]) {
                plugins[plugin] = new ChopChop[name](options);
            }
        }
    };

    // jQuery goodness
    $.fn.chopchop = function() {
        var args = Array.prototype.slice.call(arguments),
            numArgs = args.length;

        if (numArgs === 0) {
            return api;
        }

        var method = args.shift();

        if (api.hasOwnProperty(method)) {
            return this.each(function() {
                var params = args.slice(0);
                params.unshift(this);
                api[method].apply(api, params);
            });
        }
    };

    return ChopChop;
})(jQuery, ChopChop || {});


// Toggles
var ChopChop = (function($, ChopChop) {
    var defaultOptions = {
        classActive: 'is-active',
        classInactive: 'is-inactive'
    };

    // Toggle
    var Toggle = ChopChop.Toggle = function(options) {
        this.options = $.extend({}, defaultOptions, options);
        this.init();
    };

	var Action = {
		TOGGLE: 'toggle',
		ACTIVATE: 'activate',
		DEACTIVATE: 'deactivate'
	};

    var Trigger = {
        DIRECT_ONLY: 'direct-only',
        INDIRECT_ONLY: 'indirect-only',     // Why would you want this? Oh well.
        BOTH: 'both'    // Default
    };

    Toggle.prototype = {
        init: function() {
            var self = this;

            $(document).on('click', '[data-action]', function(e) {
                var $this = $(this), t,
                    $target = (t = $this.data('target')) ? $('#' + t) : false,
                    mode = $this.data('trigger-on') || Trigger.BOTH;

                if (!$target) {
                    return;
                }

                if (mode === Trigger.DIRECT_ONLY && e.target !== this) {
                    return;
                } else if (mode === Trigger.INDIRECT_ONLY && e.target === this) {
                    return;
                }

                e.preventDefault();
				self.performAction($target, $this.data('action') || Action.TOGGLE);
            });
        },
        toggle: function(target, action) {
            var $target = typeof target === 'string' ? $('#' + target) : $(target);

            if (!$target.size()) {
                return;
            }

            this.performAction($target, action || Action.TOGGLE);
        },
		performAction: function($el, action) {
			if (action === Action.TOGGLE) {
				if ($el.hasClass('is-active')) {
					action = Action.DEACTIVATE;
				} else {
					action = Action.ACTIVATE;
				}
			}

			var pending = [$el], processed = [],
				id, dependants, group, $current,
                iterations = 0,
                el, chain, $other, i;

			while (pending.length > 0) {
				$current = pending.shift();

				// Skip already processed nodes
				if (processed.indexOf($current) !== -1) {
					continue;
				}

				id = $current.attr('id');
				group = $current.data('group');

				// NOTE: Perhaps don't process these; add to some kind of queue first (with activate or deactivate action)
				for (i = 0, all = $('[data-group="' + group + '"]'), l = all.length; i < l; ++i) {
                    el = all[i];
    			    $other = $(el);

                    // Skip element itself
					if (el === $current[0]) {
                        continue;
                    }

                    // Just a group member, not the target: deactivate
                    $other.addClass('is-inactive').removeClass('is-active');
				}

                // Process target
                if (action === Action.ACTIVATE) {
                    $current.addClass('is-active').removeClass('is-inactive');
                } else {
                    $current.addClass('is-inactive').removeClass('is-active');
                }

                // Chain onto targets
                chain = ($current.data('cascade-' + action) || '').split(',')
                    .concat(($current.data('cascade') || '').split(','));

                for (i = 0, l = chain.length; i < l; ++i) {
                    $other = $('#' + chain[i]);

                    if (processed.indexOf($other[0]) !== -1 || pending.indexOf($other[0]) !== -1) {
                        continue;
                    }

                    pending.push($other);
                }

				processed.push($current[0]);
                iterations += 1;

                if (iterations > 100) {
                    throw new ChopChop.Exception("Too many iterations, aborting");
                }
			}
		}
    };

    // Expose toggle api
    ChopChop.api.toggle = function() {
        return ChopChop.plugins.toggle.toggle.apply(ChopChop.plugins.toggle, arguments);
    };

    return ChopChop;
})(jQuery, ChopChop || {});

