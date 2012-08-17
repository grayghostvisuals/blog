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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/minified/script-min.js?v1.9.0"></script>

<script>
var _gaq=[ /*['_setAccount','UA-27240293-1']*/,['_trackPageview'],['_trackPageLoadTime'],['_setSiteSpeedSampleRate', 100]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!-- symbolset social -->
<script src="<?php echo get_template_directory_uri(); ?>/webfonts/ss-social.js"></script>
<!-- symbolset standard -->
<script src="<?php echo get_template_directory_uri(); ?>/webfonts/ss-standard.js"></script>

<!-- gridset overlay -->
<script>
// Gridset Toggle JS
gs = {

    init: function (p, c, w) {

        gs.bind(document, 'keydown', function (e) { 

            if (!e) var e = window.event;

            if(e.metaKey || e.ctrlKey) {

                switch (e.which || e.keyCode) {
                    case 71:

                        var gw = document.getElementById('gridsetoverlaywrap');

                        if (!gw) gs.show(['m','t','d'], [3,7,13], [364,676,1641]);
                        else document.body.removeChild(gw);

                        gs.prevent(e);
                        break;
                }

            }

        });

    },

    show: function (p, c, w) {

        var b = document.getElementsByTagName('body')[0],
            gw = '<div id="gridwrap"><div id="gridoverlay" class="body">',

            k = 0, breaks = '',

            styles = '<style id="gridsetoverlaystyles">#gridwrap {display:block;position:fixed;top:0;left:0;width:100%;height:100%;z-index:1000;pointer-events:none;font-family:Helvetica, Arial, sans-serif !important;}#gridoverlay {position:relative;height:100%;}#gridoverlay div {display:block;height:100%;color:rgb(150,150,255);}#gridoverlay .gridset {position:absolute;width:100%;height:100%;top:0;left:0;opacity:0.3;}#gridoverlay .gridset div {padding-top:5px;text-align:left;font-size:10px !important;border-right:1px solid rgb(150,150,255);border-left:1px solid rgb(150,150,255);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}#gridoverlay div small {width:100%;display:block;text-align:center;color:rgb(130,130,255);font-weight:700 !important;border-bottom:1px solid rgb(150,150,255);padding-top:0 !important;}#gridoverlay .gridset:nth-child(2) div {border-style:dashed;padding-top:35px;}#gridoverlay .gridset:nth-child(2) small {border-bottom:1px dashed rgb(150,150,255);}#gridoverlay .gridset:nth-child(3) div {border-style:dotted;padding-top:70px;}#gridoverlay .gridset:nth-child(3) small {border-bottom:1px dotted rgb(150,150,255);}</style>';

        while (p[k]) {

            var hides = '', 
                l = 0;

            if (w[k] != breaks && k == 0) gw += '<div>';
            else if (w[k] != breaks) gw += '</div><div>';

            while (p[l]) {

                if (l != k && w[l] != w[k]) hides += p[l] + '-hide ';
                l++;

            }

            gw += '<div class="gridset ' + hides + '"><div class="'+p[k]+'1"><small>'+p[k]+'1</small></div>';

            var i = 1;

            while (i++ < c[k]) gw += '<div class="'+p[k]+i+'"><small>'+p[k]+i+'</small></div>';

            gw += '</div>';

            if (k == w.length - 1) gw += '</div>';

            breaks = w[k];

            k++;

        }

        gw += '</div></div>';

        var newgw = document.createElement('div');

        newgw.id = 'gridsetoverlaywrap';

        newgw.innerHTML = styles + gw;

        b.appendChild(newgw);

    },

    bind : function (t, e, f) {

        if (t.attachEvent) t.attachEvent('on' + e, f);
        else t.addEventListener(e, f, false);

    },

    prevent : function (e) {

        if (e.preventDefault) e.preventDefault();
        else event.returnValue = false;

    }


};

if (window.location.href.match('gridset=show')) gs.show(['m','t','d'], [3,7,13], [364,676,1641]);
else gs.init(['m','t','d'], [3,7,13], [364,676,1641]);
</script>
<?php wp_footer(); ?>
</body>
</html>