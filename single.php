<?php get_header(); ?>

<main class="clearfix" id="content" role="main">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<?php
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$image = $image[0];
				?>
				<div style="background-image: url('<?php echo $image; ?>')"></div>
			<?php endif; ?>

			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer class="entry-footer">
				<?php get_template_part( 'inc/meta' ); ?>
				<?php get_template_part( 'inc/profile' ); ?>

				<?php $wpflex_post_pages = array(
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

				<ul id="taxonomies">
					<li class="taxonomy-tags">
						<h6 class="taxonomy-title">Tagged</h6>
						<ul class="taxonomies-list">
							<?php the_tags( '</li><li class="taxonomies-item">' ); ?>
						</ul>
					</li>

					<li class="taxonomy-cat visuallyhidden">
						<h6 class="taxonomy-title">Filed as</h6>
						<ul class="taxonomy-list">
							<?php the_category( '</li><li class="taxonomies-item">' ) ?>
						</ul>
					</li>
				</ul>
			</footer>
		</article>

		<div class="single-pagination">
			<span class="prev">
				<?php previous_post_link( '%link', '<span class="ss-icon ss-navigateleft"></span><span class="visuallyhidden">Previous Category Post</span>', TRUE ); ?>
			</span>

			<span class="nxt">
				<?php next_post_link( '%link', '<span class="visuallyhidden">Next Category Post</span><span class="ss-icon ss-navigateright"></span>', TRUE ); ?>
			</span>
		</div>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
	<?php endif; ?>
</main>

<?php comments_template(); ?>

<?php get_footer(); ?>