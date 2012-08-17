<?php
if( ! empty( $_SERVER[ 'SCRIPT_FILENAME' ] ) && 'comments.php' == basename( $_SERVER[ 'SCRIPT_FILENAME' ] ) )
die('please do not load this page directly kind sir');
?>
<div class="stripe m-all t-all d-all">
    <div class="t2-t6 d4-d10">
    <!-- gridset -->

        <section class="comments padding">

            <?php if ( post_password_required() ) : ?>
            <p class="nopassword"><b class="ss-icon ss-lock"></b><?php echo( 'This post is password protected. Enter the password to view any comments.' ); ?></p>
            <?php return; ?>
            <?php endif; ?>

            <!-- begin comment count -->
            <div id="comment-count">
            <?php if ( have_comments() ) : ?>
            <h3 id="comments-title"><b class="ss-icon">comment</b> <?php printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ), number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' ); ?></h3>

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // check if there comments to navigate through ?>

            <div class="pagination comment-pagination">
                <span class="prev-comments-link"><?php previous_comments_link( '<span>&larr; older comments</span>' ); ?></span>
                <span class="nxt-comments-link"><?php next_comments_link( '<span>newer comments &rarr;</span>' ); ?></span>
            </div>
            <!-- .comment-pagination -->

            <?php endif; //end check for comment navigation ?>
            </div>

            <ol class="commentlist">
            <?php foreach( $comments as $comment ) ?>

            <?php
            //comment array
            //see developer docs http://codex.wordpress.org/Function_Reference/wp_list_comments
            $themename_comment_array = array(
                          'walker'              => null,
                          'max_depth'           => '',
                          'style'               => 'ol',
                          'callback'            => null,
                          'end-callback'        => null,
                          'type'                => 'all',
                          'reply_text'          => 'shout back<b class="ss-icon">&#x21A9;</b>',
                          'page'                => '',
                          'per_page'            => '',
                          'avatar_size'         => 64,
                          'reverse_top_level'   => true,
                          'reverse_children'    => true,
                        ); ?>

            <?php if ( $comment -> comment_approved == '0' ) : ?>
                <p class="moderating"><b class="ss-icon ss-clock"></b><em><?php echo('Your rant, suggestion, or comment is awaiting moderation from our head cheese. Please be patient') ?></em></p>
            <?php endif; ?>

                <?php wp_list_comments( $themename_comment_array ); ?>
            </ol>

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

            <div class="pagination comment-pagination">
                <span class="prev-comments-link"><?php previous_comments_link( '<span>&larr; older comments</span>' ); ?></span>
                <span class="nxt-comments-link"><?php next_comments_link( '<span>newer comments &rarr;</span>' ); ?></span>
            </div>
            <!-- end/ div.comment-pagination -->

            <?php endif; // check for comment navigation ?>
            <?php else :
                //If there are no comments and comments are closed,
                //let's leave a little note, shall we?
                if ( ! comments_open() ) : ?>
                    <p class="nocomments"><b class="ss-icon ss-warning"></b><?php echo( 'Comments are closed bro. you\'re way late.' ); ?></p>
                <?php endif; ?>
            <?php endif; ?>

            <?php comment_form(); ?>
        </section>

    <!-- gridset -->
    </div>
</div>
<!-- end /section.comments -->