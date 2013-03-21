<div class="profile">
	<?php
		// http://codex.wordpress.org/Function_Reference/wp_get_current_user
		// wp_get_current_user();
		$current_user = wp_get_current_user();
	?>
	<?php //http://codex.wordpress.org/Function_Reference/get_avatar ?>
	<div class="profile-avatar">
		<?php echo get_avatar( get_the_author_meta('ID'), 180 ); ?>
	</div>

	<div class="profile-meta">
		<h3 class="profile-name"><?php echo $current_user->user_firstname . " " . $current_user->user_lastname; ?></h3>

		<div class="profile-descr">
			<p><?php the_author_meta('description'); ?></p>
		</div>
	</div>
</div>