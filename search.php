<?php get_header(); ?>
<section id="content" class="clearfix" role="main">
    <div class="m-all">
    <article>
    <header>
      <h1><b class="ss-icon" data-icon="database">&#xE7A0;</b> Search Results</h1>
    </header>

    <ul>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); //start search page DB query loop ?>
        <li>
            <h2><?php the_title(); ?></h2>
            <?php get_template_part( 'inc/meta' ); ?>
            <?php the_content( '<div class="button"><span class="read-more ss-icon">&#x1F440;</span></div>' ); ?>
        </li>
        <?php endwhile; //end while have_posts ?>
    </ul>
    <?php else : ?>
    <h3 id="thumbsdown"><b class="ss-icon">dislike</b></h3>
      <p><?php echo ( 'Sorry dude &ndash;or&ndash; dudette but your search term(s) didn\'t result in any matches from our sweet, sweet database of knowledge. Please do try refining your search term and/or query again won\'t you pretty please?' ); ?></p>
      <?php endif; //end if have_posts condition ?>
    </article>
    </div>

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
<!--! end /section#content -->

<section id="sidebar" role="complementary"><?php get_sidebar(); ?></section>
<?php get_footer(); ?>