<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>

<?php if ( $ip == $ip_address ) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/prism.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/grid-toggle.js"></script>
<?php else : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/scripts.min.js" async></script>
<?php endif; ?>

<?php if ( is_single() ) : ?>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js" async></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/comment-preview.js" async></script>
<?php endif; ?>

<?php if ( $ip !== $ip_address ) : ?>
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