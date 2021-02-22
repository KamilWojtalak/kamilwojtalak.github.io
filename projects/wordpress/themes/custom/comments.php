<?php

$comments_query = new WP_Comment_Query();
$comments_args = array( 
    'status' => 'approve',
    'post_id' => get_the_ID()
);
$comments = $comments_query->query( $comments_args );


if ( $comments ) :

    foreach( $comments as $item ) {
        echo "<div>-- \$comment content --</div>";
        foreach( $item as $key => $value ) {
            echo "<div> $key: $value</div>";

        }
        echo "<div>-- \$comment content --</div>";
    }
else:
    echo "<div>No posts matched</div>";
    
endif;

comment_form();
wp_reset_postdata();
    