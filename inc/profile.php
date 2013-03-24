<div class="profile">
	<div class="profile-avatar">
		<?php echo get_avatar( get_the_author_meta('ID'), 180 ); ?>
	</div>

	<div class="profile-meta">
		<h3 class="profile-name"><?php the_author(); ?></h3>

		<div class="profile-descr">
			<?php the_author_meta('description'); ?>
		</div>
	</div>
</div>