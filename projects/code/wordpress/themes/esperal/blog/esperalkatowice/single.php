<?php get_header(); ?>
<div id="subpagewrapper">
    <div class="slider">
        <ol id="breadcrumb">
            <li><a href="/blog/">Blog</a></li>
            <li><?php the_title(); ?></li>
        </ol>
    </div>
    <section class="blog__single">
        <h1 style="text-align:center; margin-bottom: 50px;">Blog</h1>
        <div class="single__container">
             <?php if ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php   
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail( 'post-thumbnail', array( 'class' => 'single__thumbnail' ) ); 
                    endif; ?>
                    <div class="single__content">
                        <?php the_content(); ?>
                    </div>
                        
            <?php 
            endif; ?> 
        </div>
    </section>
</div>


<?php get_footer(); ?>
