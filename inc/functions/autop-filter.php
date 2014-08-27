<?php

// place this line in your loop
// http://wordpress.stackexchange.com/questions/98808/disable-wpautop-keep-line-breaks
// nl2br(the_content())
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
?>