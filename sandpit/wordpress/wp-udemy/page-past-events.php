<?php get_header(); ?>
<?php pageBanner( array(
  'title' => 'Past Events',
  'sub' => get_the_archive_description()
) ); ?>

  <div class="container container--narrow page-section">
        <?php 
        $past = new WP_Query( array(
            'paged' => get_query_var('paged', 1),
            'posts_per_page' => 10,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                'key' => 'event_date',
                'compare' => '<=',
                'value' => date('Ymd'),
                'type' => 'numeric'
                )
            ),
            ) );

        if ( $past->have_posts() ) :
            while ( $past->have_posts() ) : $past->the_post();
            
        ?>
        <?php get_template_part('template-parts/event'); ?>
        <?php
                endwhile;
            endif;
        ?>
  <?php echo paginate_links(array(
      'total' => $past->max_num_pages
  )); ?>
  </div>



<?php get_footer(); ?>