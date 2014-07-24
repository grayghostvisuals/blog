<footer role="contentinfo">
	<ul id="info" class="socials">
		<li class="twitter"><a href="//twitter.com/#!/gryghostvisuals" class="ss-icon ss-social-circle" aria-hidden="true">twitter</a></li>
		<li class="github"><a href="//github.com/grayghostvisuals" class="ss-icon ss-social-circle" aria-hidden="true">github</a></li>
		<li class="dribbble"><a href="//dribbble.com/grayghostvisuals" class="ss-icon ss-social-circle" aria-hidden="true">dribbble</a></li>
		<li class="facebook"><a href="//facebook.com/grayghostvisuals" class="ss-icon ss-social-circle" aria-hidden="true">facebook</a></li>
		<li class="gplus"><a href="//plus.google.com/u/0/109644357599758733825/about" class="ss-icon ss-social-circle" aria-hidden="true">googleplus</a></li>
	</ul>

	<div class="widgets-wrap">
		<?php get_sidebar('footer'); ?>
	</div>

	<small class="copyright">Gray Ghost Visuals Press &bull; Exploring Front&ndash;end Web Development &amp; Design Since <time datetime="2009">2009</time></small>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/minified/scripts.min.js"></script>

<?php if ( is_single() ) : ?>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<script>
	// @reference
	// http://www.ivanthevariable.com/wordpress-comment-live-preview
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
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-27240293-1');ga('send','pageview');
</script>
<?php wp_footer(); ?>
</body>
</html>