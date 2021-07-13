<?php get_header(); ?>

<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>

<?php pageBanner( array(
  'title' => 'Past Events',
  'sub' => get_the_archive_description()
) ); ?>
<div class="container container--narrow page-section">

  <?php
  $parent = wp_get_post_parent_id(get_the_ID());
    if ( $parent ) {
  ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_the_permalink($parent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title( $parent )?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
  <?php }?>
    

    <?php 
    $has_children = get_pages(array(
        'child_of' => get_the_ID()
    ));

    if ($parent || $has_children) { 
        
    ?>

    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_the_permalink($parent);?>"><?php echo get_the_title(); ?></a></h2>
      <ul class="min-list">
          <?php 
            if ($parent) {
                $id = $parent;
            } else {
                $id = get_the_ID();
            }
            wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $id
            ));
           ?>
      </ul>
    </div>

    <?php } 
    ?>
        <div class="generic-content">
            <?php get_search_form(); ?>
        </div>

    
  </div>
</div>
<?php
        endwhile;
    endif;
?>

<?php get_footer(); ?>
