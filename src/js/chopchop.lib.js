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
        'toggle': {},
        'tabordion': {}
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

            $(document).on('click', '[data-cc-action]', function(e) {
                var $this = $(this), t,
                    $target = (t = $this.data('cc-target')) ? $('#' + t) : false,
                    mode = $this.data('cc-trigger-on') || Trigger.BOTH;

                if (!$target) {
                    return;
                }

                if (mode === Trigger.DIRECT_ONLY && e.target !== this) {
                    return;
                } else if (mode === Trigger.INDIRECT_ONLY && e.target === this) {
                    return;
                }

                e.preventDefault();
				self.performAction($target, $this.data('cc-action') || Action.TOGGLE);
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
				group = $current.data('cc-group');

				// NOTE: Perhaps don't process these; add to some kind of queue first (with activate or deactivate action)
				for (i = 0, all = $('[ data-cc-group="' + group + '"]'), l = all.length; i < l; ++i) {
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
                    $current.trigger('chopchop:activate');
                } else {
                    $current.addClass('is-inactive').removeClass('is-active');
                    $current.trigger('chopchop:deactivate');
                }

                // Chain onto targets
                chain = ($current.data('cc-cascade-' + action) || '').split(',')
                    .concat(($current.data('cc-cascade') || '').split(','));

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

// Tabordions
var ChopChop = (function($, ChopChop) {
    var defaultOptions = {
        classActive: 'is-active',
        classInactive: 'is-inactive',
        headerSelector: '.tabs__header',
        bodySelector: '.tabs__body'
    };

    // Tabordions
    var Tabordion = ChopChop.Tabordion = function(options) {
        this.options = $.extend({}, defaultOptions, options);
        this.init();
    };

    Tabordion.prototype = {
        init: function() {
            var self = this;

            $('[data-cc-tabordion]').each(function() {
                self.applyToContainer(this);
            });
        },
        applyToContainer: function(root, name) {
            var $root = $(root),
                headers = $root.find(this.options.headerSelector),
                bodies = $root.find(this.options.bodySelector);

            name = name || $root.data('cc-tabordion');

            if (headers.size() !== bodies.size()) {
                throw new ChopChop.Exception(
                    "Tabordion: number of headers does not match number of bodies (" + headers.size() + " vs " + bodies.size()+ ")"
                );
            }

            for (var i = 0, l = headers.size(); i < l; ++i) {
                $(headers[i]).attr({
                    'id': name + '-header-' + i,
                    'data-cc-group': name + '-headers',
                    'data-cc-action': 'activate',
                    'data-cc-target': name + '-body-' + i
                });
                $(bodies[i]).attr({
                    'id': name + '-body-' + i,
                    'data-cc-group': name + '-bodies',
                    'data-cc-cascade-activate': name + '-header-' + i
                });
            }
        }
    };

    // Expose api
    ChopChop.api.tabordion = function() {
        return ChopChop.plugins.tabordion.applyToContainer.apply(ChopChop.plugins.tabordion, arguments);
    };

    return ChopChop;
})(jQuery, ChopChop || {});
