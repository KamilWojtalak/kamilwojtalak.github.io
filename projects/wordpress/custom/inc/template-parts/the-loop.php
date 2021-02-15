<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        echo "<br>";
        echo the_content();
        echo "<br>";
        echo the_title();
        echo "<br>";
        echo the_permalink();
        echo "<br>";
    endwhile;
else : 
    _e( 'Something went wrong, no post matched', 'custom' );
endif;