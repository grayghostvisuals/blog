<?php get_header(); ?>
<section id="content" class="clearfix" role="main">
    <div class="stripe m-all t-all d-all">
        <div class="m-all t2-t6 d4-d10">
        <!-- gridset -->

            <section class="search-page">
                <header>
                    <h1 class="headline"><b class="ss-icon" data-icon="database">&#xE7A0;</b> Search Results</h1>
                </header>

                <ul class="list-reset">
                    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <li class="entry-item" id="post-<?php the_ID(); ?>">
                        <article <?php post_class('padding entry'); ?>>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <?php get_template_part( 'inc/meta' ); ?>
                            <?php the_content( '<div class="button"><span class="read-more ss-icon">&#x1F440;</span></div>' ); ?>
                        </article>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else : ?>

                <h3 id="thumbsdown"><b class="ss-icon">dislike</b></h3>
                    <p><?php echo ( 'Sorry dude &ndash;or&ndash; dudette but your search term(s) didn\'t result in any matches from our sweet, sweet database of knowledge. Please do try refining your search term and/or query again won\'t you pretty please?' ); ?></p>
                <?php endif; ?>
            </section>

        <!-- gridset -->
        </div>
    </div>

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
<!-- /end #content -->

<!-- sidebar -->
<div class="stripe-sidebar m-all t-all d-all">
    <div class="m-all t2-t6 d4-d10">
        <section id="sidebar" class="padding" role="complementary">
            <?php get_sidebar(); ?>
        </section>
    </div>
</div>
<?php get_footer(); ?>