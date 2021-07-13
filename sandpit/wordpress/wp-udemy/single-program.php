<?php get_header(); ?>
<?php pageBanner( array() ); ?>

  <div class="container container--narrow page-section">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program'); ?>"><i class="fa fa-home" aria-hidden="true"></i> All Programs</a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>

            <div class="generic-content">
                <?php the_content(); ?>
            </div>

        <?php
                endwhile;
            endif;
        ?>

        <?php 
            $professors = new WP_Query( array(
              'posts_per_page' => -1,
              'post_type' => 'professor',
              'orderby' => 'title',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'related_program',
                  'compare' => 'LIKE',
                  'value' => '"' . get_the_ID() . '"' ,
                )
              ),
            ) );
            
              if ($professors->have_posts()) {
                
                echo '<hr class="section-break">';
                echo '<h2 class="headline headline--medium">' . get_the_title() . ' Professors: </h2>';
                echo '<ul class="professor-cards">';

                if ( $professors->have_posts() ) :
                  while ( $professors->have_posts() ) : $professors->the_post();
              ?>
                  <li class="professor-card__list-item">
                    <a class="professor-card" href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url('professor-small'); ?>" alt="" class="profssor-card__image">
                        <span class="professor-card__name"><?php the_title(); ?></span>
                    </a>
                  </li>
                
              <?php 
                  endwhile;
                endif; wp_reset_postdata();
                echo '</ul>';
              }
              ?>

<?php 
            $events = new WP_Query( array(
              'posts_per_page' => -1,
              'post_type' => 'event',
              'meta_key' => 'event_date',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => date('Ymd'),
                  'type' => 'numeric'
                ), 
                array(
                  'key' => 'related_program',
                  'compare' => 'LIKE',
                  'value' => '"' . get_the_ID() . '"' ,
                )
              ),
            ) );
            
              if ($events->have_posts()) {
                
                echo '<hr class="section-break">';
                echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';

                if ( $events->have_posts() ) :
                  while ( $events->have_posts() ) : $events->the_post();
              ?>
              <?php get_template_part('template-parts/event'); ?>
              <?php 
                  endwhile;
                endif; wp_reset_postdata();
              }
              ?>


  <?php echo paginate_links(); ?>
  </div>



<?php get_footer(); ?>