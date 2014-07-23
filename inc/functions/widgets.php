<?php
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
};

//trigger the wpflex widget function
//required for theme submission
add_action( 'widgets_init' , 'wpflex_widget' );
?>