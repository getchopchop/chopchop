var ChopChop = (function($, ChopChop) {

    var defaultOptions = {
        classActive: 'is-active',
        classInactive: 'is-inactive'
    };

    // Exception
    var Exception = ChopChop.Exception = function(message) {
        this.message = message;
    };

    Exception.prototype = {
        toString: function() {
            return 'EXCEPTION: ' + this.message;
        }
    };

    // Toggle
    var Toggle = ChopChop.Toggle = function(root, options) {
        this.options = $.extend({}, defaultOptions, options);
        this.$root = $(root);
        this.init();
    };

	var Action = {
		TOGGLE: 'toggle',
		ACTIVATE: 'activate',
		DEACTIVATE: 'deactivate'
	};

    Toggle.prototype = {
        init: function() {
            var self = this;

            $(document).on('click', '[data-action]', function(e) {
                e.preventDefault();
                var $this = $(this), t,
                    $target = (t = $this.data('target')) ? $('#' + t) : false;

                if (!$target) {
                    return;
                }

				self.toggle($target, $this.data('action') || Action.TOGGLE);
            });
        },
		toggle: function($el, action) {
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

    return ChopChop;
})(jQuery, ChopChop || {});
