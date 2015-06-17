;(function($){
	$(document).ready(function() {

		var $body = $('body');

		// Vars for toggle
		var toggle = '.js-toggle',
			toggleTitle = '.js-toggle__title',
			toggleContent = '.js-toggle__content',
			toggleParent = '.js-toggle-parent';

		// Hide all toggles
		$(toggleContent).hide();

		// When clicked, do class toggling of active
		$(toggleTitle).on('click', function(e) {
			e.preventDefault();
			var thisActive = $(this).parents(toggle).hasClass('active');
			$(this).parents(toggleParent).find(toggle).removeClass('active');
			if(!thisActive) {
				$(this).parents(toggle).addClass('active');
			} else {
				$(this).parents(toggle).removeClass('active');
			}
		});


		// Active menu magic
		var navHover = '.nav--primary > ul > li';
		var timeoutInt;

		$(navHover).hover(function() {
			$(navHover).removeClass('active');
			$(this).addClass('active');
			showOverlay('overlay-nav');
			if(timeoutInt){
				window.clearTimeout(timeoutInt);
			}
		}, function() {
			var self = this;
			hideOverlay();

			if(timeoutInt) {
				window.clearTimeout(timeoutInt);
			}

			timeoutInt = window.setTimeout(function() {
				$(self).removeClass('active');
			}, 500);
		});


		// burger
		var burgerItem = '.nav__burger',
			burgerMenu = '.nav--burger',
			burgerState = 0;

		$(burgerItem).click(function() {
			if(burgerState === 0) {
				burgerState = 1;
				$(burgerMenu).show();
				showOverlay('overlay-search');
			} else {
				burgerState = 0;
				$(burgerMenu).hide();
				hideOverlay();
			}
		});

		enquire.register("screen and (min-width:52em)", {
			unmatch : function() {
				$('.widgets').appendTo('.modal__content');
			},
			match : function() {
				$('.widgets').appendTo('.sidebar');
		    },
			setup : function() {
				this.unmatch();
			}
		});


		// Search focus
		var searchFocus = '.search input',
			searchInvertFocus = '.search--invert input',
			searchSuggestions = '.suggestive-search';

		$(searchFocus).on('focus', function() {
			$(searchSuggestions).show();
		});
		$(searchFocus).on('focusout', function() {
			$(searchSuggestions).hide();
		});

		$(searchInvertFocus).on('focus', function() {
			showOverlay('overlay-search');
		});
		$(searchInvertFocus).on('focusout', function() {
			hideOverlay();
		});

		// Toggle player
		$('.toggle-preview').click(function(e) {
			e.preventDefault();
			if($('body').hasClass('active-preview')) {
				$('.playlist').removeClass('active');
			}
			$('body').toggleClass('active-preview');
		});

		// Queue
		$(document).delegate('.overlay-player .overlay, .player__queue, .player__toggle', 'click', function(e) {
			e.preventDefault();
			if($('.playlist').hasClass('active')) {
				hideOverlay();
			} else {
				showOverlay('overlay-player');
			}
			$('.playlist').toggleClass('active');
		});

		// Show and hide overlays
		function showOverlay(type) {
			$('body').addClass(type);
			$('.overlay').stop().fadeIn(500);
		}

		function hideOverlay() {
			var types = ['nav', 'search', 'player', 'modal'];
			var prefix = 'overlay-';
			$('.overlay').stop().fadeOut(500, function() {
				$('body').removeClass(prefix + types.join(' ' + prefix));
			});
		}

	});
}(jQuery));
