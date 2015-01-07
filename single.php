<?php get_header(); ?>
<div class="grid">
	<div class="col-6-4 col-9-3 col-5-1">
		<main class="clearfix" id="content" role="main">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<header class="entry__header">
						<h1 class="entry__title"><?php the_title(); ?></h1>
						<?php get_template_part( 'inc/meta' ); ?>
					</header>

					<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
					<?php
						$image_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
						$image_thumb = $image_thumb[0];
						$image_lg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
						$image_lg = $image_lg[0];
						$image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
						$image_full = $image_full[0];
					?>
					<style>
					@media screen and (max-width: 900px) { .featimg--bg { background-image: url('<?php echo $image_thumb; ?>') } }
					@media screen and (min-width: 900.1px) { .featimg--bg { background-image: url('<?php echo $image_lg; ?>') } }
					@media screen and (min-width: 1200px) { .featimg--bg { background-image: url('<?php echo $image_full; ?>') } }
					</style>
					<div class="featimg--bg"></div>
					<?php endif; ?>

					<div class="entry-content">
						<?php str_replace('<p></p>', '', the_content()); ?>
					</div>

					<?php get_template_part( 'inc/edit-post-link' ); ?>
					<?php get_template_part( 'inc/entry-footer' ); ?>
					<?php get_template_part( 'inc/profile' ); ?>

					<?php
						if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
						endif;
					?>
				</article>
			<?php endwhile; ?>
			<?php else : ?>
			<?php get_template_part( 'inc/error-msg' ); ?>
			<?php endif; ?>
		</main>

		<?php get_footer(); ?>
	</div>

	<div class="col-10-2 col-5-1 col-fusion">
		<?php include('inc/fusion-ads.php') ?>
	</div>
</div>

<?php include('inc/scripts.php') ?>