<?php //http://wordpress.stackexchange.com/questions/24367/globals-array-for-wordpress ?>
<?php if ( $GLOBALS['wp_query']->max_num_pages < 1 ) : return ?>
<?php else : ?>
<ul class="post-pagination list-reset">
	<?php if ( get_next_posts_link() ) : ?>
	<li class="post-pagination__prev"><?php next_posts_link( __( '&larr; Older posts', '' ) ); ?></li>
	<?php endif; ?>

	<?php if ( get_previous_posts_link() ) : ?>
	<li class="post-pagination__nxt"><?php previous_posts_link( __( 'Newer posts &rarr;', '' ) ); ?></li>
	<?php endif; ?>
</ul>
<?php endif; ?>