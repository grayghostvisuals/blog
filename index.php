<?php global $more; ?>
<?php get_header(); ?>
<div class="grid">
	<div class="col-6-4 col-9-3 col-5-1">
		<main class="clearfix" id="content" role="main">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<h1 class="entry__title"><?php the_title(); ?></h1>
						<?php get_template_part( 'inc/meta' ); ?>
					</header>

					<div class="entry-content">
						<?php $more = 0;// truncate posts ?>
						<?php the_content('<span class="read-more">Read More →</span>'); ?>
					</div>
				</article>
				<?php
					// $withcomments = "0"; // Display comments on front page
					// comments_template();
				?>
			<?php endwhile; ?>

			<?php else : ?>
				<p>
					<?php 
						echo "Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again";
					?>
				</p>
			<?php endif; ?>
		</main>
		<?php get_footer(); ?>
	</div>
</div>