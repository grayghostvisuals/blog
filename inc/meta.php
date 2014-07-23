<small class="post-meta">
	<span class="post-meta__pubdate">
        Posted :
		<time datetime="%3$s">
            <a href="<?php the_permalink(); ?>"><?php the_date( 'F j, Y' ); ?></a>
        </time>
        | Filed Under : <?php the_category(' ', $post_id); ?>
	</span>
</small>