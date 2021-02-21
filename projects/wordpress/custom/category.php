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
    <div class=""><?php next_posts_link( 'Newer posts' );?></div>
    <div class=""><?php previous_posts_link( 'Older posts' );?></div>
    <?php
endif;

get_footer();