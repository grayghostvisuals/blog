<?php get_header(); ?>

<main class="clearfix" id="content" role="main">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>

				<?php get_template_part( 'inc/meta' ); ?>
			</header>

			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<?php
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$image = $image[0];
				?>
				<div style="background-image: url('<?php echo $image; ?>')"></div>
			<?php endif; ?>

			<div class="entry-content">
				<?php the_content( '<span class="read-more">...Read More →</span>' ); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'Holy Shit! This is totally cray cray brochacho! No posts match anything even remotely close to that in this database. Sorry Mon Frere, try again' ); ?></p>
	<?php endif; ?>

	<div class="pagination">
		<?php posts_nav_link(); ?>
	</div>
</main>

<?php get_footer(); ?>