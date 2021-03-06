<?php get_header(); ?>
<?php pageBanner( ); ?>

  <div class="container container--narrow page-section">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <div class="generic-content">
                <div class="row group">
                    <div class="one-third">
                        <?php the_post_thumbnail('professor-portrait');?>
                    </div>
                    <div class="two-thirds">
                      <?php 
                      
                      $likeCount = new WP_Query(array(
                        'post_type' => 'like',
                        'meta_query' => array(
                          array(
                            'key' => 'liked_professor_id',
                            'compare' => '=',
                            'value' => get_the_ID(),
                          ),
                        ),
                      )); 
                      
                      $existStatus = 'no';

                      if (is_user_logged_in()) {
                        $existQuery = new WP_Query(array(
                          'author' => get_current_user_id(),
                          'post_type' => 'like',
                          'meta_query' => array(
                            array(
                              'key' => 'liked_professor_id',
                              'compare' => '=',
                              'value' => get_the_ID(),
                            ),
                          ),
                        )); 
  
                        if ( $existQuery->found_posts ) {
                          $existStatus = 'yes';
                        }
                      }
                      
                      ?>
                      <span class="like-box" data-like="<?php echo $existQuery->posts[0]->ID; ?>" data-professor="<?php echo get_the_ID(); ?>" data-exists="<?php echo $existStatus; ?>">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <span class="like-count"><?php echo $likeCount->found_posts; ?></span>
                      </span>
                      <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
            <?php 
              $related = get_field('related_program');
            if( $related )  {?>
            <hr class="section-break">
            <h2 class="headline headline--medium">Subject(s) Taught: </h2>
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