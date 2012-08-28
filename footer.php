<div class="m-all t-all d-all">
    <footer role="contentinfo">
        <section id="footer-widgets">
            <?php if ( function_exists('dynamic_sidebar') ) : ?>
            <?php dynamic_sidebar('footer widget') ?>
            <?php endif; ?>
        </section>

        <section id="copyright">
            <small><a href="//github.com/grayghostvisuals/WP-Flex" rel="external"><b class="ss-icon">&#xEB85;</b> WP&ndash;Flex Boilerplate</a> <a href="//wordpress.org" rel="external"><b class="ss-icon ss-social ss-wordpress"></b> Foundation</a></small>
        </section>

        <section class="socials footer">
            <ul>
                <li class="twitter"><a href="//twitter.com/#!/gryghostvisuals" class="ss-icon ss-social-circle" rel="external">&#xF611;</a></li>
                <li class="github"><a href="//github.com/grayghostvisuals" class="ss-icon ss-social-circle" rel="external">&#xF671;</a></li>
                <li class="dribbble"><a href="//dribbble.com/grayghostvisuals" class="ss-icon ss-social-circle" rel="external">&#xF660;</a></li>
                <li class="website"><a href="//grayghostvisuals.com" class="ss-icon" rel="external">&#x2601;</a></li>
                <li class="facebook"><a href="//facebook.com/grayghostvisuals" class="ss-icon ss-social-circle" rel="external">&#xF610;</a></li>
                <li class="gplus"><a href="//plus.google.com/u/0/109644357599758733825/about" class="ss-icon ss-social-circle" rel="external">&#xF613;</a></li>
            </ul>
        </section>
    </footer>
</div>

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/script-min.js?v1.9.3"></script>

<!-- Google Analytics -->
<script>
var _gaq=[ ['_setAccount','UA-27240293-1'],['_trackPageview'],['_trackPageLoadTime'],['_setSiteSpeedSampleRate', 100]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!-- Symbolset -->
<script src="<?php echo get_template_directory_uri(); ?>/webfonts/minified/ss-min.js?v1.9.3"></script>
<script src="https://get.gridsetapp.com/1046/overlay/"></script>
<?php wp_footer(); ?>
</body>
</html>