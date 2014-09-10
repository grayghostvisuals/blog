<?php
function custom_avatar($avatar_defaults) {
	$myavatar = 'http://api.adorable.io/avatar/285/abott@adorable.io.png';
	$avatar_defaults[$myavatar] = "Adorable Creature";
	return $avatar_defaults;
}

add_filter( 'avatar_defaults', 'custom_avatar' );
?>