<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( has_post_thumbnail() ) {
            the_post_thumbnail(  );
        } else {
            echo "<div>-- Instead of Post Thumnail --</div>";
        }
        ?>
        <a href="<?php the_permalink(); ?>"><?php echo the_title();?></a>
        <?php
        
        the_excerpt();
    endwhile;

    ?>
    <div class="">NEXT PREVIOUS POST LINK</div>
    <div class=""><?php next_posts_link( 'Newer posts' );?></div>
    <div class=""><?php previous_posts_link( 'Older posts' );?></div>
    <div class="">NEXT PREVIOUS POST LINK</div>
    <div class="">POSTS NAV LINK</div>
    <?php posts_nav_link(); ?>
    <div class="">POSTS NAV LINK</div>
    <div class="">THE POSTS PAGINATION</div>
    <?php the_posts_pagination(); ?>
    <div class="">THE POSTS PAGINATION</div>
    <?php
endif;

get_footer();