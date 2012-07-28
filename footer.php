<div class="m-all">
  <footer role="contentinfo">
    <section id="footer-widgets">
      <?php if ( function_exists('dynamic_sidebar') ) : ?>
      <?php dynamic_sidebar('footer widget') ?>
      <?php endif; ?>
    </section>

    <!-- It is completely optional, but if you like WP&ndash;Flex I would appreciate it if you keep the credit link at the bottom -->
    <section id="copyright">
      <small><a href="//github.com/grayghostvisuals/WP-Flex" rel="external"><b class="ss-icon">&#xEB85;</b> WP&ndash;Flex Boilerplate</a> <a href="//wordpress.org" rel="external"><b class="ss-icon ss-social ss-wordpress"></b> Foundation</a></small>
    </section>

    <section id="socials">
      <ul>
        <li id="official-site"><b class="ss-icon"><a href="//grayghostvisuals.com" rel="external">&#x2601;</a></b></li>
        <li id="github"><b class="ss-icon ss-social"><a href="//github.com/grayghostvisuals" rel="external">&#xF670;</a></b></li>
        <li id="dribbble"><b class="ss-icon ss-social"><a href="//dribbble.com/grayghostvisuals" rel="external">&#xF660;</a></b></li>
        <li id="twitter"><b class="ss-icon ss-social"><a href="//twitter.com/#!/gryghostvisuals" rel="external">&#xF611;</a></b></li>
        <li id="twitter"><b class="ss-icon ss-social"><a href="//facebook.com/grayghostvisuals" rel="external">&#xF610;</a></b></li>
        <li id="github"><b class="ss-icon ss-social"><a href="//plus.google.com/u/0/109644357599758733825/about" rel="external">&#xF613;</a></b></li>
      </ul>
    </section>
  </footer>
</div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minified/script-min.js?v1.8.9"></script>

  <script>
  var _gaq=[['_setAccount','UA-27240293-1'],['_trackPageview'],['_trackPageLoadTime']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/webfonts/minified/ss-icons-min.js"></script>
  <script src="http://get.gridsetapp.com/1046/overlay/"></script>
  <?php wp_footer(); ?>
</body>
</html>