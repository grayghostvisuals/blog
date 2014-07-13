<small class="post-meta">
	<span class="post-meta__datetime">
		<b class="ss-icon">&#x1F4C5;</b> <time datetime="%3$s"><a href="<?php the_permalink(); ?>"><?php the_date( 'l, F j, Y' ); ?></a></time>
	</span>

	<span id="post-meta__comments">
		<b class="ss-icon right">&#x1F4AC;</b> <a href="<?php the_permalink(); ?>#comment-count"><?php printf( _n( '1 Response %2$s', '%1$s Responses %2$s', get_comments_number() ), number_format_i18n( get_comments_number() ),''); ?></a>
	</span>
</small>