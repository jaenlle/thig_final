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
                <div class="bottomcontent row">
                    <div class="col-md-4 col-sm-4">
                        <?php wp_nav_menu( array( 'theme_location' => 'footerquicklinks-menu', 'menu_id' => 'footer_quick_links' ) ); ?>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <?php wp_nav_menu( array( 'theme_location' => 'footercompany-menu', 'menu_id' => 'footer_company' ) ); ?>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="http://www.julioaenlle.net/thig/">
                            <img id="footerlogoimg" src="http://julioaenlle.net/thig/wp-content/uploads/2016/10/thig_all_white.png" alt="Tower Hill Insurance | Florida Homeowners Insurance" />
                        </a>
                        <div id="footer-sidebar3">
                            <?php
                            if(is_active_sidebar('footer-sidebar-3')){
                            dynamic_sidebar('footer-sidebar-3');
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="bottomtext row">
                    <div class="col-lg-12 pagination-centered">
                        <p class="text-center">
                            P.O. Box 147018 Gainesville, FL 32614 <span style="color: #8cc63f"> | </span> Customer Service &amp; Claims  <a href="tel: 8003423407">800.342.3407</a> <span style="color: #8cc63f"> | </span> Phone <a href="tel: 3523328800 ">352.332.8800</a> <span style="color: #8cc63f"> | </span> Fax 352.332.9999
                        </p>
                    </div>
                </div>
                <div class="bottomtext row">
                    <div class="col-lg-12 pagination-centered">
                        <p class="text-center">
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
