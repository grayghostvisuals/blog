<?php
	if( ! empty( $_SERVER[ 'SCRIPT_FILENAME' ] ) && 'comments.php' == basename( $_SERVER[ 'SCRIPT_FILENAME' ] ) )
	die('please do not load this page directly kind sir');
?>

<div class="comments" id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword">
			<?php echo( 'This post is password protected. Enter the password to view any comments.' ); ?>
		</p>
		<?php return; ?>
	<?php endif; ?>

	<div id="comment-count">
		<?php if ( have_comments() ) : ?>
			<h3 id="comments-title">
				<a href="<?php comments_link(); ?>">
					<?php comments_number( '0', '1', '%' ); ?> Comments
				</a>
			</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // if comments exist ?>
			<div class="pagination comment-pagination">
				<span class="prev-comments-link">
					<?php previous_comments_link( '<span>&larr; older comments</span>' ); ?>
				</span>
				<span class="nxt-comments-link">
					<?php next_comments_link( '<span>newer comments &rarr;</span>' ); ?>
				</span>
			</div>
		<?php endif; ?>
	</div><!-- end comment count -->

	<!-- comment list -->
	<ol class="commentlist">
		<?php
		$wpflex_comment_array = array(
									'walker'            => null,
									'max_depth'         => '',
									'style'             => 'ol',
									'callback'          => 'wpflex_comments',
									'end-callback'      => null,
									'type'              => 'all',
									'reply_text'        => 'Enlighten Me',
									'page'              => '',
									'per_page'          => '',
									'avatar_size'       => 96,
									'reverse_top_level' => false,
									'reverse_children'  => false,
									'format'            => 'html5'
								); ?>

		<?php wp_list_comments( $wpflex_comment_array ); ?>
	</ol><!-- end comment list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<div class="pagination comment-pagination">
			<span class="prev-comments-link">
				<?php previous_comments_link( '<span>&larr; older comments</span>' ); ?>
			</span>
			<span class="nxt-comments-link">
				<?php next_comments_link( '<span>newer comments &rarr;</span>' ); ?>
			</span>
		</div><!-- end/ div.comment-pagination -->
	<?php endif; ?>

	<?php else :
		if ( ! comments_open() ) : ?>
		<p class="nocomments"><?php echo( 'Comments are closed. You\'re way late.' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<?php
			$commentform_args = array(
					'comment_notes_after' => '<p>toggle formatting examples</p>

					<div>
					<pre><code class="language-markup">&lt;pre&gt;&lt;code class=&quot;language-[markup | sass | css | php | javascript | ruby | clike | bash]&quot;&gt;
…code example goes here…
&lt;/code&gt;&lt;/pre&gt;
</code></pre>

					<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:<pre><code class="language-markup">&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt;</code></pre></p>
					</div>');
		?>

		<?php comment_form($commentform_args); ?>
		<?php get_template_part('inc/comment-preview'); ?>
	<?php endif; ?>
</div>
<!-- end /section.comments -->