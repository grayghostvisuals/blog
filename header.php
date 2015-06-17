<?php
global $ip;
global $ip_address;
$ip = $_SERVER['REMOTE_ADDR'];
$ip_address = '192.168.22.1';
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	<link rel="dns-prefetch" href="//fast.fonts.net">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<link rel="dns-prefetch" href="//cdn.buysellads.com">
	<link rel="dns-prefetch" href="//srv.buysellads.com">
	<link rel="dns-prefetch" href="//assets.servedby-buysellads.com">
	<link rel="dns-prefetch" href="//cdn.fusionads.net">
	<link rel="dns-prefetch" href="//s3-us-west-2.amazonaws.com">

	<title><?php wp_title( '&raquo;', true, 'left' ); ?></title>

	<?php if ( is_search() || is_404() ) : ?>
	<meta name="robots" content="noindex, nofollow">
	<?php else: ?>
	<meta name="robots" content="all">
	<?php endif; ?>

	<?php if ( is_home() ) : ?>
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); echo ' » ' . strip_tags( html_entity_decode( esc_attr( get_bloginfo( 'description' ) ) ) ); ?>">
	<?php elseif ( is_single() ) : ?>
	<meta name="description" content="<?php esc_attr( wp_title() ) ?>">
	<?php elseif ( is_archive() ) : ?>
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); ?> » Archives of blog entries on front-end web development and design">
	<?php elseif ( is_search() ) : ?>
	<meta name="" content="<?php wp_specialchars( $s ) ?>">
	<?php else : ?>
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); echo ' » ' . strip_tags( html_entity_decode( esc_attr( get_bloginfo( 'description' ) ) ) ); ?>">
	<?php endif; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="msapplication-tap-highlight" content="no">

	<meta property="og:title" content="Gray Ghost Visuals Press">
	<meta property="og:description" content="Exploring front-end web development and design. A place to discover and learn about browser native technologies such as HTML, CSS and JavaScript with a dash of WordPress.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php if( is_single() ) : ?><? the_permalink(); ?><?php else : ?><?php bloginfo('url'); ?><?php endif; ?>">
	<meta property="og:image" content="http://static.grayghostvisuals.com/imgblog/og-logo.png">

	<!--[if gte IE 9]><!-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<!--<![endif]-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo( 'rss2_url' ); ?>">

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>
	<script>var MTIProjectId="f45fd2d4-83d8-4e75-a894-43effb040b1c";!function(){var t=document.createElement("script");t.async="true",t.src=("https:"==document.location.protocol?"https:":"http:")+"//fast.fonts.net/t/trackingCode.js",(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(t)}();</script>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body class="<?php if(is_front_page()) : ?>index <?php endif; ?>" id="<?php if( is_single() ) : echo strtolower(preg_replace('/\s+/', '-', get_the_title($ID))); else : echo "page"; endif; ?>" <?php $ip = $_SERVER['REMOTE_ADDR']; if ( $ip == '127.0.0.1' ) : ?>data-development-grid="show"<?php endif; ?>>
	<header class="branding<?php if ( ! has_post_thumbnail() ) : ?> bg-feat--none<?php endif; ?>" role="banner">
		<?php $header = get_header_image(); ?>
		<?php if ( $header ) : ?>
		<div id="header-image">
			<a href="<?php echo home_url() ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""></a>
		</div>
		<?php endif; ?>

		<h1 class="blogname"><a href="<?php echo home_url();  ?>" class="blog-uri" rel="bookmark"><?php include('img/logo.svg'); ?></a></h1>
		<h2 class="tagline"><?php echo html_entity_decode( get_bloginfo('description') ); ?></h2>

		<div class="utility-bar" id="utility-bar">
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
				);
			?>

			<?php
				if ( wp_list_pages( $wpflex_nav ) ) :
					while ( wp_list_pages( $wpflex_nav ) ) :
						wp_list_pages( $wpflex_nav );
					endwhile;
				endif;
			?>
			<?php }
				wpflex_custom_nav();
			?>

			<div class="utility-bar__items">
				<?php get_search_form(); ?>
				<a href="http://grayghostvisuals.com">GGV</a>
				<a href="<?php bloginfo('rss2_url') ?>">RSS</a>
				<a href="#info" class="lemanz-sl">INFO</a>
			</div>

			<a href="#utility-bar" class="utility-bar__toggle" aria-label="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M81.653 28.71c0 .9-.73 1.63-1.63 1.63H9.977c-.9 0-1.63-.73-1.63-1.63V17.307c0-.9.73-1.63 1.63-1.63h70.048c.9 0 1.63.73 1.63 1.63V28.71zM81.653 50.702c0 .9-.73 1.63-1.63 1.63H9.977c-.9 0-1.63-.73-1.63-1.63V39.298c0-.9.73-1.63 1.63-1.63h70.048c.9 0 1.63.73 1.63 1.63v11.404zM81.653 72.693c0 .9-.73 1.63-1.63 1.63H9.977c-.9 0-1.63-.73-1.63-1.63V61.29c0-.9.73-1.63 1.63-1.63h70.048c.9 0 1.63.73 1.63 1.63v11.403z"/></svg></a>
		</div>
	</header>