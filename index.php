<?php global $more; ?>
<?php get_header(); ?>

<main class="clearfix" id="content" role="main">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
				<?php
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$image = $image[0];
				?>
				<div class="bg--featimg" style="background-image: url('<?php echo $image; ?>')"></div>
			<?php endif; ?>

			<header>
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
			</header>

			<div class="entry-content">
				<?php $more = 1;// don't truncate posts ?>
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