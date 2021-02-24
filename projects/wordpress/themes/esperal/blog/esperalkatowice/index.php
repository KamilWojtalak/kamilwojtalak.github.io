<?php get_header(); ?>


<div id="subpagewrapper">
    <div class="slider">
        <ol id="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Blog</li>
        </ol>
    </div>
    <section class="blog__home">
        <h1>Blog</h1>
        <div class="home__content">
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="home__post">
                        <?php   
                        if ( has_post_thumbnail() ) :
                         the_post_thumbnail( 'post-thumbnail', array( 'class' => 'home__thumbnail' ) ); 
                        else: 
                            echo "<div class='home__thumbnail'></div>";
                        endif; ?>
                        <div class="home__post-c">
                            <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                        </div>
                    </a>
            <?php endwhile;
            endif; ?> 
        </div>
    </section>
</div>


<?php get_footer(); ?>
