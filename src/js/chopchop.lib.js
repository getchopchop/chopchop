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
	
	var Mode = {
		TOGGLE: 'toggle',
		ACTIVATE: 'activate',
		DEACTIVATE: 'deactivate'
	};

    Toggle.prototype = {
        init: function() {
            var self = this;

            $(document).on('click', '[data-toggle-action]', function(e) {
                e.preventDefault();
                var $this = $(this), t,
                    $target = (t = $this.data('toggle-target')) ? $('[data-toggle-id="' + t + '"]') : $this;

				self.toggle($target, $this.data('toggle-action') || Mode.TOGGLE);
            });
        },
		toggle: function($el, action) {
			var mode = action;

			if (mode === Mode.TOGGLE) {
				if ($el.hasClass('is-active')) {
					mode = Mode.DEACTIVATE;
				} else {
					mode = Mode.ACTIVATE;
				}
			}
			
			var pending = [$el], processed = [],
				id, dependants, group, $current,
                iterations = 0;
			
			while (pending.length > 0) {
				$current = pending.shift();
				
				// Skip already processed nodes
				if (processed.indexOf($current) !== -1) {
					continue;
				}
				
				id = $current.data('toggle-id');
				group = $current.data('toggle-group');
				
				// NOTE: Perhaps don't process these; add to some kind of queue first (with activate or deactivate action)
				$('[data-toggle-group="' + group + '"]').each(function() {
					var $this = $(this), chain;
					
                    // Skip element itself
					if (this === $current[0]) {
                        return;
                    }

                    // Just a group member, not the target: deactivate
                    $this.addClass('is-inactive').removeClass('is-active');														
				});
				
                // Process target
                if (mode === Mode.ACTIVATE) {
                    $current.addClass('is-active').removeClass('is-inactive');
                } else {
                    $current.addClass('is-inactive').removeClass('is-active');
                }
                
                // Chain onto targets
                if (chain = $current.data('toggle-' + mode)) {
                    chain.split(',').forEach(function(chained) {
                        var $chained = $('[data-toggle-id="' + chain + '"]');

                        if (processed.indexOf($chained[0]) !== -1 || pending.indexOf($chained[0]) !== -1) {
                            return;
                        }

                        pending.push($('[data-toggle-id="' + chained + '"]'));
                    });
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
