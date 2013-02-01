<div class="m-all t-all d-all">
    <footer role="contentinfo">
        <section id="footer-widgets">
            <?php if ( function_exists('dynamic_sidebar') ) : ?>
                <?php dynamic_sidebar('footer widget') ?>
            <?php endif; ?>
        </section>
<!--         <section id="copyright" class="t1-t3 d2-d6">
            <p><small><a href="//github.com/grayghostvisuals/WP-Flex" rel="external"><b class="ss-icon">&#xEB85;</b> Built on top of WP&ndash;Flex</a></small></p>
        </section> -->
        <section class="m-all t2-t6 d4-d10">
            <p><small>Gray Ghost Visuals Press &bull; Exploring Front&ndash;end Web Development &amp; Design <time datetime="2009" pubdate>since 2009</time></small></p>
        </section>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/script-min.js?v1.9.37"></script>
<script async>
    var _gaq=[ ['_setAccount','UA-27240293-1'],['_trackPageview'],['_trackPageLoadTime'],['_setSiteSpeedSampleRate', 100]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<script src="https://get.gridsetapp.com/1046/overlay/"></script>
<?php wp_footer(); ?>
</body>
</html>