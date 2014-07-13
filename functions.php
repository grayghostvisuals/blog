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


		/*------------------------------------------------------------------------------------------------[ custom nav menu ] */

		// This will take additonal objects for another custom nav menu
		//
		// 'primary' => 'Primary Menu',
		// 'footer'  => 'Footer Menu'
		register_nav_menus( array(
			'primary'   => 'Primary Menu'
		));


		/*------------------------------------------------------------------------------------------------[ wp enque script ] */

		if ( is_singular() ) :
			wp_enqueue_script( 'comment-reply' );
		endif;


		/*------------------------------------------------------------------------------------------------[ Theme Support ] */

		// enables post and comment RSS feed links to head
		// required for theme submission
		add_theme_support( 'automatic-feed-links' );

		//enables post-thumbnail support
		//enables for Posts and "movie" post type but not for Pages
		add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie' ) );

		// http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
		// Output valid HTML5 for search form, comment form, and comments/
		add_theme_support( 'html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption'
		));


		/*------------------------------------------------------------------------------------------------[ editor style sheet ] */

		//add editor style sheet
		add_editor_style();


		/*------------------------------------------------------------------------------------------------[ post thumbnails ] */

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


		/*------------------------------------------------------------------------------------------------[ Comments ] */
		// Code Reference
		// Digging into WordPress

		function wpflex_comments( $comment, $args, $depth ) {
			$GLOBALS['comment'] = $comment; ?>

			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div class="comment-vcard">
					<?php
						$size='128';
						echo get_avatar( $comment, $size, $default='');
					?>

					<div class="comment-meta">
						<div class="says">
							<?php
								printf( __('<cite class="fn">❧ %s</cite> <span>shouted:</span>'), get_comment_author_link() );
							?>
						</div>

						<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID) ); ?>"><?php printf(__('%1$s • %2$s'), get_comment_date(), get_comment_time()) ?></a>
						<?php edit_comment_link( __('(Edit)' ), ' ', ''); ?>
					</div>
				</div>

				<?php if( $comment->comment_approved == '0' ) : ?>
					<p class="moderating"><b class="ss-icon ss-clock"></b><em><?php echo( 'Your rant, suggestion, or comment is awaiting moderation from our head cheese. Please be patient' ) ?></em></p>
				<?php endif; ?>

				<div  class="comment-body">
					<div class="comment-text">
						<?php comment_text(); ?>
					</div>
				</div>

				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
		<?php };


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