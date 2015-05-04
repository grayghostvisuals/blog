<?php
function custom_avatar($avatar_defaults) {
	$myavatar = 'http://static.grayghostvisuals.com/imgblog/blank-avatar.png';
	$avatar_defaults[$myavatar] = "GrayGhost";
	return $avatar_defaults;
}

add_filter( 'avatar_defaults', 'custom_avatar' );
?>