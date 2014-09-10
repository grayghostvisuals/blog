<?php
	// Add a default avatar to Settings > Discussion.
	// Place inside your 'functions.php' file.
	// function custom_avatar($avatar_defaults) {
	// 	$myavatar = get_bloginfo('template_directory') . '/img/logo.png';
	// 	// $myavatar = 'http://api.adorable.io/avatar/285/abott@adorable.io.png';

	// 	$avatar_defaults[$myavatar] = "Adorable Creature";

	// 	return $avatar_defaults;
	// }

	// add_filter( 'avatar_defaults', 'custom_avatar' );

add_filter( 'avatar_defaults', 'newgravatar' );
function newgravatar ($avatar_defaults) {
$myavatar = get_bloginfo('template_directory') . '/img/logo.png';
$avatar_defaults[$myavatar] = "WPBeginner";
return $avatar_defaults;
}
?>