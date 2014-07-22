<footer class="entry-footer">
	<?php $wpflex_post_pages = array(
								'before'           => '<p>' . __('Pages:'),
								'after'            => '</p>',
								'link_before'      => '',
								'link_after'       => '',
								'next_or_number'   => 'number',
								'nextpagelink'     => __('Next page'),
								'previouspagelink' => __('Previous page'),
								'pagelink'         => '%',
								'echo'             => 1
							);
	?>

	<?php wp_link_pages( array( $wpflex_post_pages ) ); ?>

	<ul class="list-reset" id="taxonomies">
		<li class="taxonomy-tags">
			<h6 class="taxonomy-title">Tagged</h6>
			<ul class="taxonomies-list list-reset">
				<?php the_tags( '</li><li class="taxonomies-item">' ); ?>
			</ul>
		</li>

		<li class="taxonomy-cat visuallyhidden">
			<h6 class="taxonomy-title">Filed as</h6>
			<ul class="taxonomy-list list-reset">
				<?php the_category( '</li><li class="taxonomies-item">' ) ?>
			</ul>
		</li>
	</ul>

	<?php get_template_part( 'inc/profile' ); ?>
</footer>