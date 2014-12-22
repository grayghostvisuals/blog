(function (window, document, undefined) {

  'use strict';

  // Selectors
  // ==============================================================================

  var $utility_bar       = $('.utility-bar'),
      $utility_toggle    = $('.utility-bar__toggle'),
      $utility_bar_items = $('.utility-bar__items'),
      hero_height        = $('.branding').height(),
      content_pad        = $('#content').css('padding-top').split('px')[0],
      sticky_trigger     = +hero_height + +content_pad,
      sticky_width       = 1180,
      state              = 'active',
      fix_class          = 'is-fixed';


  // Methods
  // ==============================================================================

  function navToggle(event, cname) {
    event.preventDefault();
    $('.utility-bar, .utility-bar__items').toggleClass(cname);
  }


  function stickyAd() {
    var fusion_ad       = $('#fusionads');

    if($(window).width() >= sticky_width) {
      var content_offset  = $('#content').offset().top,
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
    var fusion_ad       = $('#fusionads');
    if($(window).width() < sticky_width) {
      if(fusion_ad.hasClass(fix_class)) {
        fusion_ad.removeClass(fix_class);
      }
    }
    if($(window).width() >= sticky_width) {
      $(window).on('scroll', stickyAd);
    }
  }


  function lemanzSimpleLink(event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 900);
  }


  function a11ySetup() {
    $utility_bar.attr({
      'aria-expanded' : 'false'
    });

    $utility_bar_items.attr({
      'aria-hidden' : 'true'
    });

    $utility_toggle.attr({
      'aria-hidden' : 'false',
      'tabindex' : '1',
      'aria-pressed' : 'false'
    });
  }


  function a11yState(class_state) {
    if($utility_bar_items.hasClass(class_state)) {
      $(this).attr({
        'aria-pressed' : 'true'
      });
      $utility_bar.attr({
        'aria-expanded' : 'true'
      });
      $utility_bar_items.attr({
        'aria-hidden' : 'false'
      });
    } else {
      $(this).attr({
        'aria-pressed' : 'false'
      });
      $utility_bar.attr({
        'aria-expanded' : 'false'
      });
      $utility_bar_items.attr({
        'aria-hidden' : 'true'
      });
    }
  }


  // Event Handlers
  // ==============================================================================
  
  if(window.matchMedia( "(min-width:" + sticky_width + "px)" ).matches) {
    $(window).on('scroll', stickyAd);
  }

  $(window).smartresize(stickyResize);

  $('.flex-video').fitVids();

  a11ySetup();

  $utility_toggle.on('click', function(event) {
    navToggle.call(this, event, state);
    a11yState(state);
  });

  $utility_toggle.on('touchstart', function(event) {
    navToggle.call(this, event, state);
    a11yState(state);
  });

  $('.formatting-toggle').bind('click', function(event) {
    event.preventDefault();
    $(this).next().toggleClass(state);
  });

  $('.lemanz-sl').on('click', lemanzSimpleLink);
  $('.lemanz-sl').on('touchstart', lemanzSimpleLink);

})(window, document);