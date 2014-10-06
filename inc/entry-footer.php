<?php
	$posttags = get_the_tags();
	$postcats = get_the_category();
?>
<footer class="entry-footer">
	<?php
		$wpflex_post_pages = array(
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

	<?php if ($posttags || $postcats) : ?>
	<ul class="taxonomy list-reset">
		<?php if ($posttags) : ?>
		<li class="taxonomy__item">
			<?php echo ( 'Tagged:' ); ?>
			<ul class="taxonomy__tagls taxonomy__ls list-reset">
				<?php the_tags( '</li><li class="taxonomy__tags">' ); ?>
			</ul>
		</li>
		<?php endif ?>

		<?php if ($postcats) : ?>
		<li class="taxonomy__item visuallyhidden">
			<?php echo ( 'Filed under:' ); ?>
			<ul class="taxonomy__catls taxonomy__ls list-reset">
				<li class="taxonomy__cats">
					<?php the_category( ', ' ) ?>
				</li>
			</ul>
		</li>
		<?php endif ?>
	</ul>
	<?php endif ?>
</footer>