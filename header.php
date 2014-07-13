<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	<link rel="dns-prefetch" href="//use.typekit.net">
	<link rel="dns-prefetch" href="//www.google-analytics.com">

	<script>
		(function() {
			var config = {
				kitId: 'wxt4lbk',
				scriptTimeout: 3000
			};
			var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
		})();
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
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ) ?>-Archives and Database of all blog entries with front-end web development and design">
	<?php elseif ( is_search() ) : ?>
	<meta name="" content="<?php wp_specialchars( $s ) ?>">
	<?php else : ?>
	<meta name="description" content="<?php esc_attr( bloginfo( 'name' ) ); esc_attr( bloginfo( 'description' ) ) ?>">
	<?php endif; ?>

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="msapplication-tap-highlight" content="no">

	<link href="https://get.gridsetapp.com/17266/" rel="stylesheet">
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>?v1.9.38" rel="stylesheet" media="all">

	<!-- pingback url -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo( 'rss2_url' ); ?>">

	<!-- Modernizr -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>

	<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
	<?php wp_head(); ?>
</head>

<body class="wrapper" id="<?php the_title(); ?>">
	<header class="branding" role="banner">
		<?php $header = get_header_image() ?>
		<?php if ( isset( $header ) || $header ) : ?>
			<div id="header-image">
				<a href="<?php echo home_url() ?>">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" usemap="#Map">
				</a>
			</div>
		<?php endif; ?>

		<h1 class="blogname">
			<a href="<?php echo home_url();  ?>" class="blog-uri" rel="bookmark">
				<?php esc_attr( bloginfo( 'name' ) ); ?>
			</a>
		</h1>

		<h2 class="tagline"><?php echo esc_attr( bloginfo( 'description' ) ); ?></h2>

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

				<ol class="page-nav">
					<?php
						if ( wp_list_pages( $wpflex_nav ) ) :
							while ( wp_list_pages( $wpflex_nav ) ) :
								wp_list_pages( $wpflex_nav );
							endwhile;
						endif;
					?>
				</ol>
		<?php } // end wp_nav_fallback

			wpflex_custom_nav();
		?>

		<?php get_search_form(); ?>

		<article id="rss">
			<a href="<?php bloginfo('rss2_url') ?>"><b class="ss-icon ss-rss"></b><span class="visuallyhidden">Feed</span></a>
		</article>
	</header>