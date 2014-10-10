$(document).ready(function () {

	(function (window, document, undefined) {

		'use strict';

		// Selectors
		// ==============================================================================

		var $utility_toggle = $('.utility-bar__toggle'),
				state           = 'active',
				hero_height     = $('.branding').height(),
				content_pad     = $('#content').css('padding-top').split('px')[0],
				sticky_trigger  = +hero_height + +content_pad,
				sticky_width    = 1180,
				fix_class       = 'is-fixed';

		// Methods
		// ==============================================================================

		function navToggle(event, cname) {
			event.preventDefault();
			$('.utility-bar').toggleClass(cname);
			$('.utility-bar__items').toggleClass(cname);
		}

		function stickyAd() {
			if($(window).width() >= sticky_width) {
				var fusion_ad       = $('#fusionads'),
						content_offset  = $('#content').offset().top,
						scroll_top      = $(window).scrollTop();

				if(scroll_top >= content_offset) {
					fusion_ad.addClass(fix_class);
				}

				if(scroll_top < sticky_trigger) {
					fusion_ad.removeClass(fix_class);
				}
			}
		}

		function stickyResize() {
			if($(window).width() < sticky_width) {
				fusion_ad.removeClass(fix_class);
			}
			if($(window).width() >= sticky_width) {
				$(window).on('scroll', stickyAd);
			}
		}

		function lemanzSimpleLink(event) {
			$("html, body").animate({
				scrollTop: $($.attr(this, 'href')).offset().top
			}, 1200);

			event.preventDefault();
		}


		// Event Handlers
		// ==============================================================================
		
		if(window.matchMedia( "(min-width:" + sticky_width + "px)" ).matches) {
			$(window).on('scroll', stickyAd);
		}


		$(window).smartresize(stickyResize);


		$('.flex-video').fitVids();


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

		$('.lemanz-sl').on('click', lemanzSimpleLink);
		$('.lemanz-sl').on('touchstart', lemanzSimpleLink);

	})(window, document);

});