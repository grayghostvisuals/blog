<?php get_header(); ?>
<div class="grid">
	<div class="col-6-4 col-9-3 col-5-1">
		<main class="clearfix" id="content" role="main">
			<header>
				<h1 class="results-headline">Search Results</h1>
			</header>

			<ul class="entries list-reset">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<li class="entries__item" id="post-<?php the_ID(); ?>">
						<article <?php post_class('entry'); ?>>
							<h1 class="entry__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

							<?php get_template_part( 'inc/meta' ); ?>
							<div class="entry-content">
								<?php str_replace('<p></p>', '', the_content('<span class="read-more">Read More →</span>')); ?>
							</div>
						</article>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php else : ?>
				<p><?php echo ( 'Sorry dude &ndash;or&ndash; dudette but your search term(s) didn\'t result in any matches from our sweet, sweet database of knowledge. Please do try refining your search term and/or query again won\'t you pretty please?' ); ?></p>
			<?php endif; ?>

			<div class="pagination">
				<?php
					global $wp_query;
					$big = 999999999;

					echo paginate_links( array(
						'base'         => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
						'format'       => '?paged=%#%',
						'total'        => $wp_query -> max_num_pages,
						'current'      => max( 1, get_query_var( 'paged' ) ),
						'show_all'     => False,
						'end_size'     => 1,
						'mid_size'     => 2,
						'prev_next'    => True,
						'prev_text'    => '&laquo; Previous',
						'next_text'    => 'Next &raquo;',
						'type'         => 'plain',
						'add_args'     => False,
						'add_fragment' => ''
					));
				?>
			</div>
		</main>
		<?php get_footer(); ?>
	</div>

	<div class="col-10-2 col-5-1">
		<?php include('inc/fusion-ads.php') ?>
	</div>
</div>