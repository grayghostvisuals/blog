$(document).ready(function () {

	// FitVids.js
	$('.flex-video').fitVids();


	// Utility Menu
	var $utility_toggle = $('.utility-bar'),
		state = 'active';

	function navToggle(event, cname) {
		event.preventDefault();
		$(this).toggleClass(cname);
		$('.utility-bar__items').toggleClass(cname);
	}

	$utility_toggle.on('click', function() {
		navToggle.call(this, event, state);
	});

	$utility_toggle.on('touchstart', function() {
		navToggle.call(this, event, state);
	});


	// Comment Formatting Toggle
	$('.formatting-toggle').bind('click', function(event) {
		event.preventDefault();
		$(this).next().toggleClass('active');
	});


	// Article Links Icon
	$('#article-links li').each(function() {
		$(this).prepend('<b class="ss-icon">&#x1F517;</b>');
	});
});//end document.ready