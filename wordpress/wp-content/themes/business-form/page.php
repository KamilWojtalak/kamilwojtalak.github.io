<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussiness_agency
 */


$business_form_breadcrump_option = business_form_get_option('business_form_breadcrumb_setting_option');
$business_form_designlayout = get_post_meta(get_the_ID(), 'business_form_sidebar_layout', true);

get_header();

?>


<main id="main">
    <?php
    if ($business_form_breadcrump_option == 'enable' ) {
        business_form_header_img();

    } ?>
    <div id="content" class="site-content single-ample-page">
        <div class="container  clearfix">
            <?php
            $sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'business_form_sidebar_layout', true) );
            if (is_singular() && $sidebardesignlayout != "default-sidebar")
            {
                $sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'business_form_sidebar_layout', true) );

            } else
            {
                $sidebardesignlayout = esc_attr(business_form_get_option('business_form_sidebar_layout_option' ));
            }
           

            if($sidebardesignlayout == 'left-sidebar'){
            ?>
            <div class="flex-row-reverse">
                <?php } else{?>
                <div class="row"><?php } ?>
                <!-- Start primary content area -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">



                        <?php

                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="sidebar-primary secondary" class="widget-area sidebar" role="complementary">
                    <section  class="widget ">
                        <?php get_sidebar();?>
                    </section>
                </div>

            </div>
        </div>
    </div>
</main>


<?php

get_footer();
?>


