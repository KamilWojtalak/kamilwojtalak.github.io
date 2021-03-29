<?php
wp_reset_postdata();
get_header();
if ( have_posts() ) :
     the_post();
    ?>
    <div <?php post_class(); ?> >
    <?php
        echo "<br>";
        // echo the_post_thumbnail( );
        echo the_title( '<h1>', '</h1>' );
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
        echo "<br>";
        echo "GET POSTS";
        echo "<br>";
        $args = array(
            'post_parent'    => get_the_ID(),
            'post_type'      => 'attachment', 
        );
        $attachments = get_posts( $args );

        if ( !empty( $attachments ) ) {
            print_r($attachments);
            foreach( $attachments[0] as $key => $value ) {
                echo "Key: $key => Value: $value";
                echo "<br>";
            }
        } else {
            echo "Empty";
        }
        echo "GET POSTS";
        echo "<br>";
        echo next_posts_link( 'Older Entries'  );
        echo previous_posts_link( 'Newer Entries' );
    ?>
        </div>
        <div class="nav-previous alignleft"><?php echo get_next_posts_link( 'Older posts' ); ?></div>
 
 
 
 <div class="nav-next alignright"><?php previous_post_link( '%link', '<-- Newer Posts' ); ?></div>

<div class="nav-previous alignleft"><?php echo next_post_link( '%link', 'Older Posts -- >' ); ?></div>
 
 
 

    <div class="">-- Comments --</div>
    <?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
    <div class="">-- Comments --</div>

    <?php
else : 
    _e( 'Something went wrong, no post matched', 'custom' );

endif;
wp_reset_postdata(); 

get_footer();