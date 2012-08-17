<?php get_header(); ?>
<section id="content" class="clearfix" role="main">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <!-- gridset -->
    <div class="stripe m-all t-all d-all">
        <div class="m-all t2-t6 d4-d10">
        <!-- gridset -->
            <article <?php post_class('padding') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                <figure class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <?php endif; ?>

                <?php get_template_part( 'inc/meta' ); ?>

                <?php the_content( '<div class="button"><span class="read-more ss-icon ss-view"></span></div>' ); ?>
            </article>
        <!-- gridset -->
        </div>
    </div>
    <!-- gridset -->

    <?php endwhile; ?>

    <?php else : ?>
        <p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
    <?php endif; ?>

    <div class="m-all t-all d-all">
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