<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
<script>
var tmax_tl          = new TimelineMax({ delay: 0.1675, repeat: -1 }),
    globe_continents = [$('#globe #middle g path'), $('#globe #left g path')],
    globe_speed      = 10;

var map_from = {
  x: 0
};

var map_to = {
  x: 150,
  ease: Linear.easeOut
};

tmax_tl.fromTo(globe_continents, globe_speed, map_from, map_to, 0);
</script>

<?php if ( $ip == $ip_address ) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/prism.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/grid-toggle.js"></script>
<?php else : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/scripts.min.js"></script>
<?php endif; ?>

<?php if ( is_single() ) : ?>
<?php if ( $ip == $ip_address ) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/crypto.js" async></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/comment-preview.js" async></script>
<?php else : ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/comment-preview.min.js" async></script>
<?php endif; ?>
<?php endif; ?>

<?php if ( $ip !== $ip_address ) : ?>
<script async>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-27240293-1');ga('send','pageview');
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>