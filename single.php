<?php get_header(); ?>

<section id="content" class="clearfix" role="main">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php get_template_part( 'inc/meta' ); ?>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
			<?php endif; ?>

			<!-- *optional* remove read more link -->
			<!-- http://codex.wordpress.org/Customizing_the_Read_More -->
			<!-- Resolves Issue #4: https://github.com/grayghostvisuals/WP-Flex/issues/4 -->
			<div class="entry-content">
				<?php the_content( '<div class="button"><span class="read-more ss-icon ss-view"></span></div>' ); ?>
			</div>

			<!-- $Ads -->
			<div class="adverts">
				<a href="http://referrals.trhou.se/grayghostvisuals" target="_blank"><img src="http://teamtreehouse.com/referral-badge/grayghostvisuals" class="treehouse" height="160"></a>
				<a href="http://htaccessbook.com/store/?ap_id=ggv61111" target="_blank"><img src="http://htaccessbook.com/wp/wp-content/uploads/2012/08/300x250-htaccess-made-easy.jpg" class="htaccess" alt="" border="0" /></a>
				<a href='http://www.stickermule.com/unlock?ref_id=2036059601'><img src="http://s3.amazonaws.com/assets.stickermule.com/banners/banner-1.jpg" alt="Custom Stickers, Die Cut Stickers, Bumper Stickers - Sticker Mule" width="200" height="160" border="0"/></a>
			</div>

			<!-- $Profile -->
			<?php get_template_part( 'inc/profile' ); ?>

			<?php $wpflex_post_pages = array(
											'before'           => '<p>' . __('Pages:'),
											'after'            => '</p>',
											'link_before'      => '',
											'link_after'       => '',
											'next_or_number'   => 'number',
											'nextpagelink'     => __('Next page'),
											'previouspagelink' => __('Previous page'),
											'pagelink'         => '%',
											'echo'             => 1
										); ?>

			<?php wp_link_pages( array( $wpflex_post_pages ) ); ?>

			<footer class="entry-footer">
				<div id="comments-count">
					<h6 class="taxonomy-title"><b class="ss-icon">&#x1F3A4;</b></h6>
					<a href="<?php comments_link(); ?>" id="comments-link"><span id="comments-number"><?php comments_number( '0', '1', '%' ); ?></span> Comments</a>
				</div>

				<ul id="taxonomies">
					<li class="taxonomy-tags">
						<h6 class="taxonomy-title"><b class="ss-icon">&#xE100;</b>Tagged</h6>
						<ul class="taxonomies-list">
							<li class="taxonomies-item"><?php the_tags( '</li><li>' ); ?></li>
						</ul>
					</li>

					<li class="taxonomy-cat">
						<h6 class="taxonomy-title"><b class="ss-icon">&#x1F4E5;</b>Filed as</h6>
						<ul class="taxonomy-list">
							<li class="taxonomies-item"><?php the_category( '</li><li>' ) ?></li>
						</ul>
					</li>
				</ul>
			</footer>
		</article>

		<div class="single-pagination">
			<span class="prev">
				<?php previous_post_link( '%link', '<span class="ss-icon ss-navigateleft"></span><span class="visuallyhidden">Previous Category Post</span>', TRUE ); ?>
			</span>
			<span class="nxt">
				<?php next_post_link( '%link', '<span class="visuallyhidden">Next Category Post</span><span class="ss-icon ss-navigateright"></span>', TRUE ); ?>
			</span>
		</div>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
	<?php endif; ?>
</section>

<?php comments_template(); ?>

<?php get_footer(); ?>