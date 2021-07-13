<div class="post-item">
    <h2 class="headline headline--medium headline--post-tilte"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
    <div class="generic-content">
    <?php echo wp_trim_words( get_the_content(), 20 ); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">View program &raquo;</a></p>
    </div>
</div>