<?php
/*------------------------------------------------------------------------------------------------[ after setup theme init ] */

//themename custom function setup
add_action( 'after_setup_theme', 'wpflex_setup' );


/*------------------------------------------------------------------------------------------------[ theme setup function ] */

//if ! wpflex_setup
if ( ! function_exists( 'wpflex_setup' ) ) :
	//wpflex_setup
	function wpflex_setup() {

		/*-----------------------------------[ HTML title tag filter ] */

		// http://codex.wordpress.org/Plugin_API/Filter_Reference/wp_title
		// http://codex.wordpress.org/Function_Reference/wp_title
		//
		// Feel free to pick your poison
		// https://gist.github.com/3907296
		// https://gist.github.com/3907306
		//
		// Title tag filter required for themes
		// a custom callback function that displays a meaningful title
		// depending on the page being rendered
		function wpflex_title_filter( $title ) {
			global $wp_query, $s, $paged, $page;

			if ( ! is_feed() ) :
				$sep = __( '&raquo;' );
				$new_title = get_bloginfo( 'name' ) . ' ';
				$bloginfo_description = get_bloginfo( 'description' );

				if ( ( is_home () || is_front_page() ) && !empty( $bloginfo_description ) && !$paged && !$page ) :
					$new_title .= $sep . ' ' . $bloginfo_description;
				elseif ( is_single() || is_page() ) :
					$new_title .= $sep . ' ' . single_post_title( '', false );
				elseif ( is_search() ) :
					$new_title .= $sep . ' ' . sprintf( __( 'Search Results: %s' ), esc_html( $s ) );
				else :
					$new_title .= $title;
				endif;

				if ( $paged || $page ) :
					$new_title .= ' ' . $sep . ' ' . sprintf( __( 'Page: %s' ), max( $paged, $page ) );
				endif;

				$title = $new_title;
			endif;
			return $title;
		}

		add_filter( 'wp_title', 'wpflex_title_filter' );


		/*------------------------------------------------------------------------------------------------[ wp enque script ] */

		if ( is_singular() ) :
			wp_enqueue_script( 'comment-reply' );
		endif;


		/*------------------------------------------------------------------------------------------------[ rss feed ] */

		//enables post and comment RSS feed links to head
		//required for theme submission
		add_theme_support( 'automatic-feed-links' );


		/*------------------------------------------------------------------------------------------------[ editor style sheet ] */

		//add editor style sheet
		add_editor_style();


		/*------------------------------------------------------------------------------------------------[ post thumbnails ] */

		//enables post-thumbnail support
		//enables for Posts and "movie" post type but not for Pages
		add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie' ) );

		// set post thumbnail size
		set_post_thumbnail_size( 700, 450, true );


		/*------------------------------------------------------------------------------------------------[ content width ] */

		//if content_width not set
		if ( ! isset( $content_width ) ) :
			$content_width = 960;
		endif;


		/*------------------------------------------------------------------------------------------------[ Link Jumps to More or Top of Page ] */

		function remove_more_jump_link($link) {
			$offset = strpos($link, '#more-');
			if ($offset) {
				$end = strpos($link, '"',$offset);
			}
			if ($end) {
				$link = substr_replace($link, '', $offset, $end-$offset);
			}
			return $link;
		}
		add_filter('the_content_more_link', 'remove_more_jump_link');


		/*------------------------------------------------------------------------------------------------[ widgets ] */

		//wpflex widget setup
		function wpflex_widget() {

			//call register_sidebar wp method as array
			register_sidebar( array(
				'ID'            => 'wpflex_sidebar',
				'name'          => 'WP-Flex Sidebar',
				'before_widget' => '<article id="%1$s" class="widget %2$s">',
				'after_widget'  => '</article>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			));//end primary sidebar

			//call to register footer sidebar widgets
			register_sidebar( array(
				'ID'            => 'fw',
				'name'          => 'WP-Flex Footer Widget',
				'before_widget' => '<article id="%1$s" class="fwidget %2$s">',
				'after_widget'  => '</article>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)); //end footer widget

		}; //end wpflex_widget

		//trigger the wpflex widget function
		//required for theme submission
		add_action( 'widgets_init' , 'wpflex_widget' );

	}//end themename_setup
endif;//end ! function_exists( 'wpflex_setup' )