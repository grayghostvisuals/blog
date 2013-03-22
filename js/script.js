if (Modernizr.svg) {
	var relativeURL = "http://192.168.1.100/wordpress/wp-content/themes/blog.grayghostvisuals/img/";
	var staticURL = "//static.grayghostvisuals.com/imgblog/";
	$('.blog-name a').append('<img src="' + relativeURL + 'logo.png" alt="gray ghost visuals press icon leading you home" class="logo"><span class="visuallyhidden" aria-hidden="true"><?php esc_attr( bloginfo( "name" ) ); ?></span>');
}else {
	$('.blog-name a').append('<img src="' + relativeURL + 'logo.png" alt="gray ghost visuals press icon leading you home" class="logo"><span class="visuallyhidden" aria-hidden="true"><?php esc_attr( bloginfo( "name" ) ); ?></span>');
}

$(document).ready(function () {

	$('#rss').click(function () {
		var position = $(this).css('top') === '0px' ? '-2.75em' : '0';
		$(this).animate({
			top: position
		}, 500);
	});

	// FitVid.js
	$('.flex-video').fitVids();

	//gives tactile feedback for read-more button on touch interfaces
	$('.read-more').bind('mousedown mouseup', function () {
		$(this).toggleClass('active');
	});

	// grab the button
	var el = document.getElementsByClassName('button');

	function touchStart() {
		el.setAttribute('class', 'active');
	}

	for (var i = 0; i < el.length; i++) {
		el[i].addEventListener('touchstart', touchStart, false);
	}

	$('#article-links li').each(function() {
		$(this).prepend('<b class="ss-icon">&#x1F517;</b>');
	});

	//$('.post-438').append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');
	//$('.post-921').append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');
	//$('.post-1414').append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');
});//end document.ready