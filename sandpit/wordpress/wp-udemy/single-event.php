<?php get_header(); ?>

<?php pageBanner( array() ); ?>

  <div class="container container--narrow page-section">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Events Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>

            <div class="generic-content">
                <?php the_content(); ?>
            </div>
            <?php 
              $related = get_field('related_program');
            if( $related )  {?>
            <hr class="section-break">
            <h2 class="headline headline--medium">Related programs: </h2>
            <ul class="link-list min-list">
            <?php 

              foreach($related as $item) { ?>
                <li><a href="<?php the_permalink($item);?>"><?php echo get_the_title($item); ?></a></li>
                <?php
              }
            ?>
            </ul>
        <?php
            }
                endwhile;
            endif;
        ?>
  <?php echo paginate_links(); ?>
  </div>



<?php get_footer(); ?>