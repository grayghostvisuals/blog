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

<section id="content" class="clearfix" role="main">
  <div class="m-all">
    <article>
    <h1><b class="ss-icon" data-icon="database">&#xE7A0;</b> <?php if ( is_day() ) : ?> <?php printf( 'Daily Archives: <span class="archive-title">%s</span>', get_the_date() ); ?>
        <?php elseif ( is_month() ) : ?><?php printf( 'Monthly Archives: <span>%s</span>', get_the_date( 'F Y' ) ); ?>
        <?php elseif ( is_year() ) : ?><?php printf( 'Yearly Archives: <span>%s</span>', get_the_date( 'Y' ) ); ?>
        <?php elseif ( is_tag() ) : ?><?php printf( single_tag_title( 'Tag Archives : ' ) . ' ' . '<span>%s</span>', get_the_date( 'F Y' ) ); ?>
        <?php else : ?><?php echo ( 'The Archives' ); ?><?php endif; //end initial if ?>
    </h1>

  <ul>
    <?php if( have_posts() ) : while( have_posts() ) : the_post()?>
    <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h1><span><?php the_title(); ?></span></h1>
      <?php get_template_part( 'inc/meta' ); ?>
      <?php the_content( '<div class="button"><span class="read-more ss-icon">&#x1F440;</span></div>' ); ?>
    </li>
    <?php endwhile; //end while have_posts() loop ?>
  </ul>

  <!-- post loop error message -->
  <?php else : //if no posts were found do this ?>
  <p><b class="ss-icon">warning</b><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
  <?php endif; //end if have_posts condition ?>
  </article>

  <div class="m-all">
    <div class="pagination">
      <p><?php posts_nav_link( '&#8734;', '&laquo; Go Forward In Time', 'Go Back In Time &raquo;' ); ?></p>
    </div>
  </div>
</div>
</section>

<!-- sidebar -->
<section id="sidebar" role="complementary">
  <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>