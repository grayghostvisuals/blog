<?php get_header(); ?>
<div class="grid">
	<div class="col-6-4 col-9-3 col-5-1">
		<main class="clearfix" id="content" role="main">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<h1 class="entry__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<?php get_template_part( 'inc/meta' ); ?>
					</header>

					<div class="entry-content">
						<?php str_replace('<p></p>', '', the_content('<span class="read-more">Read More →</span>')); ?>
					</div>
				</article>
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
	<div class="col-10-2 col-5-1">
		<?php include('inc/fusion-ads.php') ?>
	</div>
</div>