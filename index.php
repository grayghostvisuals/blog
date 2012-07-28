<?php get_header(); ?>
<section id="content" class="clearfix" role="main">

  <!-- begin post loop -->
  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <div class="m-all">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <header>
        <!-- Post Entry Title -->
        <h1>
          <span><?php the_title(); ?></span>
        </h1>

        <?php if ( has_post_thumbnail() ) : ?>
        <figure>
        <?php the_post_thumbnail(); ?>
        </figure>
        <?php endif; //end if has_post_thumbnail ?>

      </header>
      <?php get_template_part( 'inc/meta' ); ?>
      <?php the_content( '<div class="button"><span class="read-more ss-icon ss-view"></span></div>' ); ?>
    </article>
  </div>

  <?php endwhile; //end while have_posts loop ?>
  <!-- end post loop -->
  <!-- post loop error message -->

  <?php else : ?>
    <p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
  <?php endif; //end if have_posts condition ?>

  <div class="m-all">
    <div class="pagination">
      <div><b class="ss-icon">&#xE672;</b></div>
      <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
          'base'         => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format'       => '?paged=%#%',
          'total'        => $wp_query -> max_num_pages,
          'current'      => max( 1, get_query_var( 'paged' ) ),
          'show_all'     => False,
          'end_size'     => 1,
          'mid_size'     => 2,
          'prev_next'    => True,
          'prev_text'    => '&laquo; Previous',
          'next_text'    => 'Next &raquo;',
          'type'         => 'plain',
          'add_args'     => False,
          'add_fragment' => ''
        ));//end array
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>