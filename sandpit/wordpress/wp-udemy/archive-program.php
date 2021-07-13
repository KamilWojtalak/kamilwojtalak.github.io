<?php get_header(); ?>
<?php pageBanner( array(
  'title' => 'All Program',
  'sub' => the_archive_description(),
) ); ?>

  <div class="container container--narrow page-section">
  <ul class="link-list min-list">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            
        ?>
              <li class=""><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></li>

        <?php
                endwhile;
            endif;
        ?>
  </ul>
  <?php echo paginate_links(); ?>
  </div>



<?php get_footer(); ?>