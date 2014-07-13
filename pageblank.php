<?php
/*
 * Required to display in select menu list
 * on posts pages from dashboard
 * Template Name: Blank
 */
?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<main class="<?php the_title(); ?> clearfix" id="content" role="main">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<?php wp_link_pages( array( 'before' => '<div>' . 'Pages &rarr;', 'after' => '</div>' ) ); ?>
		</main>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'sorry, this page does not exist' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>