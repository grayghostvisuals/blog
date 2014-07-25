<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	<link rel="dns-prefetch" href="//use.typekit.net">
	<link rel="dns-prefetch" href="//www.google-analytics.com">

	<script>
	(function(d) {
		var config = {
			kitId: 'moj0xwf',
			scriptTimeout: 3000
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
	</script>

	<title><?php wp_title( '&raquo;', true, 'left' ); ?></title>

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
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ) ?>-Archives of blog entries on front-end web development and design">
	<?php elseif ( is_search() ) : ?>
	<meta name="" content="<?php wp_specialchars( $s ) ?>">
	<?php else : ?>
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ) ?>">
	<?php endif; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="msapplication-tap-highlight" content="no">

	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" media="all">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo( 'rss2_url' ); ?>">

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>

	<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
	<?php wp_head(); ?>
</head>
<body class="<?php if(is_front_page()) : ?>index <?php endif; ?><?php if ( has_post_thumbnail() && is_single() ) : ?>bg-feat<?php else : ?>no-feat-bg<?php endif; ?>" id="<?php if( is_single() ) : echo strtolower(preg_replace('/\s+/', '-', get_the_title($ID))); else : echo "page"; endif; ?>" <?php $ip = $_SERVER['REMOTE_ADDR']; if ( $ip == '127.0.0.1' ) : ?>data-development-grid="show"<?php endif; ?>>
	<header class="branding<?php if ( ! has_post_thumbnail() ) : ?> bg-feat--none<?php endif; ?>" role="banner">
		<?php $header = get_header_image(); ?>
		<?php if ( $header ) : ?>
		<div id="header-image">
			<a href="<?php echo home_url() ?>">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
			</a>
		</div>
		<?php endif; ?>

		<h1 class="blogname">
			<a href="<?php echo home_url();  ?>" class="blog-uri" rel="bookmark">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="160" class="logo" viewBox="0 0 160 160" aria-labelledby="title" aria-describedby="description" role="img"><title id="title">Exploring Front-end Web Design and Development</title>
  				<desc id="description">Badge logo for the blog Gray Ghost Visuals Press</desc><symbol id="a" viewBox="-5.1 -5.1 10.2 10.2"><g fill="#fff" stroke="#231F20"><path d="M4.6 0c0-2.6-2.1-4.6-4.6-4.6s-4.6 2-4.6 4.6 2 4.6 4.6 4.6 4.6-2 4.6-4.6zM2.7 0c0-1.5-1.2-2.7-2.7-2.7-1.5 0-2.7 1.2-2.7 2.7s1.2 2.7 2.7 2.7 2.7-1.2 2.7-2.7z"/></g></symbol><path fill="#2C2C2C" d="M158 87.6c-2-1.8-3.5-4.7-3.4-6.4v-3c-.1-1.7 1.5-4.5 3.4-6.4 0 0 2.1-2 1.4-5.9-.7-3.9-3.4-5.1-3.4-5.1-2.5-1.1-5-3.2-5.5-4.8-.5-1.6-1.2-7.6 0-10.1 0 0 1.3-2.6-.7-6-2-3.5-4.9-3.6-4.9-3.6-2.7-.2-5.8-1.4-6.8-2.7-1-1.3-3.8-6.8-3.4-9.5 0 0 .3-2.8-2.8-5.4-3.1-2.6-5.9-1.8-5.9-1.8-2.6.8-5.9.7-7.3-.2-1.4-.9-5.9-5.1-6.5-7.7 0 0-.7-2.8-4.5-4.1-3.8-1.4-6.1.3-6.1.3-2.2 1.6-5.3 2.6-7 2.3-1.6-.3-7.3-2.8-8.8-5 0 0-1.6-2.4-5.6-2.4-4 0-5.6 2.4-5.6 2.4-1.6 2.2-4.2 4.2-5.9 4.5-1.7.2-7.8-.2-10-1.8 0 0-2.3-1.7-6.1-.3-3.8 1.3-4.5 4.1-4.5 4.1-.6 2.6-2.4 5.4-3.9 6.2-1.5.8-7.4 2.5-10 1.7 0 0-2.8-.8-5.9 1.8l-2.8 5.4c.3 2.7-.3 5.9-1.5 7.1-1.1 1.2-6.1 4.8-8.8 5 0 0-2.9.2-4.9 3.6-2 3.5-.7 6-.7 6 1.2 2.4 1.7 5.6 1.1 7.2-.6 1.6-4.1 6.6-6.5 7.7 0 0-2.7 1.1-3.4 5.1-.7 3.9 1.4 5.9 1.4 5.9 2 1.8 3.5 4.7 3.4 6.4v3c.1 1.7-1.5 4.5-3.4 6.4 0 0-2.1 2-1.4 5.9.7 3.9 3.4 5.1 3.4 5.1 2.5 1.1 5 3.2 5.5 4.8.5 1.6 1.2 7.6 0 10.1 0 0-1.3 2.6.7 6 2 3.5 4.9 3.6 4.9 3.6 2.7.2 5.8 1.4 6.8 2.7 1 1.3 3.8 6.8 3.4 9.5 0 0-.3 2.8 2.8 5.4 3.1 2.6 5.9 1.8 5.9 1.8 2.6-.8 5.9-.7 7.3.2 1.4.9 5.9 5.1 6.5 7.7 0 0 .7 2.8 4.5 4.1 3.8 1.4 6.1-.3 6.1-.3 2.2-1.6 5.3-2.6 7-2.3 1.6.3 7.3 2.8 8.8 5.1 0 0 1.6 2.4 5.6 2.4 4 0 5.6-2.4 5.6-2.4 1.5-2.2 4.1-4.3 5.8-4.5s7.8.2 10 1.8c0 0 2.3 1.7 6.1.3s4.5-4.1 4.5-4.1c.6-2.6 2.4-5.4 3.9-6.2s7.4-2.5 10-1.7c0 0 2.8.8 5.9-1.8 3.1-2.6 2.8-5.4 2.8-5.4-.3-2.7.3-5.9 1.5-7.1 1.1-1.2 6.1-4.8 8.8-5 0 0 2.9-.2 4.9-3.6 2-3.5.7-6 .7-6-1.2-2.4-1.7-5.7-1.1-7.2.6-1.6 4.1-6.6 6.5-7.7 0 0 2.7-1.1 3.4-5.1.8-4-1.3-6-1.3-6z"/><ellipse fill="#333" cx="80.1" cy="79.7" rx="66.7" ry="66.7"/><path opacity=".06" fill="#EFEAEB" enable-background="new" d="M79.9 13c-36.9 0-66.9 30-66.9 66.9 0 36.9 29.9 66.9 66.9 66.9 36.9 0 66.9-29.9 66.9-66.9 0-36.9-29.9-66.9-66.9-66.9zm0 122.9c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25 56-56 56z"/><circle opacity=".19" stroke="#B59AA2" stroke-width=".935" enable-background="new" cx="80.1" cy="79.5" r="50.5" fill="none"/><path fill="#fff" stroke="#231F20" stroke-width=".263" d="M53 82.5s-9.6 2.2-8.9 7.5c.7 5.3 4.4 13.5 4.4 13.5s6.7-9.7 9-9.8c2.3-.1 9.2-5.1 12-4.6 2.7.5 6.9.5 6.9.5s-13.3-9.4-15.4-9.2c-2.1.2-8 2.1-8 2.1zM91.9 65.4l-15.6-3.3-9.5 8.2 19 8.3zM72.9 46.7l.6 5.6s15.1 1.1 15.2 3.3c.1 2.2 3.2-.3 3.2-.3s-2.2-8-3.2-7.8c-1 .1-4-2.7-15.8-.8z"/><ellipse fill="#fff" stroke="#231F20" stroke-width=".263" cx="105" cy="75.2" rx="4.3" ry="4.3"/><path fill="#818282" d="M57.8 58.8l-.6.5.6-.5z"/><path fill="#fff" d="M55 67.1c-.8 0-1.4-.3-1.7-.8-1.1-1.5 1-4.4 6-8.5 4.6-3 8.4-3.9 10.3-4.2.5-.1.9-.1 1.1-.1 0 0 2.1-.3 5.3-.3 2.2 0 4.5.2 6.7.5 4 .6 4 1.3 4 1.8 0 .4.1.7 1.5.8.9.1 1.5.4 1.4.9 0 .9-1.9 2.5-4 2.5h-.4c-.8-.1-1.7-.2-2.6-.4-1.5-.3-3-.6-4.8-.6-1.6 0-3.2.3-4.9.8-5.5 1.7-14 6.5-14 6.6-.1-.2-2.2 1-3.9 1zm3.6-7c-1.1.9-2 1.9-3 3 0 0-.6.9-.4 1.6.1.3.3.5.6.6.2.1.4.1.6.1 1.2 0 2.8-1.1 2.8-1.2.1-.1.3-.2 1.2-.7-.6-.4-1.1-.8-1.4-1.4-.3-.5-.4-1.2-.4-2zm4.2-2.9c-1.1.6-2.2 1.3-3.2 2.1-.2.7-.4 1.7.1 2.5.3.6.8 1 1.6 1.2 1.3-.7 2.9-1.6 3.4-1.9-.7-.4-1.2-.9-1.5-1.5-.6-.7-.5-1.7-.4-2.4zm4-1.7c-1.1.4-2.2.8-3.2 1.3-.2.6-.5 1.7 0 2.7.3.6.9 1.1 1.8 1.3 1.1-.5 2.2-1 3.3-1.4-.7-.4-1.3-.9-1.6-1.5-.3-.7-.4-1.5-.3-2.4zm4.6-1c-1.3.2-2.6.5-3.8.8-.2.7-.3 1.6.1 2.3.4.7 1.1 1.1 2.1 1.4 1.1-.4 2.1-.7 3-.9-.5-.4-.9-.8-1.1-1.3-.3-.7-.4-1.4-.3-2.3zm6-.3c-.2.4-.3.8-.3 1.2 0 .7.3 1.3 1 1.9.9 0 1.7.1 2.4.3 2.7.7 4.3 1 5.4 1 1.1 0 1.7-.3 2-1.1.1-.2.1-.4 0-.5-.1-.2-.5-.2-.9-.3-.7 0-1.5-.1-1.5-1.1 0-1.1-3.2-1.3-5.9-1.4h-2.2zm-1.5 0c-1.3 0-2.5.1-3.7.2-.2.6-.2 1.4.1 2.1.3.6.9 1 1.8 1.3 1.1-.2 2.1-.4 3-.4-.4-.7-.7-1.3-.7-2 0-.4.1-.8.2-1.1-.2-.1-.5-.1-.7-.1z"/><path fill="#231F20" d="M75.9 53.2c2.2 0 4.5.2 6.7.5 4 .6 4 1.2 4 1.7s.1.8 1.5.9c.9.1 1.4.4 1.4.9 0 .9-1.9 2.4-4 2.4h-.4c-.8-.1-1.7-.2-2.6-.4-1.5-.3-3-.6-4.8-.6-1.6 0-3.3.3-5 .8-5.5 1.7-14 6.5-14.1 6.6 0 0-2.1 1.2-3.7 1.2-.8 0-1.3-.3-1.7-.8-1-1.5 1-4.3 6-8.4 4.6-3 8.4-3.9 10.3-4.2.5-.1.8-.1 1.1-.1.1-.2 2.1-.5 5.3-.5m-1.8 4.6c1.1-.2 2.1-.4 3-.4h.2l-.1-.1c-.5-.6-.7-1.2-.7-1.9 0-.4.1-.7.2-1.1l.1-.1h-.9c-1.3 0-2.5.1-3.7.2h-.1v.1c-.1.6-.2 1.4.2 2.1.3.5.9.9 1.8 1.2m11.8.9c1.1 0 1.7-.3 2-1.1.1-.2.1-.4 0-.5-.1-.2-.5-.2-.9-.3-.7 0-1.5-.1-1.5-1.1 0-1.2-3-1.4-6-1.5h-.8c-.4 0-.8 0-1.3-.1h-.1v.1c-.2.4-.3.8-.3 1.2 0 .7.3 1.4 1 2 .9 0 1.7.1 2.4.3 2.8.7 4.4 1 5.5 1m-16 .3c1.1-.4 2.1-.7 3-.9l.2-.1-.1-.1c-.5-.3-.9-.7-1.1-1.1-.3-.6-.4-1.4-.3-2.2v-.1h-.1c-1.3.2-2.6.5-3.8.8h-.1v.1c-.2.6-.3 1.5.1 2.3.4.6 1.1 1.1 2.2 1.3m-4.4 1.8c1.1-.5 2.2-1 3.3-1.4l.2-.1-.2-.1c-.7-.3-1.3-.8-1.6-1.4-.3-.6-.4-1.4-.3-2.3v-.2h-.2c-1.1.4-2.2.8-3.2 1.3-.2.6-.5 1.7 0 2.7.4.8 1.1 1.2 2 1.5m-4.3 2.4c1.3-.8 2.9-1.6 3.4-1.9l.2-.1-.2-.1c-.7-.3-1.2-.8-1.5-1.4-.4-.8-.4-1.8-.2-2.4v-.2l-.2.1c-1.1.6-2.2 1.3-3.2 2.1-.2.7-.4 1.7.1 2.5.2.7.8 1.1 1.6 1.4m-4.8 2.3c1.3 0 2.8-1.1 2.9-1.2.1-.1.3-.2 1.2-.7l.2-.1-.2-.1c-.6-.3-1.1-.8-1.4-1.3-.3-.6-.4-1.2-.3-2v-.2l-.2.2c-1.1.9-2.1 1.9-3 3 0 0-.6.9-.4 1.6.1.3.3.5.6.6.1.2.3.2.6.2m19.5-12.4c-3.2 0-5.3.3-5.3.3-.2 0-.5 0-1.1.1-1.8.3-5.6 1.2-10.3 4.2-4 3.2-7.3 6.7-6 8.6.4.6 1.1.8 1.8.8 1.7 0 3.8-1.3 3.8-1.3s8.5-4.8 14-6.6c1.9-.6 3.5-.8 4.9-.8 2.9 0 5.1.8 7.3 1h.4c3.1 0 5.9-3.2 2.6-3.5-3.4-.2 1.4-1.6-5.5-2.6-2.4-.1-4.7-.2-6.6-.2zm-1.8 4.6c-.8-.2-1.4-.7-1.7-1.2-.4-.7-.3-1.5-.2-2.1 1.3-.2 2.6-.2 3.7-.2h.8c-.1.4-.2.7-.2 1.2 0 .7.2 1.3.7 1.9-1.1.1-2.1.2-3.1.4zm11.8.9c-1.1 0-2.8-.3-5.4-1-.8-.2-1.6-.3-2.4-.3-.6-.6-1-1.3-1-1.9 0-.4.1-.8.3-1.1.9 0 1.6.1 2.1.1 2.4.1 5.9.2 5.9 1.4 0 1.9 2.9.5 2.4 1.8-.2.6-.7 1-1.9 1zm-16 .3c-1-.2-1.7-.7-2.1-1.4-.4-.7-.3-1.6-.1-2.2 1.3-.4 2.6-.6 3.8-.8-.1.7-.1 1.5.3 2.3.3.5.7.9 1.2 1.2-1.2.3-2.2.6-3.1.9zm-4.4 1.8c-.9-.3-1.5-.7-1.8-1.3-.5-.9-.2-2 0-2.6 1.1-.5 2.1-.9 3.2-1.3-.1.7-.1 1.6.3 2.3.3.6.9 1.1 1.6 1.4-1.5.7-2.6 1.2-3.3 1.5zm-4.3 2.4c-.8-.3-1.3-.7-1.6-1.2-.4-.8-.3-1.8-.1-2.4 1.1-.8 2.1-1.5 3.2-2.1-.1.7-.2 1.6.3 2.5.3.6.8 1.1 1.6 1.4-.6.2-2.1 1-3.4 1.8zm-4.8 2.3c-.2 0-.4 0-.6-.1-1.2-.5-.1-2.1-.1-2.1.9-1.1 1.9-2.2 3-3-.1.6 0 1.4.3 2 .3.6.8 1 1.4 1.3-.6.4-1.1.6-1.2.7 0 0-1.6 1.2-2.8 1.2z"/><path fill="#818282" d="M57 59.4l-.5.4.5-.4zM57.9 58.8l1.4-.9c-.5.2-1 .5-1.4.9zM48.3 65.4c2-.8 3.9-2.1 4.7-2.6-.8.5-2.7 1.9-4.7 2.6zM55.7 60.4c.1-.1.3-.3.5-.4-.1.1-.3.2-.5.4zM44.5 81.9c.1-.3.2-.6.4-.8-.1.2-.3.5-.4.8zM95.7 57.3l.1.1.3.2-1.2-.8.1.1c.2.1.4.3.7.4z"/><path fill="#fff" d="M106 66.4c-2.4 0-3.2-2.8-3.7-4.5 1.9 1.4 3.7 2.7 5.3 4.1-.6.3-1.1.4-1.6.4z"/><path fill="#231F20" d="M102.5 62.3c1.8 1.2 3.4 2.5 4.8 3.7-.5.2-1 .3-1.4.3-2.1 0-2.9-2.4-3.4-4m-6.1-4.5c0 .1.1.1 0 0 .3.2.5.3.7.5l.3.2.3.2c1.1.7 2.1 1.4 3.1 2.1.5.3.9.6 1.3.9l-.2-.1c.4 1.5 1.2 4.9 3.9 4.9.5 0 1.2-.1 1.9-.4l.6.6.9.9c-3.1-3.5-7.7-6.4-12.8-9.8z"/><path fill="#818282" d="M109.5 67.7c0-.1-.1-.1-.1-.1l.5.5c-.1-.1-.2-.3-.4-.4zM49.1 72.6l.1-.5c-.1.1-.1.3-.1.5zM45.6 79.6s0-.1.1-.1c-.1 0-.1.1-.1.1zM45.1 80.6l-.2.4.2-.4zM45.2 80.4s0 .1-.1.1l.1-.1z"/><path fill="#fff" d="M46.3 78.7c.6-1 1-1.6 1-1.6 0-.1 1.1-1.4 1.8-4.1.6-.8 1.9-2.2 3.7-2.6 2.7-.6 6.8-2.3 6.8-2.3 1.5-.7 2.9-1.5 4.5-2.4 2.8-1.6 5.9-3.3 9.8-4.6 1.1-.3 2.1-.5 3.2-.5 1.7 0 3.3.4 4.8.8 1.3.4 2.6.7 3.9.7.8 0 1.6-.1 2.3-.5 2.3-1 3.4-2.5 4.1-3.5.5-.7.8-1.1 1.2-1.1.1 0 .3.1.5.2.1 0 1.9 1 .3 4.8-.7 1.6-2.3 2.4-4.8 2.4-2.1 0-4.1-.6-4.9-.8-3.1-1-5.5-1.4-7.3-1.4-2.8 0-3.9 1.1-5.2 2.5l-.5.5c-1 1-1.8 1.9-2.4 2.6-1.4 1.7-2.2 2.6-4.1 2.7h-.4l.4.2c.1.1 9.5 5.4 15.4 5.4h.6c4.2-.3 6.7-2.3 7.8-3.5-.9 1.8-3.2 5.6-6.6 5.6-.3 0-.6 0-.9-.1-5-.9-14.2-4.6-14.3-4.6-.1-.1-4-2.8-6-2.8-.4 0-.7.1-.9.3-.2.2-.3.5-.3.9-.1 0-.3-.1-.5-.1-.7 0-2 .3-2.6 2.1-.8 1.2.3 3 .9 3.8-2.6-.9-6.1-4-6.1-4l-.2-.1-.1.2s-.7 2.1-3 3.3c-.7.6-1.4 1.2-1.9 1.6z"/><path fill="#231F20" d="M93.5 57v.3c.1 0 .3 0 .4.2.1 0 1.8.9.2 4.6-.7 1.5-2.2 2.3-4.6 2.3-2 0-4.1-.6-4.9-.8-3.1-1-5.5-1.4-7.3-1.4-2.9 0-4 1.2-5.3 2.5l-.5.5c-1 1-1.8 1.9-2.4 2.6-1.4 1.7-2.2 2.6-4 2.7l-.8.1.7.4c.4.2 9.5 5.5 15.5 5.5h.6c3.6-.2 5.9-1.7 7.2-2.9-1.1 1.9-3.2 4.7-6 4.7-.3 0-.6 0-.8-.1-4.9-.9-13.7-4.4-14.2-4.6-.4-.3-4.1-2.8-6.1-2.8-.4 0-.8.1-1 .4-.2.2-.3.5-.3.8h-.4c-.8 0-2.1.3-2.7 2.2-.8 1.1 0 2.7.6 3.5-2.5-1.1-5.7-3.8-5.7-3.8l-.3-.3-.1.4s-.6 2-2.9 3.2c-.7.4-1.3.7-1.7 1l.6-.9c0-.1 1.1-1.4 1.8-4.1.6-.8 1.9-2.2 3.6-2.5 2.7-.6 6.7-2.2 6.9-2.3 1.5-.7 2.9-1.5 4.5-2.4 2.8-1.6 5.9-3.3 9.8-4.6 1.1-.3 2.1-.5 3.2-.5 1.7 0 3.3.4 4.8.8 1.4.4 2.6.7 3.9.7.9 0 1.6-.2 2.4-.5 2.3-1 3.4-2.5 4.1-3.5.4-.6.8-1.1 1.1-1.1l.1-.3m0 0c-1.2 0-1.6 3-5.4 4.6-.8.3-1.5.4-2.3.4-2.7 0-5.3-1.5-8.7-1.5-1 0-2.1.1-3.3.5-6 2-10.2 5.1-14.3 7 0 0-4.1 1.7-6.8 2.3-1.7.3-3 1.7-3.7 2.6-.7 2.8-1.8 4.1-1.8 4.1s-.7.9-1.5 2.4c.3-.3 1.1-1.2 3-2.2 2.4-1.2 3.1-3.4 3.1-3.4s3.9 3.4 6.6 4.2c0 0-2.1-2.6-1.1-4 .5-1.8 1.7-2.1 2.4-2.1.4 0 .7.1.7.1-.1-.9.4-1.2 1-1.2 1.9 0 5.9 2.7 5.9 2.7s9.2 3.7 14.3 4.6c.3.1.6.1.9.1 4.6 0 7.1-6.6 7.1-6.6s-2.4 3.9-8.4 4.2h-.6c-6 0-15.4-5.4-15.4-5.4 2.7-.2 3.2-2.1 6.5-5.4 1.5-1.5 2.5-2.9 5.5-2.9 1.7 0 3.9.4 7.2 1.4.6.2 2.8.8 5 .8 2 0 4.1-.5 4.9-2.4 1.7-4-.3-4.9-.3-4.9h-.5z"/><path fill="#818282" d="M45.3 80.2l-.1.3c0-.2.1-.3.1-.3zM45.6 79.6l-.1.2c0-.1.1-.2.1-.2zM45.4 80l-.1.2c0-.1.1-.2.1-.2zM45.5 79.8l-.1.2c0-.1.1-.2.1-.2zM111.9 91.8zM111.9 91.8z"/><path fill="#fff" d="M101.5 91.6c-5.9-3-11.3-8.5-11.4-8.5 0-.3.5-8.8 9.4-12.7l.4-.2-.5-.1h-.4c-1.1 0-3.9.3-6.5 2.8-1.9 1.8-2.7 2.3-3 2.5.4-.5 1.4-2 3.4-4.9.9-1.3 1.6-2.8 2.2-4.2 1-2.2 1.7-4 3.3-4 .2 0 .5 0 .7.1 1.2.4 1.8 1.7 2.4 3 .7 1.6 1.5 3.3 3.3 3.3.7 0 1.4-.2 2.2-.6.3.8 2 4.7 6 5.1.7 1.6 1.2 3.4 1.4 5.2l-.1-.1.1.4c.1.7.1 1.4.1 2.2v2.9c-.5.5-1.4 1.1-2.7 1.1-.8 0-1.6-.2-2.4-.6-.9-.4-2-1.1-3.4-1.9-3-2-6.9-4.4-9.9-4.4-1.2 0-2.2.4-2.9 1.2-.7.8-1 1.6-.9 2.5.3 2.2 3.5 4.1 5.4 5.2.6.3 1.1.6 1.2.8.2.2.6.4.9.6.8.5 1.9 1.2 2 2 .1.5 0 .9-.3 1.3zm-1.1-16.9l-.1.7c0 2.6 2.1 4.7 4.7 4.7 1 0 1.9-.3 2.7-.8.2-.1.7-.4 1.5-.4.6 0 1.2.1 1.8.4l.6.1-.5-.4c-1.8-1.6-1.5-2.8-1.5-2.9l-.2-.1.2.1.1-.7c0-2.6-2.1-4.7-4.7-4.7-.9 0-1.8.3-2.6.8 0 0-.6.4-1.6.4-.6 0-1.2-.1-1.8-.4l-.7-.1.5.4c1.9 1.6 1.6 2.9 1.6 2.9l.2.1-.2-.1z"/><path fill="#231F20" d="M98.4 62.4c.2 0 .4 0 .7.1 1.2.3 1.7 1.6 2.3 2.9.7 1.6 1.5 3.3 3.4 3.3.6 0 1.4-.2 2.2-.6.4 1 2.2 4.6 5.9 5 .8 1.7 1.2 3.5 1.4 5.5v.1c.1.7.1 1.4.1 2.1v2.9c-.5.5-1.3 1.1-2.6 1.1-.7 0-1.5-.2-2.4-.6-.9-.4-2-1.1-3.3-1.9-3.2-2-7.2-4.4-10.2-4.4-1.2 0-2.3.4-3 1.2-.8.8-1.1 1.7-.9 2.6.3 2.3 3.6 4.2 5.5 5.3.6.3 1 .6 1.2.8.2.2.6.4.9.7.8.5 1.8 1.2 2 1.9.1.3 0 .7-.3 1-5.3-2.8-10.4-7.7-11-8.4.1-1 .8-7.9 7.7-11.8l.7.6.1.1c1.8 1.5 1.5 2.7 1.5 2.7h.1-.1c0 .3-.1.5-.1.7 0 2.7 2.2 4.8 4.8 4.8 1 0 1.9-.3 2.8-.9.2-.1.7-.4 1.4-.4.6 0 1.2.1 1.8.4h.2l.9.2-.7-.6-.1-.1c-1.8-1.5-1.5-2.7-1.5-2.7h-.1.1c0-.3.1-.5.1-.7 0-2.7-2.2-4.8-4.8-4.8-1 0-1.9.3-2.7.8 0 0-.5.4-1.5.4-.6 0-1.2-.1-1.8-.4h-.2l-.9-.1c.5-.3 1-.5 1.5-.7l.9-.4-1-.1h-.4c-1.1 0-3.9.3-6.6 2.8-1.3 1.2-2 1.8-2.5 2.2.5-.8 1.5-2.2 3.1-4.4.9-1.3 1.6-2.8 2.2-4.2 1-2.3 1.8-4 3.2-4m0-.3c-2.6 0-3.1 4.7-5.5 8.2-2.7 3.8-3.6 5.2-3.6 5.2h.1c.2 0 .9-.3 3.3-2.6 2.6-2.5 5.4-2.7 6.4-2.7h.4c-9.1 4-9.4 12.7-9.5 13 0 0 5.5 5.6 11.5 8.6 1.6-2.2-1.6-3.3-2.5-4.2-1.1-1-9.3-4.4-5.7-8.3.7-.8 1.7-1.1 2.8-1.1 4.2 0 10.2 4.8 13.4 6.3 1 .5 1.8.6 2.5.6 1.4 0 2.3-.7 2.8-1.2-.2 7.2-1.8 8-2.7 8h-.1.1c1 0 2.9-.9 2.7-11 0-.8-.1-1.5-.1-2.2-.2-2.1-.8-4-1.5-5.7-4.4-.4-6-5.2-6-5.2-.9.5-1.7.7-2.3.7-3.3 0-2.9-5.4-5.7-6.3-.3-.1-.6-.1-.8-.1zm4.1 9.5c.7-.5 1.6-.8 2.5-.8 2.5 0 4.6 2 4.6 4.6 0 .2 0 .5-.1.7 0 0-.4 1.3 1.5 3l.1.1h-.2c-.7-.3-1.4-.4-1.9-.4-.8 0-1.4.3-1.6.4-.7.5-1.6.8-2.6.8-2.5 0-4.6-2-4.6-4.6 0-.2 0-.5.1-.7 0 0 .4-1.3-1.5-3l-.1-.1h.2c.7.3 1.4.4 1.9.4 1.1 0 1.7-.4 1.7-.4zm-23.2 7.7l10.7 3.9-10.7-3.9z"/><path fill="#818282" d="M112 91.8zM112 91.8zM112 91.8zM112 91.8zM54.8 61.2l-.5.4c.1-.1.3-.3.5-.4zM53.3 62.5z"/><path fill="#fff" d="M52.2 76.6s-1.7 2-4.3 3.8c-1.3.9-2.9 2.7-3.3 6.1.8-1.4 2.1-2.6 4.3-3.4 1.1-.4 2.1-.8 3.1-1.1l.5-.2.1-1.7.6 1.5c2-.7 3.9-1.3 5.7-1.5-.6-.2-1.2-.4-1.8-.5-3-.9-4.9-3-4.9-3zM47.1 68.9c3-.2 3.2 1 3.2 1 .9-1.1 2.1-1.7 2.1-1.7-2-1.6-.7-3.8-.7-3.8-1.4 1.7-4.6 2.5-4.6 2.5-.6.1-1 .4-1 1 .1.6.5 1.1 1 1z"/><path d="M60.3 72.2s-2.3-.7-3.1 2l.1-.1.1-.1.1-.1s.1 0 .1-.1l.2-.1c2.1-1.2 1.8 2.4 1.9 2.6.1.2.7 1.3 3.7-1.1 3.1-2.5 3.6-1.5 3.9-1.5 0 0-7.3-5-7-1.5zM99.4 70.2s-3.5-.4-6.7 2.7-3.4 2.6-3.4 2.6.9-1.4 3.6-5.2c2.7-3.8 3-9.1 6.3-8.1s2.2 8.5 8 5.6c0 0 1.6 4.7 6 5.2h.1l-.3-.6v-.1c-.2-.4-.4-.8-.7-1.2-.1-.2-.2-.4-.4-.6-.3-.4-.5-.8-.8-1.1l-.9-1.1-.1-.1c-.1-.1-.2-.2-.3-.4l-1-1-.6-.6c-4.3 1.8-5.2-2.6-5.8-4.5l.2.1-1.3-.9-3.1-2.1-.3-.2-.3-.2-.6-.4s-.1 0-.1-.1l-.3-.2-.3-.2-.1-.1c-.2-.2-.4-.3-.7-.5-.1 0-.1-.1-.1-.1l-.7-.5s-2.3-2.6-3.4-5.8c-1-3.2-.7-3-1.9-3.9-2-1.5-8.1-2.3-16.4-.9-1.2.2-2.5.5-3.8.8 0 0 7.1 2.6 1.9 7 0 0 5.1-.8 12 .1 6.9 1 2.1 2.3 5.5 2.6 3.4.2.3 3.8-3 3.5-3.3-.3-6.7-2-12.2-.2-5.6 1.7-14 6.6-14 6.6s-4.1 2.5-5.6.4c-1.3-1.9 2-5.3 6-8.6l-1.4.9-.6.4-.1.1h-.1l-.5.4c-.1.1-.2.1-.2.2l-.5.4c-.1.1-.2.1-.2.2l-.4.3h-.1c-.1.1-.2.1-.2.2l-.5.4c-.1.1-.2.1-.2.2-.2.2-.5.4-.7.7h-.1l-.1.1s-.1 0-.1.1c-.8.5-2.7 1.9-4.7 2.6-.1 0-.2.1-.2.1h-.1l-.2.1h-.1c-.1 0-.1 0-.2.1h-.1c-.1 0-.1 0-.2.1h-.1c-.1 0-.2 0-.3.1-3 .7-2.2 4.3-.8 4.2 1.4-.1 3.7-1 3.1 2l-.1.5-.1.4c.7-.9 2-2.3 3.8-2.7 2.7-.6 6.8-2.3 6.8-2.3 4.1-1.9 8.3-5 14.3-7s10 2.3 14.3.6c4.3-1.8 4.2-5.4 5.9-4.4 0 0 2.1 1 .3 4.9-1.7 4-8.6 2-9.8 1.6-9.4-2.9-10.4-.8-12.8 1.5-3.3 3.3-3.8 5.2-6.5 5.4 0 0 10 5.8 15.9 5.4 5.9-.4 8.4-4.2 8.4-4.2s-2.9 7.5-8 6.5c-5.1-.9-14.3-4.6-14.3-4.6l.2.9s3.9 1.6 4.8 1.7c.9.1 7 3.1 7 3.1l10 4.1c0-.3.4-9 9.4-13zm-49.1-.3s-.2-1.2-3.2-1c-.5 0-1-.4-1-1 0-.5.4-.8 1-1 0 0 3.2-.8 4.6-2.5 0 0-1.3 2.2.7 3.8.1.1-1.2.6-2.1 1.7zm37.7-15.8c-.9-2.8-13.7-2.6-13.7-2.6 2.2-1 6.8-1.5 6.8-1.5-2.4-.7-6.8-.9-6.8-.9 2.4-.9 6.9-1.1 6.9-1.1-2-.7-7.5-1-7.5-1 3-.8 15-1.4 15.4 2.4.4 3.8 2.2 5.1 2.2 5.1-1.7.2-3.3-.4-3.3-.4zm-7.7 20.7c1.9-1.3 3.5-4.4 3.5-4.4-3 3.3-7.8 3.6-7.8 3.6 2.5-1.4 3.8-4.4 3.8-4.4-2.8 3.5-7.7 3.1-7.7 3.1 2.8-1.8 4.3-4.2 4.3-4.2-3.1 3.4-7.8 2.6-7.8 2.6 1.9-.4 2.2-1.4 4.4-4 1-.5 2.9-.7 6.3.7 3.7 1.6 6.9 2.4 9.3 2.4h.3c-3.6 4.3-8.6 4.6-8.6 4.6zm-.5-8.2c-2.4-1-4.2-1.3-5.5-1.1 2.7-2.7 4.5-1.4 8.9-.2 6.2 1.8 8 .9 8 .9-.4 1-.9 1.9-1.4 2.7-2.1.3-5.8-.5-10-2.3zM58.3 78.1c-2.7-.7-6.6-4.2-6.6-4.2s-.6 2.1-3.1 3.4c-1.9 1-2.7 1.8-3 2.2-.2.5-.5 1-.8 1.5-.1.3-.2.6-.4.8v.1l-.2.4c-.1.1-.1.3-.2.5v.1c0 .1-.1.2-.1.4v.1l-.2.5v.1l-.1.4v.1l-.1.4v.1l-.1.5v.1l-.1.4v.1l-.1.5v.1l-.1.4v.2c0 .2 0 .3-.1.5v.1c0 .2 0 .4-.1.6v4.300000000000001l.1.6v.1c0 .2.1.4.1.5v.2l.1.6c0 .2.1.4.2.7v.2c0 .2.1.4.2.5v.1c.1.2.1.4.2.7v.1l.2.6c0 .1 0 .1.1.2l.3.7s2.7 7.9 6.1 9.3c0 0-1-8.5 9.2-13.6 10.1-5 8.6-4.3 11.5-4 0 0 9 1.5 9.8 1.7.9.3-7.5-8.9-22.7-13.9zm-10.4 2.3c2.6-1.8 4.3-3.8 4.3-3.8s1.9 2.1 4.9 2.8c.6.1 1.2.3 1.8.5-1.8.2-3.6.8-5.7 1.5l-.6-1.4-.1 1.7-.5.2c-1 .4-2 .7-3.1 1.1-2.2.7-3.5 2-4.3 3.4.4-3.3 2.1-5.1 3.3-6zm6.1 14.8c-2.3-4.6-2.7-8.5-2.7-8.5-.4 2.9 1 6.8 2 9.2l-.9.9c-2.9-5.3-3.3-10-3.3-10-.4 3.6 1.4 8.4 2.6 10.9-.3.4-.6.7-.8 1.1-3.4-6.1-4-11.6-4-11.6-.5 4.6 2.4 11.1 3.2 12.8-.9 1.4-1.1 2.4-1.1 2.4-2.5-4.8-3.7-8.7-4.1-11.7.2-2.1 1.1-4.9 4.6-6.1 1.1-.4 2.1-.8 3.1-1.1.7 3.1 1.9 6.8 4 9.9-1.1.5-1.9 1.2-2.6 1.8zm14.8-7c-1.7-1.4-6.8-5.7-10.5-6.2 0 0 5.7 2.1 9 6.3-.2 0-.4.1-.4.1-.7.2-1.4.4-2.1.7-1.7-2-4.8-5-7.7-5.7 0 0 3.9 2.1 6.7 6-.8.3-1.5.6-2.2.9-1.1-1.8-3.1-4.8-5.7-5.8 0 0 3 2.3 5 6.1-1.3.6-2.4 1.2-3.4 1.9-2-3-3.2-6.6-3.8-9.6 3.2-1.2 5.7-1.9 8.4-1.3 6.1 2.8 12.5 7.5 12.5 7.5-2.3-.8-4.4-.9-5.8-.9zM109.5 84.4c-4-1.9-12.7-9.1-16.2-5.2-3.6 3.9 4.7 7.4 5.7 8.3 1 .9 4.2 2 2.5 4.2l.4.2h.1l.4.2s.1 0 .1.1l.3.1c.1 0 .1 0 .2.1l.3.1c.1 0 .1 0 .2.1l.3.1h.1l.4.2c.2.1.3.1.5.1h.1c.1 0 .2.1.4.1h.1l.3.1h.1l.3.1h.1c.3.1.6.1.9.1h1.7000000000000002s1.2 0-1.7-1.7-9.3-6.1-12.8-10.5c0 0 .1-1.4 2.5-.6 2.4.8 12.2 4.6 11.8 7.2 0 0 2 3.7 2.7 3.7h.1c.9.1 2.7 0 2.9-8-.2 1.1-2 2.3-4.8.9zM105 80c1 0 1.9-.3 2.6-.8.3-.2 1.5-.8 3.4 0h.2l-.1-.1c-1.9-1.6-1.5-3-1.5-3l.1-.7c0-2.5-2.1-4.6-4.6-4.6-.9 0-1.8.3-2.5.8 0 0-1.3 1-3.5 0h-.2l.1.1c1.9 1.6 1.5 3 1.5 3l-.1.7c.1 2.5 2.1 4.6 4.6 4.6zm0-7.6c1.7 0 3.1 1.4 3.1 3 0 1.7-1.4 3-3.1 3-1.7 0-3.1-1.4-3.1-3 .1-1.7 1.4-3 3.1-3z"/><ellipse cx="105" cy="75.4" rx="2.2" ry="2.2"/><path d="M65.5 60.7c.7-.3 1.8-.8 3.2-1.4-.7-.3-1.3-.8-1.6-1.4-.4-.8-.4-1.6-.3-2.3-1 .3-2.1.8-3.2 1.3-.2.6-.4 1.7 0 2.6.4.5 1 1 1.9 1.2zM55.7 63.2s-1.1 1.6.1 2.1c1.2.5 3.4-1.1 3.4-1.1.1-.1.6-.4 1.2-.7-.6-.3-1.1-.8-1.4-1.3-.4-.7-.4-1.4-.3-2-1.1.8-2.1 1.8-3 3zM61.2 63.1c1.3-.7 2.9-1.6 3.4-1.9-.7-.3-1.2-.8-1.6-1.4-.4-.8-.4-1.8-.3-2.5-1.1.6-2.2 1.3-3.2 2.1-.2.6-.4 1.6.1 2.4.3.6.8 1 1.6 1.3zM80.5 57.6c5.4 1.4 6.8 1.2 7.3-.1s-2.4.1-2.4-1.8c0-1.1-3.4-1.3-5.9-1.4-.4 0-1.2-.1-2.1-.1-.2.3-.3.7-.3 1.1 0 .7.3 1.3 1 1.9.9.1 1.7.2 2.4.4zM69.9 58.9c.9-.3 2-.7 3-.9-.5-.3-.9-.7-1.2-1.2-.4-.8-.4-1.6-.3-2.3-1.2.2-2.5.4-3.8.8-.2.6-.3 1.5.1 2.2.4.7 1.1 1.2 2.2 1.4zM72.2 54.4c-.1.6-.2 1.4.2 2.1.3.6.9 1 1.7 1.2 1-.2 2-.4 3-.4-.5-.6-.7-1.3-.7-1.9 0-.4.1-.8.2-1.2-1.2 0-2.7 0-4.4.2z"/><ellipse opacity=".38" stroke="#262626" stroke-width="10.281" stroke-dasharray="0.9346,1.8692" cx="79.9" cy="79.8" rx="61.6" ry="61.7" fill="none"/><use xlink:href="#a" width="10.2" height="10.2" x="-5.1" y="-5.1" transform="matrix(0 .716 .716 0 80.115 28.922)" overflow="visible" enable-background="new"/><use xlink:href="#a" width="10.2" height="10.2" x="-5.1" y="-5.1" transform="matrix(.716 0 0 -.716 130.66 79.533)" overflow="visible"/><use xlink:href="#a" width="10.2" height="10.2" x="-5.1" y="-5.1" transform="matrix(0 .716 .716 0 80.115 130.012)" overflow="visible" enable-background="new"/><use xlink:href="#a" width="10.2" height="10.2" x="-5.1" y="-5.1" transform="matrix(.716 0 0 -.716 29.57 79.467)" overflow="visible" enable-background="new"/></svg>
			</a>
		</h1>

		<h2 class="tagline"><?php echo html_entity_decode(get_bloginfo('description')); ?></h2>

		<?php
			function wpflex_custom_nav() {
				if ( 'wp_nav_menu' ) :
					wp_nav_menu( array(
						'theme_location'  => 'primary', // Location in the theme to be used--must be registered with register_nav_menu() in order to be selectable by the user
						'menu'            => 'primary', //  The menu that is desired; accepts (matching in order) id, slug, name
						'container'       => 'nav', // Whether or not to wrap the ul, and what to wrap it with. Allowed tags are 'div' and 'nav.' Use false for no container
						'container_class' => '', // What will the container from the previous option have as its 'class' name. (if you used a div as the 'container')
						'container_id'    => '', // What will the container from the previous option have as its 'id' name. (if you used a div as the 'container')
						'menu_class'      => '', // The navigations containg element surrounding li elements will have this class (i.e. <ul class="menu_class"><li></li></ul>)
						'menu_id'         => '', // The ID that is applied to the ul element which forms the menu
						'echo'            => true, // Removes the custom nav menu entirely from view and the HTML markup
						'fallback_cb'     => 'wpflex_nav_fallback', // wp_nav_menu falback call function. If wp_nav_menu is not used by the author then do the following within the callback
						'before'          => '', // Output text before the anchor tag of the link. This value can be a string or HTML
						'after'           => '', // Output text before the anchor tag of the link. This value can be a string or HTML
						'link_before'     => '', // If HTML is injected in this value then the anchor is strippped away entirely. Only use strings of content ( NO HTML)
						'link_after'      => '', // If HTML is injected in this value then the anchor is strippped away entirely. Only use strings of content ( NO HTML )
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Whatever to wrap the items with, and how to wrap them
						'depth'           => 0, // how many levels of the hierarchy are to be included where 0 means all
						'walker'          => '' // Custom walker object to use (Note: You must pass an actual object to use, not a string)- Feel free to make this clearer
					));
				else :
					wpflex_nav_fallback();
				endif;
			}

			function wpflex_nav_fallback() {
				$wpflex_nav = array(
					'depth'       => 0, // All Pages and sub-pages are displayed (no depth restriction)
					'show_date'   => '', // Display creation or last modified date next to each Page. The default value is the null value (do not display dates).
					'date_format' => get_option( 'date_format' ), // Controls the format of the Page date set by the show_date parameter (example: "l, F j, Y"). This parameter defaults to the date format configured in your WordPress options
					'child_of'    => 0, // Displays the sub-pages of a single Page only; uses the ID for a Page as the value Defaults to 0 (displays all Pages).
					'exclude'     => '', // Define a comma-separated list of Page IDs to be excluded from the list (example: 'exclude' => '3,7,31'). There is no default value
					'include'     => '', // Only include certain Pages in the list generated by wp_list_pages. Accepts a comma-separated list of Page IDs. There is no default value
					'title_li'    => '', // Set the text and style of the Page list's heading
					'echo'        => 1, // Results are echoed (displayed)
					'authors'     => '', // Only include Pages authored by the authors in this comma-separated list of author IDs
					'sort_column' => 'menu_order, post_title', // Sorted by Page Order over Page Title.
					'sort_order'  => 'ASC', // Change the sort order of the list of Pages (either ascending=ASC or descending=DESC). The default is ASC
					'link_before' => '', // Sets the text or html that precedes the link text inside the anchor tag
					'link_after'  => '', // Sets the text or html that follows the link text inside the anchor tag
					'walker'      => '', // Custom walker object to use (Note: You must pass an actual object to use, not a string)- Feel free to make this clearer
					'post_type'   => 'page', // List custom post types. Default is 'page'.
					'post_status' => 'publish' // Comma-separated list of all post status types to return. For example: 'publish,private'
				);?>

				<?php
					if ( wp_list_pages( $wpflex_nav ) ) :
						while ( wp_list_pages( $wpflex_nav ) ) :
							wp_list_pages( $wpflex_nav );
						endwhile;
					endif;
				?>
		<?php } // end wp_nav_fallback

			wpflex_custom_nav();
		?>

		<div class="utility-bar" id="utility-bar">
			<div class="utility-bar__items">
				<?php get_search_form(); ?>

				<article id="rss">
					<a href="<?php bloginfo('rss2_url') ?>" class="ss-icon">RSS</a>
				</article>

				<a href="#info" class="ss-icon">Info</a>
			</div>

			<a href="#utility-bar" class="utility-bar__toggle"><span class="ss-icon" aria-hidden="true">list</span> Menu</a>
		</div>
	</header>