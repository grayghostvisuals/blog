<?php get_header(); ?>
<div class="grid">
	<div class="col-2">
		<main class="clearfix" id="content" role="main">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
					<?php
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						$image = $image[0];
					?>
					<div class="featimg--bg featimg--bg-lg" style="background-image: url('<?php echo $image; ?>')"></div>

					<?php $image = get_field('small_feature_image'); ?>
					<div class="featimg--bg featimg--bg-small" style="background-image: url('<?php echo $image; ?>')"></div>
					<?php endif; ?>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php get_template_part( 'inc/meta' ); ?>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php get_template_part( 'inc/entry-footer' ); ?>
				</article>

				<div class="single-pagination">
					<span class="prev">
						<?php previous_post_link( '%link', '<span>Previous Category Post</span>', TRUE ); ?>
					</span>

					<span class="nxt">
						<?php next_post_link( '%link', '<span>Next Category Post</span>', TRUE ); ?>
					</span>
				</div>
			<?php endwhile; ?>

			<?php else : ?>
				<p>
					<?php 
						echo "Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again";
					?>
				</p>
			<?php endif; ?>
		</main>
		<?php comments_template(); ?>
		<?php get_footer(); ?>
	</div>
</div>