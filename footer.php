<div class="m-all t-all d-all">
    <footer role="contentinfo">
        <section id="footer-widgets">
            <?php if ( function_exists('dynamic_sidebar') ) : ?>
                <?php dynamic_sidebar('footer widget') ?>
            <?php endif; ?>
        </section>
        <section class="m-all t2-t6 d4-d10">
            <p><small>Gray Ghost Visuals Press &bull; Exploring Front&ndash;end Web Development &amp; Design <time datetime="2009">since 2009</time></small></p>
        </section>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/script-min.js?v1.9.38"></script>
<script async>
    var _gaq=[ ['_setAccount','UA-27240293-1'],['_trackPageview'],['_trackPageLoadTime'],['_setSiteSpeedSampleRate', 100]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php wp_footer(); ?>
</body>
</html>