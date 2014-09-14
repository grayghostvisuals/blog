<?php if ( get_the_author_meta('ID') ) : ?>
<div class="profile">
	<div class="profile__avatar">
		<?php echo get_avatar( get_the_author_meta('ID'), 180 ); ?>
	</div>

	<div class="profile__meta">
		<h3 class="profile-name"><?php the_author(); ?></h3>

		<?php if ( get_the_author_meta('description') ) : ?>
		<div class="profile-desc"><?php the_author_meta('description'); ?></div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>