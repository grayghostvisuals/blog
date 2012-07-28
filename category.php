<?php get_header(); ?>
<section id="content" class="clearfix" role="main">
  <div class="m-all">
  <article>
  <h1><b class="ss-icon" data-icon="database">&#xE7A0;</b> <?php printf( 'Category Archives: %s', '<span class="archive-title">' . single_cat_title( '', false ) . '</span>' );?></h1>

  <ul>
    <?php if( have_posts() ) : while( have_posts() ) : the_post()?>
    <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part( 'inc/meta' ); ?>
      <?php the_content( '<div class="button"><span class="read-more ss-icon">&#x1F440;</span></div>' ); ?>
    </li>
    <?php endwhile; //end while have_posts ?>
  </ul>

  <!-- post loop error message -->
  <?php else : //if no posts were found do this ?>
  <p><b class="ss-icon">warning</b><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
  <?php endif; //end if have_posts condition ?>

  </article>
  </div>

  <div class="m-all">
    <div class="pagination">
      <p><?php posts_nav_link( '&#8734;', '&laquo; Go Forward In Time', 'Go Back In Time &raquo;' ); ?></p>
    </div>
  </div>

</section>

<!-- sidebar -->
<section id="sidebar" role="complementary">
  <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>