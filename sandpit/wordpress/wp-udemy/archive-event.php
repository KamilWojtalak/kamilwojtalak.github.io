<?php get_header(); ?>
<?php pageBanner( array(
  'title' => 'All Events',
  'sub' => the_archive_description(),
) ); ?>

  <div class="container container--narrow page-section">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            
        ?>
        <?php get_template_part('template-parts/event'); ?>
        <?php
                endwhile;
            endif;
        ?>
  <?php echo paginate_links(); ?>
  <p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events/'); ?>">Check them out!</a></p>
  </div>



<?php get_footer(); ?>