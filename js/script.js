$(document).ready(function () {

	$('.flex-video').fitVids();

	var $utility_toggle = $('.utility-bar__toggle'),
		state = 'active';

	function navToggle(event, cname) {
		event.preventDefault();
		$('.utility-bar').toggleClass(cname);
		$('.utility-bar__items').toggleClass(cname);
	}

	$utility_toggle.on('click', function(event) {
		navToggle.call(this, event, state);
	});

	$utility_toggle.on('touchstart', function(event) {
		navToggle.call(this, event, state);
	});


	$('.formatting-toggle').bind('click', function(event) {
		event.preventDefault();
		$(this).next().toggleClass('active');
	});


	$('#article-links li').each(function() {
		$(this).prepend('<b class="ss-icon">&#x1F517;</b>');
	});
});