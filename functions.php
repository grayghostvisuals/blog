<?php
/*------------------------------------------------------------------------------------------------[ after setup theme init ] */


//themename custom function setup
add_action( 'after_setup_theme', 'wpflex_setup' );


/*------------------------------------------------------------------------------------------------[ theme setup function ] */


//if ! wpflex_setup
if ( ! function_exists( 'wpflex_setup' ) ) :
//wpflex_setup
function wpflex_setup() {

/*-----------------------------------[ HTML title tag filter ] */

// http://shinraholdings.com/59/using-the-wp_title-filter
// http://codex.wordpress.org/Plugin_API/Filter_Reference/wp_title
// http://codex.wordpress.org/Function_Reference/wp_title

// Title tag filter
// required for themes
function wpflex_title_filter( $title, $sep, $seplocation ) {
    // get special index page type (if any)
    if ( is_category() )
        $type = 'Category';
    elseif ( is_tag() )
        $type = 'Tag';
    elseif ( is_author() )
        $type . 'Author';
    elseif ( is_date() || is_archive() )
        $type = 'Archives';
    else
        $type = false;

    // get the page number
    if ( get_query_var( 'paged' ) )
        $page_num = 'Page ' . get_query_var( 'paged' ); // on index
    elseif ( get_query_var( 'page' ) )
        $page_num = 'Page ' . get_query_var( 'page' ); // on single
    else $page_num = false;

    // strip title separator
    $title = trim( str_replace( $sep, '', $title ) );

    // determine seplocation order
    if ( $seplocation == 'right' )
        $parts = array( $page_num, $title, $type, get_bloginfo( 'name' ) );
    else
        $parts = array( get_bloginfo( 'name' ), $type, $title, $page_num );

    // strip blanks, implode, and return title tag
    $parts = array_filter( $parts );
    return implode( ' ' . $sep . ' ', $parts );
}

// call our custom wp_title filter, with normal (10) priority, and 3 args
add_filter( 'wp_title', 'wpflex_title_filter', 10, 3 );


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