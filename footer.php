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

<?php $ip = $_SERVER['REMOTE_ADDR']; ?>
<?php if ( $ip == '127.0.0.1' ) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/prism.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/grid-toggle.js"></script>
<?php else : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/scripts.1406240724855369080.min.js"></script>
<?php endif; ?>

<?php if ( is_single() ) : ?>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js" async></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/comment-preview.1406240724855369080.js" async></script>
<?php endif; ?>

<?php $ip = $_SERVER['REMOTE_ADDR']; ?>
<?php if ( $ip !== '127.0.0.1' ) : ?>
<script async>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-27240293-1');ga('send','pageview');
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>