<?php get_header(); ?>
<?php pageBanner( array() ); ?>

  <div class="container container--narrow page-section">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Blog Home</a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('d.m.Y'); ?> In <?php echo get_the_category_list(', '); ?></span></p>
            </div>

            <div class="generic-content">
                <?php the_content(); ?>
            </div>
        <?php
                endwhile;
            endif;
        ?>
  <?php echo paginate_links(); ?>
  </div>



<?php get_footer(); ?>