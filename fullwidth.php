<?php
/**
 * Template Name: Full-Width
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tower_Hill_-_Cat_5
 */

get_header(); ?>

    <?php
    the_post_thumbnail( 'jumbo_thumbnail', array(
    'alt' => 'Responsive image',
    'class' => 'img-responsive'
    ) );
    ?>

    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
    </div>

<?php
get_footer();
