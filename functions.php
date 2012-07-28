<?php 
/*------------------------------------------------------------------------------------------------[ after setup theme init ] */


//themename custom function setup
add_action( 'after_setup_theme', 'wpflex_setup' );


/*------------------------------------------------------------------------------------------------[ theme setup function ] */


//if ! wpflex_setup
if ( ! function_exists( 'wpflex_setup' ) ) :
//wpflex_setup
function wpflex_setup() {


/*------------------------------------------------------------------------------------------------[ wp enque script ] */


if ( is_singular() ) : 
wp_enqueue_script( 'comment-reply' );
endif;


/*------------------------------------------------------------------------------------------------[ rss feed ] */

//enables post and comment RSS feed links to head
//required for theme submission
add_theme_support( 'automatic-feed-links' );


/*------------------------------------------------------------------------------------------------[ editor style sheet ] */


//add editor style sheet
add_editor_style();


/*------------------------------------------------------------------------------------------------[ post thumbnails ] */


//enables post-thumbnail support
//enables for Posts and "movie" post type but not for Pages
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );

// set post thumbnail size
set_post_thumbnail_size( 700, 450, true );


/*------------------------------------------------------------------------------------------------[ content width ] */


//if content_width not set
if ( ! isset( $content_width ) ) :
$content_width = 960;
endif;


/*------------------------------------------------------------------------------------------------[ Custom Login BG ] */

//http://web-design-weekly.com/2012/06/03/style-your-wordpress-login
function custom_login_logo() {
  echo '<style type="text/css">
    body.login{ 
      background: url(http://static.grayghostvisuals.com/img/blogin-bg.png) 50% 50% no-repeat;
      background-size:cover;
    }
    body.login #nav a,
    body.login #backtoblog a {
        text-align: center;
        text-decoration: none;
    }
  </style>';
}
add_action('login_head', 'custom_login_logo');


/*------------------------------------------------------------------------------------------------[ Link Jumps to More or Top of Page ] */


function remove_more_jump_link($link) { 
    $offset = strpos($link, '#more-');
    if ($offset) {
        $end = strpos($link, '"',$offset);
    }
    if ($end) {
        $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');



/*------------------------------------------------------------------------------------------------[ widgets ] */


//wpflex widget setup
function wpflex_widget() {

//call register_sidebar wp method as array
register_sidebar( array(
    'ID'            => 'wpflex_sidebar',
    'name'          => 'WP-Flex Sidebar',
    'before_widget' => '<article id="%1$s" class="widget %2$s">',
    'after_widget'  => '</article>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
));//end primary sidebar
  
//call to register footer sidebar widgets
register_sidebar( array(
    'ID'            => 'fw',
    'name'          => 'WP-Flex Footer Widget',
    'before_widget' => '<article id="%1$s" class="fwidget %2$s">',
    'after_widget'  => '</article>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
)); //end footer widget

}; //end wpflex_widget

//trigger the wpflex widget function
//required for theme submission
add_action( 'widgets_init' , 'wpflex_widget' );

}//end themename_setup
endif;//end ! function_exists( 'wpflex_setup' )