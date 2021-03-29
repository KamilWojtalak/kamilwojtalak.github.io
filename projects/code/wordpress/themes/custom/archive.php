<?php

get_header();


if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_tilte( '<h2>', '</h2>' );
        the_post_thumbnail();
        the_excerpt();
    endwhile;
else :
    _e( "Sorry, there are not posts", 'custom' ); 
endif;

get_footer();