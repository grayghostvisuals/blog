<?php
add_action( 'after_setup_theme', 'wpflex_setup' );

if ( ! function_exists( 'wpflex_setup' ) ) :
	function wpflex_setup() {
		// require_once locate_template('/inc/functions/asset-loader.php');
		// require_once locate_template('/inc/functions/autop-filter.php');
		require_once locate_template('/inc/functions/title.php');
		require_once locate_template('/inc/functions/nav-menu.php');
		require_once locate_template('/inc/functions/custom-avatar.php');
		require_once locate_template('/inc/functions/comment-reply.php');
		require_once locate_template('/inc/functions/theme-support.php');
		require_once locate_template('/inc/functions/editor-style.php');
		require_once locate_template('/inc/functions/post-thumbnail.php');
		require_once locate_template('/inc/functions/content-width.php');
		require_once locate_template('/inc/functions/read-more.php');
		require_once locate_template('/inc/functions/comments.php');
		require_once locate_template('/inc/functions/widgets.php');
		require_once locate_template('/inc/functions/custom-admin.php');
	}
endif;
?>