<?php get_header(); ?>
<section id="content" class="clearfix" role="main">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php get_template_part( 'inc/meta' ); ?>
			</header>

			<!-- *optional* remove read more link -->
			<!-- http://codex.wordpress.org/Customizing_the_Read_More -->
			<!-- Resolves Issue #4: https://github.com/grayghostvisuals/WP-Flex/issues/4 -->
			<div class="entry-content">
				<?php the_content( '<span class="read-more">...Read More →</span>' ); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
	<?php endif; ?>

	<div class="pagination">
		<?php posts_nav_link(); ?>
	</div>
</section>

<?php get_footer(); ?>