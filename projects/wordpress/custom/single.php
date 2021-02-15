<?php

get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        echo "<br>";
        echo the_tilte( '<h1>', '</h1>' );
        echo "<br>";
        echo the_content();
        echo "<br>";
        echo the_permalink();
        echo "<br>";
        echo the_category();
        echo "<br>";
        echo the_author();
        echo "<br>";
        echo the_excerpt();
        echo "<br>";
        echo the_ID();
        echo "<br>";
        echo the_meta();
        echo "<br>";
        echo the_shortlink();
        echo "<br>";
        echo the_tags();
        echo "<br>";
        echo the_time();
    endwhile;
else : 
    _e( 'Something went wrong, no post matched', 'custom' );

    echo next_post_link();
    echo previous_post_link();
endif;




get_footer();