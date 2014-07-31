<?php get_header(); ?>
<?php
/* Queue the first post, that way we know
* what date we're dealing with (if that is the case).
*
* We reset this later so we can run the loop
* properly with a call to rewind_posts().
*/
if ( have_posts() ) the_post();

/* Since we called the_post() above, we need to
* rewind the loop back to the beginning that way
* we can run the loop properly, in full.
*/
rewind_posts();
?>
<div class="grid">
	<div class="col-6-4 col-9-3 col-5-1">
		<main class="clearfix" id="content" role="main">
			<section>
				<h1 class="results-headline">
					<?php if ( is_day() ) : ?> <?php printf( 'Daily Archives: <span class="archive-title">%s</span>', get_the_date() ); ?>
					<?php elseif ( is_month() ) : ?>
						<?php printf( 'Monthly Archives: <span>%s</span>', get_the_date( 'F Y' ) ); ?>
					<?php elseif ( is_year() ) : ?>
						<?php printf( 'Yearly Archives: <span>%s</span>', get_the_date( 'Y' ) ); ?>
					<?php elseif ( is_tag() ) : ?><?php printf( single_tag_title( 'Tag Archives : ' ) . ' ' . '<span>%s</span>', get_the_date( 'F Y' ) ); ?>
					<?php else : ?><?php echo ( 'The Archives' ); ?><?php endif; //end initial if ?>
				</h1>

				<ul class="entries list-reset">
					<?php if( have_posts() ) : while( have_posts() ) : the_post()?>
					<li class="entries__item" id="post-<?php the_ID(); ?>">
						<article <?php post_class('entry'); ?>>
							<h1 class="entry__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

							<?php get_template_part( 'inc/meta' ); ?>

							<div class="entry-content">
								<?php str_replace('<p></p>', '', the_content('<span class="read-more">Read More →</span>')); ?>
							</div>
						</article>
					</li>
					<?php endwhile; ?>
				</ul>

				<?php else : ?>
					<p>
						<?php 
							echo "Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again";
						?>
					</p>
				<?php endif; ?>
			</section>

			<div class="pagination">
				<p><?php posts_nav_link( '&#8734;', '&laquo; Go Forward In Time', 'Go Back In Time &raquo;' ); ?></p>
			</div>
		</main>
		<?php get_footer(); ?>
	</div>

	<div class="col-10-2 col-5-1">
		<?php include('inc/fusion-ads.php'); ?>
	</div>
</div>