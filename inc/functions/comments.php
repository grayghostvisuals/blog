<?php
function wpflex_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
?>

    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <div class="comment-vcard">
            <?php echo get_avatar( $comment, $args['avatar_size']); ?>

            <div class="comment-meta">
                <div class="says">
                    <?php printf( __('<cite class="fn">❧ %s</cite> <span>shouted:</span>'), get_comment_author_link() ); ?>
                </div>

                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID) ); ?>">
                    <?php printf(__('%1$s • %2$s'), get_comment_date(), get_comment_time()) ?>
                </a>

                <?php edit_comment_link( __('(Edit)' ), ' ', ''); ?>
            </div>
        </div>

        <?php if( $comment->comment_approved == '0' ) : ?>
            <p class="moderating"><em><?php echo( 'Your rant, suggestion, or comment is awaiting moderation from our head cheese. Please be patient' ) ?></em></p>
        <?php endif; ?>

        <div  class="comment-body">
            <div class="comment-text">
                <?php comment_text(); ?>
            </div>
        </div>

        <div class="reply">
            <?php comment_reply_link( array_merge( $args, array(
                                                            'depth'     => $depth,
                                                            'max_depth' => $args['max_depth']
                                                            )));
            ?>
        </div>
<?php }; ?>