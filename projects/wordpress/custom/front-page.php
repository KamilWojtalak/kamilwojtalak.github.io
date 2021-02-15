<?php

get_header();

// the_content();
// get_template_part( "inc/template-parts/the-loop" );
$post_query = new WP_Query( array( 
    'post_type' => 'post',
    'author_name' => 'siema',
    'category_name' => '',
    'tag' => '',
    ) );
if ( $post_query->have_posts() ) :
    while ( $post_query->have_posts() ) : $post_query->the_post();
    echo "<br>";
    echo "Poczatek posta";
    echo "<br>";
    echo the_title();
    echo "<br>";
    echo the_excerpt();
    echo "<br>";
    echo the_permalink();
    echo "<br>";
    echo "Koniec posta";
    echo "<br>";
endwhile;
else : 
_e( 'Something went wrong, no post matched', 'custom' );
wp_reset_postdata();
endif;

$post_query = new WP_Query( 'post_type=post' );
if ( $post_query->have_posts() ) :
    while ( $post_query->have_posts() ) : $post_query->the_post();
    echo "<br>";
    echo "Poczatek posta";
    echo "<br>";
    echo the_title();
    echo "<br>";
    echo the_excerpt();
    echo "<br>";
    echo the_permalink();
    echo "<br>";
    echo "Koniec posta";
    echo "<br>";
endwhile;
else : 
_e( 'Something went wrong, no post matched', 'custom' );
wp_reset_postdata();
endif;


echo "<br>";
wp_list_categories();
wp_list_pages();

get_footer();