$(document).ready(function () {

    $('#rss').click(function () {
        var position = $(this).css('top') === '0px' ? '-2.75em' : '0';
        $(this).animate({
            top: position
        }, 500);
    });

    // FitVid.js
    $('.flex-video').fitVids();

    // evernote's memory button text insertion
    $('.evernoteSiteMemoryLink').append('<span class="evernoteSiteMemoryLinkText">Read Me Later</span>');

    //gives tactile feedback for read-more button on touch interfaces
    $('.read-more').bind('mousedown mouseup', function () {
        $(this).toggleClass('active');
    });

    // grab the button
    var el = document.getElementsByClassName('button');

    function touchStart(event) {
        el.setAttribute('class', active);
    };

    for (var i = 0; i < el.length; i++) {
        el[i].addEventListener('touchstart', touchStart, false);
    };

    $('#article-links li').each(function() {
        $(this).prepend('<b class="ss-icon">&#x1F517;</b>');
    });

    $('.post-438').append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');
    $('.post-921').append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');
    $('.post-1284').append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');
});//end document.ready