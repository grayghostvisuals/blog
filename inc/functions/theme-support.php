<?php
// enables post and comment RSS feed links to head
// required for theme submission
add_theme_support( 'automatic-feed-links' );

//enables post-thumbnail support
//enables for Posts and "movie" post type but not for Pages
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie' ) );

// http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
// Output valid HTML5 for search form, comment form, and comments/
add_theme_support( 'html5', array(
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption'
));


$custom_header_args = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $custom_header_args );
?>