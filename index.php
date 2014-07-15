<?php get_header(); ?>

<main class="clearfix" id="content" role="main">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
			</header>

			<div class="entry-content">
				<?php the_content( '<span class="read-more">...Read More →</span>' ); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'Holy Shit! This is totally cray cray brochacho! No posts match anything even remotely close to that in this database. Sorry Mon Frere, try again' ); ?></p>
	<?php endif; ?>

	<ul class="pagination list-reset">
		<li><?php previous_posts_link('&laquo; Previous Entry') ?></li>
		<li><?php next_posts_link('Next Entry &raquo;','') ?></li>
	</ul>
</main>

<?php get_footer(); ?>