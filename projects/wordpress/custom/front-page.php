<?php

get_header();
    echo "<br>";
    echo "File URI: ". get_theme_file_uri();
    echo "<br>";
    echo "File Path: ". get_theme_file_path();
    echo "<br>";
// the_content();
// get_template_part( "inc/template-parts/the-loop" );


$sticky = get_option( 'sticky_posts' );
echo "-- Sticky: sticky --";
print_r($sticky);
$sticky_query = new WP_Query( array(
    'posts_per_page' => 1,
    'post__in' => $sticky,
    'ignore_sticky_posts' => 1
) );

if ( $sticky_query->have_posts() && isset($sticky[0]) ) : 
    $sticky_query->the_post();
    echo post_class( 'sieheheham' );
    echo "<br>";
    ?>
    <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
    <?php
    echo "<br>";
    echo the_excerpt();
    echo "<br> Permalink: ";
    echo get_permalink();
    echo "<br>";
else:
    echo "<br>";
    echo "There is no sticky post";
    echo "<br>";
    echo "There is no sticky post";
    echo "<br>";
    echo "There is no sticky post";
    echo "<br>";
    echo "There is no sticky post";

endif;
echo "-- Sticky: sticky --";
echo "<br>";


wp_reset_postdata();

$post_query = new WP_Query( array( 
    'post_type' => 'post',
    'author_name' => 'siema',
    'category_name' => '',
    'tag' => '',
    ) );
if ( $post_query->have_posts() ) :
    while ( $post_query->have_posts() ) : $post_query->the_post();
    ?>
    <div <?php post_class(); ?> >
    <?php
    echo "<br>";
    echo "Poczatek posta";
    echo "<br>";
    echo post_class( 'sieheheham' );
    echo "<br>";
    ?>
    <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
    <?php
    echo "<br>";
    echo the_excerpt();
    echo "<br> Permalink: ";
    echo get_permalink();
    echo "<br>";
    echo "Koniec posta";
    echo "<br>";
    ?>
    </div>
    <?php
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
echo "-- Post Pagination --";
    echo "<br>";
    echo "posts_nav_link(); ";
posts_nav_link();
    echo "<br>";
    echo "-- Post Pagination --";
echo "<br>";
echo "-- Post Pagination --";
    echo "<br>";
    echo "the_posts_pagination(); ";
    the_posts_pagination();
echo "<br>";
    echo "-- Post Pagination --";
echo "<br>";
else : 
_e( 'Something went wrong, no post matched', 'custom' );
wp_reset_postdata();
endif;


echo "<br>";
wp_list_categories();
wp_list_pages();


if ( is_active_sidebar( 'custom-sidebar' ) ) :
    get_sidebar( 'custom-sidebar' );
endif;

get_search_form();
wp_get_archives();
wp_register();
if ( is_user_logged_in() ) :
    wp_loginout();
endif;
wp_reset_postdata(); 

get_footer();