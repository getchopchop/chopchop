$(document).ready(function() {

	// Vars for toggle
	var toggle = '.js-toggle',
		toggleTitle = '.js-toggle__title',
		toggleContent = '.js-toggle__content',
		toggleParent = '.js-toggle-parent';

	// Hide all toggles
	$(toggleContent).hide();
	
	// When clicked, do class toggling of active
	$(toggleTitle).click(function(e) {
		e.preventDefault();
		var thisActive = $(this).parents(toggle).hasClass('active');
		$(this).parents(toggleParent).find(toggle).removeClass('active');
		if(!thisActive) {
			$(this).parents(toggle).addClass('active');
		} else {
			$(this).parents(toggle).removeClass('active');
		}
	});
	
});