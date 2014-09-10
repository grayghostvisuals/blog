<?php
	function custom_avatar($avatar_defaults) {
		$custom_avatar_src = 'http://api.adorable.io/avatar/285/abott@adorable.io.png';
		$custom_avatar_defaults[$custom_avatar_src] = "Adorable Creature";
		return $custom_avatar_defaults;
	}

	add_filter( 'avatar_defaults', 'custom_avatar' );
?>