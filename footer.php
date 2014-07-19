<footer role="contentinfo">
	<?php get_sidebar('footer'); ?>

	<ul class="socials">
		<li class="twitter"><a href="//twitter.com/#!/gryghostvisuals" class="ss-icon ss-social">&#xF611;</a></li>
		<li class="github"><a href="//github.com/grayghostvisuals" class="ss-icon ss-social">&#xF670;</a></li>
		<li class="dribbble"><a href="//dribbble.com/grayghostvisuals" class="ss-icon ss-social">&#xF660;</a></li>
		<li class="facebook"><a href="//facebook.com/grayghostvisuals" class="ss-icon ss-social">&#xF610;</a></li>
		<li class="gplus"><a href="//plus.google.com/u/0/109644357599758733825/about" class="ss-icon ss-social">&#xF613;</a></li>
	</ul>

	<small>Gray Ghost Visuals Press &bull; Exploring Front&ndash;end Web Development &amp; Design since <time datetime="2009">2009</time></small>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/prism.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php if ( is_single() || is_front_page() ) : ?>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<script>
	// @reference
	// http://www.ivanthevariable.com/wordpress-comment-live-preview/
	$('p[class*="comment-form"] > input').each(function() {
		$(this).val('');
	});

	$('p[class*="comment-form"] > input').change(function() {
		var author = $('#author').val(),
				email = CryptoJS.MD5( $('#email').val().toLowerCase().trim() ),
				url = $('#url').val();

		$('.preview-url').text(author);
		$('.commentPreview .avatar').attr('src','http://gravatar.com/avatar/' + email);
		$('.preview-url').attr('href',url);
	});

	$('textarea#comment').keyup(function() {
		var comment = $(this).val();
		$('.preview-text').html(comment);
	});
</script>
<?php endif; ?>

<script async>
	//var _gaq=[ ['_setAccount','UA-27240293-1'],['_trackPageview'],['_trackPageLoadTime'],['_setSiteSpeedSampleRate', 100]];
	//(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	//g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	//s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<script src="https://get.gridsetapp.com/17266/overlay/"></script>

<?php wp_footer(); ?>
</body>
</html>