<?php get_header(); ?>
<section id="content" class="clearfix" role="main">
    <div class="stripe m-all t-all d-all">
        <div class="m-all t2-t6 d4-d10">
        <!-- gridset -->
            <section>
                <h1 class="headline"><b class="ss-icon" data-icon="database">&#xE7A0;</b> <?php printf( 'Category Archives: %s', single_cat_title( '', false )); ?></h1>

                <ul class="list-reset">
                    <?php if( have_posts() ) : while( have_posts() ) : the_post()?>
                    <li class="entry-item" id="post-<?php the_ID(); ?>">
                        <article <?php post_class('padding entry'); ?>>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <?php get_template_part( 'inc/meta' ); ?>
                            <?php the_content( '<div class="button"><span class="read-more ss-icon">&#x1F440;</span></div>' ); ?>
                        </article>
                    </li>
                    <?php endwhile; ?>
                </ul>

                <!-- post loop error message -->
                <?php else : //if no posts were found do this ?>
                    <p><b class="ss-icon">warning</b><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
                <?php endif; //end if have_posts condition ?>
            </section>
        <!-- gridset -->
        </div>
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