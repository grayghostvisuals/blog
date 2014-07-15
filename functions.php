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
			$GLOBALS['comment'] = $comment;
			extract($args, EXTR_SKIP); ?>

			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div class="comment-vcard">
					<?php
						echo get_avatar( $comment, $args['avatar_size']);
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
					<?php comment_reply_link( array_merge( $args, array(
																	'depth' 	=> $depth,
																	'max_depth' => $args['max_depth']
																	)));
					?>
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


		/*------------------------------------------------------------------------------------------------[ admin login styling ] */

		/**
		 * function my_login_css
		 * Custom CSS file for the admin panel and login page
		 *
		 * Enqueing isn't really working on the login page; this method
		 * is more reliable. Hopefully this is fixed soon.
		 *
		 * @since 1.0
		 */
		function my_login_css() {
			echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/wp-login.css">';
		}
		add_action('login_head', 'my_login_css');

		/**
		 * function my_login_imgurl
		 * Set the URL to which the login logo image is linked
		 *
		 * @since 1.0
		 */
		function my_login_imgurl() {
			return home_url();
		}
		add_filter( 'login_headerurl', 'my_login_imgurl');

		/**
		 * function my_login_imgtitle
		 * Set the title of the login page
		 *
		 * @since 1.0
		 */
		function my_login_imgtitle() {
			return get_bloginfo('title', 'display');
		}
		add_filter( 'login_headertitle', 'my_login_imgtitle');


		/**
		* function my_admin_footer
		* Rewrite the text in the bottom-left footer area
		*
		* @since 1.0
		*/
		function my_admin_footer() {
		echo 'Built by <a href="#">Gray Ghost Visuals</a> with <a href="http://wordpress.org">WordPress</a>. &bull; <a href="' . admin_url('freedoms.php') . '">Freedoms</a> &bull; <a href="' . admin_url('credits.php') . '">Credits</a>';
		}
		add_filter('admin_footer_text', 'my_admin_footer');


		/*------------------------------------------------------------------------------------------------[ admin dashboard ] */

		/**
		 * function my_remove_dashboard_widgets
		 * Unset dashboard widgets
		 *
		 * @author chrisvanpatten
		 */
		function my_remove_dashboard_widgets() {
			// Left column
			remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
			remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );

			// Right column
			remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
			remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
			remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
		}
		add_action('wp_dashboard_setup', 'my_remove_dashboard_widgets' );

		/**
		 * function my_blog_rss_output
		 * Build an RSS feed widget
		 *
		 * @author chrisvanpatten
		 */
		function my_blog_rss_output() {
			echo '<div class="rss-widget">';

			wp_widget_rss_output( array(
				'url'          => 'http://blog.grayghostvisuals.com/feed/',
				'title'        => 'RSS Feed',
				'items'        => 2, // Number of items to display
				'show_summary' => 1, // Boolean: show article excerpt
				'show_author'  => 1, // Boolean: show article author
				'show_date'    => 1, // Boolean: show article date
			) );

			echo "</div>";
		}

		/**
		 * function my_blog_rss_widget
		 * Display the RSS widget you built above
		 *
		 * @author chrisvanpatten
		 */
		function my_blog_rss_widget() {
			add_meta_box( 'my-blog-rss', 'RSS Feed', 'my_blog_rss_output', 'dashboard', 'side', 'high' );
		}
		add_action('wp_dashboard_setup', 'my_blog_rss_widget');

		/**
		 * function my_custom_right_now_widget
		 * Add Custom Post Types and Taxonomies to the 'Right Now' Dashboard Widget
		 *
		 * @link http://wpsnipp.com/index.php/functions-php/include-custom-post-types-in-right-now-admin-dashboard-widget/
		 */
		function my_custom_right_now_widget() {
			$args = array(
				'public'   => true,
				'_builtin' => false,
			);
			$output   = 'object';
			$operator = 'and';

			$post_types = get_post_types( $args , $output , $operator );
			foreach( $post_types as $post_type ) {
				$num_posts = wp_count_posts( $post_type->name );
				$num       = number_format_i18n( $num_posts->publish );
				$text      = _n( $post_type->labels->singular_name, $post_type->labels->name , intval( $num_posts->publish ) );
				if ( current_user_can( 'edit_posts' ) ) {
					$num  = "<a href = 'edit.php?post_type = $post_type->name'>$num</a>";
					$text = "<a href = 'edit.php?post_type = $post_type->name'>$text</a>";
				}
				echo '<tr><td class="first b b-' . $post_type->name . '">' . $num . '</td>';
				echo '<td class="t ' . $post_type->name . '">' . $text . '</td></tr>';
			}

			$taxonomies = get_taxonomies( $args , $output , $operator ); 
			foreach( $taxonomies as $taxonomy ) {
				$num_terms = wp_count_terms( $taxonomy->name );
				$num       = number_format_i18n( $num_terms );
				$text      = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name , intval( $num_terms ));
				if ( current_user_can( 'manage_categories' ) ) {
					$num  = "<a href = 'edit-tags.php?taxonomy = $taxonomy->name'>$num</a>";
					$text = "<a href = 'edit-tags.php?taxonomy = $taxonomy->name'>$text</a>";
				}
				echo '<tr><td class="first b b-' . $taxonomy->name . '">' . $num . '</td>';
				echo '<td class="t ' . $taxonomy->name . '">' . $text . '</td></tr>';
			}
		}
		add_action( 'right_now_content_table_end' , 'my_custom_right_now_widget' );

	}//end themename_setup
endif;//end ! function_exists( 'wpflex_setup' )