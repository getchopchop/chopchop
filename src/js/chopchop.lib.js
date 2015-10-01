var ChopChop = (function($, ChopChop) {

    var defaultOptions = {
            classActive: 'is-active',
            classInactive: 'is-inactive'
        },
        processed = {};

    var Toggle = ChopChop.Toggle = function(root, options) {
        this.options = $.extend({}, defaultOptions, options);
        this.$root = $(root);
        this.init();
    };

    Toggle.prototype = {
        init: function() {
            var self = this;

            $(document).on('click', '[data-toggle-target]', function(e) {
                e.preventDefault();
                self.toggleTarget($(this).data('toggle-target'));
            });
        },
        toggleTarget: function(target) {
            var $target, group, groupMembers, isActive, $this,
                cascades = [], cascade,
                self = this;

            target.split(' ').forEach(function(target) {
                // Prevent infinite recusion possibly via cascades
                if (processed[target]) {
                    return;
                }

                processed[target] = true;

                $target = self.$root.find('[data-toggle="' + target + '"]');
                group = $target.data('toggle-group');

                $('[data-toggle-group="' + group + '"]').each(function() {
                    $this = $(this);

                    if (this === $target[0]) {
                        $this.removeClass('is-inactive').addClass('is-active');

                        if (cascade = $this.data('toggle-cascade')) {
                            cascades.push(cascade);
                        }
                    } else {
                        $this.removeClass('is-active').addClass('is-inactive');
                    }
                });

                // Process any collected cascades
                cascades.forEach(function(cascade) {
                    self.toggleTarget(cascade);
                });

                delete processed[target];
            });
        }
    };

    return ChopChop;
})(jQuery, ChopChop || {});
