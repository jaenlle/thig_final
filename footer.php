<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tower_Hill_-_Cat_5
 */

?>

    </div><!-- #content -->
        <footer class="site-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <?php wp_nav_menu( array( 'theme_location' => 'footercompany-menu', 'menu_id' => 'footer_company' ) ); ?>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <?php wp_nav_menu( array( 'theme_location' => 'footerquicklinks-menu', 'menu_id' => 'footer_quick_links' ) ); ?>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="http://www.julioaenlle.net/thig/">
                            <img id="footerlogoimg" src="http://localhost/thig/wp-content/uploads/2016/10/thig_all_white.png" alt="Tower Hill Insurance | Florida Homeowners Insurance" />
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pagination-centered">
                        <p>
                            &copy; Copyright 2016 Tower Hill Insurance Group
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
