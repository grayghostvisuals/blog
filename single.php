<?php get_header(); ?>

<section id="content" class="clearfix" role="main">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="stripe m-all t-all d-all">
        <div class="t2-t6 d4-d10">
        <!-- gridset -->
            <article <?php post_class('padding'); ?> id="post-<?php the_ID(); ?>">

                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php get_template_part( 'inc/meta' ); ?>
                </header>

                <div class="rdbWrapper" data-show-read="1" data-show-send-to-kindle="0" data-show-print="0" data-show-email="0" data-orientation="0" data-version="1" data-bg-color="transparent"></div>
                <script>(function() {var s = document.getElementsByTagName("script")[0],rdb = document.createElement("script"); rdb.async = true; rdb.src = document.location.protocol + "//www.readability.com/embed.js"; s.parentNode.insertBefore(rdb, s); })();</script>

                <?php the_content(); ?>

                <?php
                wp_link_pages( array(
                    'before' => '<div>' . 'Pages &raquo',
                    'after'  => '</div>'
                )); ?>

                <footer class="entry-footer">
                    <div id="comments-count">
                        <h6 class="taxonomy-title"><b class="ss-icon">&#x1F3A4;</b></h6>
                        <a href="<?php comments_link(); ?>" id="comments-link"><span id="comments-number"><?php comments_number( '0', '1', '%' ); ?></span> Comments</a>
                    </div>

                    <ul id="taxonomies">
                        <li class="taxonomytags">
                            <h6 class="taxonomy-title"><b class="ss-icon">&#xE100;</b>Tagged</h6>
                            <ul class="taxonomies-list">
                                <li class="taxonomies-item"><?php the_tags( '</li><li>' ); ?></li>
                            </ul>
                        </li>

                        <li class="taxonomycats">
                            <h6 class="taxonomy-title"><b class="ss-icon">&#x1F4E5;</b>Filed as</h6>
                            <ul class="taxonomies-list">
                                <li class="taxonomies-item"><?php the_category( '</li><li>' ) ?></li>
                            </ul>
                        </li>
                    </ul>
                </footer>
            </article>

            <div class="m-all t-all d-all">
                <div class="single-pagination">
                    <span class="prev">
                        <?php previous_post_link( '%link', '<span class="ss-icon ss-navigateleft"></span> <span class="visuallyhidden">Previous Category Post</span>', TRUE ); ?>
                    </span>
                    <span class="nxt">
                        <?php next_post_link( '%link', '<span class="visuallyhidden">Next Category Post</span> <span class="ss-icon ss-navigateright"></span>', TRUE ); ?>
                    </span>
                </div>
            </div>
        <!-- gridset -->
        </div>
    </div>
    <?php endwhile; ?>

    <?php else : ?>
        <p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
    <?php endif; ?>
</section>

<?php comments_template(); ?>

<!-- sidebar -->
<div class="stripe-sidebar m-all t-all d-all">
    <div class="m-all t2-t6 d4-d10">
        <section class="padding" id="sidebar" role="complementary">
            <?php get_sidebar(); ?>
        </section>
    </div>
</div>

<?php get_footer(); ?>