$(document).ready(function () {

	// FitVids.js
	$('.flex-video').fitVids();


	$('.utility-bar__toggle').bind('click', function(event) {
		event.preventDefault();
		$(this).parent().toggleClass('active');
		$('body').toggleClass('active');
	});

	$('a[href="#info"]').bind('click', function(event) {
		$('.utility-bar__toggle').parent().removeClass('active');
		$('body').removeClass('active');
	});


	$('.formatting-toggle').bind('click', function(event) {
		event.preventDefault();
		$(this).next().toggleClass('active');
	});


	//gives tactile feedback for read-more button on touch interfaces
	$('.read-more').bind('mousedown mouseup', function () {
		$(this).toggleClass('active');
	});


	$('#article-links li').each(function() {
		$(this).prepend('<b class="ss-icon">&#x1F517;</b>');
	});
});//end document.ready