<?php get_header(); ?>
<?php pageBanner( array(
  'title' => 'Search Results', 
  'sub' => 'Search Results for "' . htmlspecialchars($_GET['s']) .'"', 
) ); ?>


  <div class="container container--narrow page-section">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
 
            get_template_part('template-parts/content', get_post_type());

            endwhile;
        else : 
            echo '<h2 class="headline headline--small">No results</h2>';
        endif;
        get_search_form();

        ?>
  <?php echo paginate_links(); ?>
  </div>



<?php get_footer(); ?>

