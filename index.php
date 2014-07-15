<?php get_header(); ?>

<main class="clearfix" id="content" role="main">
	<?php global $more; ?>
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
			</header>

			<div class="entry-content">
				<?php $more = 1; ?>
				<?php the_content(); ?>
			</div>

			<?php get_template_part( 'inc/entry-footer' ); ?>
		</article>

		<?php
			$withcomments = "1"; // Display comments on front page
			comments_template();
		?>
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