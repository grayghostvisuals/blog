<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<script type="text/javascript">
  (function() {
    var config = {
      kitId: 'moj0xwf',
      scriptTimeout: 3000
    };
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/( |^)wf-loading( |$)/g,"");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script");tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(a&&a!="complete"&&a!="loaded")return;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
  })();
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="readability-verification" content="9uWKYX94r5bNc7pVTAg7Y24SxGgHWHqfMjVU9Lq3">

<!-- title -->
<!-- http://codex.wordpress.org/Function_Reference/wp_title -->
<title><?php wp_title(); ?>
<?php
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );

    if ( $site_description && ( is_home() || is_front_page() ) ) :
        echo " &raquo; $site_description";
    endif;
?></title>

<?php if ( is_search() || is_404() ) : ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<meta name="robots" content="all">

<?php endif; ?>
<?php if ( is_home() ) : ?>
<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ); ?>">
<?php elseif ( is_single() ) : ?>
<meta name="description" content="<?php esc_attr( wp_title() ) ?>">
<?php elseif ( is_archive() ) : ?>
<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ) ?>-Archives and Database of all blog entries with front-end web development and design">
<?php elseif ( is_search() ) : ?>
<meta name="" content="<?php wp_specialchars( $s ) ?>">

<!-- fallback meta tag description -->
<?php else : ?>
<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ) ?>">
<?php endif; ?>

<meta name="viewport" content="width=device-width">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Standard Supporting Browsers CSS ?v1.9.36 -->
<link href="https://get.gridsetapp.com/1046/" rel="stylesheet">
<link href="<?php bloginfo( 'stylesheet_url' ); ?>?v1.9.36" rel="stylesheet" media="all">

<!-- pingback url -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- RSS Feed -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo( 'rss2_url' ); ?>">

<!-- Modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>

<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
<?php wp_head(); ?>
</head>
<!-- body element tag -->
<?php if ( is_single() ) : ?>
<body <?php body_class(); ?> id="single">
<?php elseif ( is_home() ) : ?>
<body <?php body_class(); ?> id="index">
<?php else : ?>
<body <?php body_class(); ?> id="<?php the_title(); ?>">
<?php endif; ?>

<div class="m-all t-all d-all">
    <div class="t2-t6 d4-d10">
    <!-- gridset -->

        <header class="padding" role="banner">
            <h1 class="blog-name">
                <a href="<?php echo home_url();  ?>" class="blog-uri">
                    <!--[if gt IE 8]><!-->
                        <!-- //static.grayghostvisuals.com/imgblog -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/blogbadge.svgz" alt="gray ghost visuals press icon leading you home" class="logo">
                        <span class="visuallyhidden" aria-hidden="true"><?php esc_attr( bloginfo( 'name' ) ); ?></span>
                    <!--<![endif]-->

                    <!--[if lt IE 9]><span class="ie-logo"><?php esc_attr( bloginfo( 'name' ) ); ?></span><![endif]-->
                </a>
            </h1>

            <h2 class="tagline"><?php echo esc_attr( bloginfo( 'description' ) ); ?></h2>

            <ul class="socials header">
                <li class="twitter"><a href="//twitter.com/#!/gryghostvisuals" class="ss-icon ss-social" rel="external">twitter</a></li>
                <li class="github"><a href="//github.com/grayghostvisuals" class="ss-icon ss-social" rel="external">github</a></li>
                <li class="dribbble"><a href="//dribbble.com/grayghostvisuals" class="ss-icon ss-social" rel="external">dribbble</a></li>
                <li class="facebook"><a href="//facebook.com/grayghostvisuals" class="ss-icon ss-social" rel="external">facebook</a></li>
                <li class="gplus"><a href="//plus.google.com/u/0/109644357599758733825/about" class="ss-icon ss-social" rel="external">googleplus</a></li>
            </ul>

            <?php get_search_form(); ?>

            <article id="rss">
                <a href="<?php bloginfo('rss2_url') ?>"><b class="ss-icon ss-rss"></b><span class="visuallyhidden">Feed</span></a>
            </article>
        </header>

    <!-- gridset -->
    </div>
</div>