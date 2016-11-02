<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tower_Hill_-_Cat_5
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:700,700i,900|Open+Sans:600" rel="stylesheet">
<title>Tower Hill Insurance | Florida Homeowners Insurance</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thig_cat_5' ); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <!-- ~~~~~~~~~~~~~~ Top Menu Start ~~~~~~~~~~~~~~ -->

            <div id="topmargin">
                <div class="topbackground">
                    <div class="container">
                        <div id="top-navigation">
                            <form id="searchform" class="navbar-form navbar-right hidden-xs" role="search" action="<?php echo esc_url( site_url() ); ?>" method="get">
                                <div class="form-group">
                                    <input id="s" name="s" type="text" class="form-control" placeholder="Search" value="">
                                </div>
                            </form>
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'Top Menu',
                                    'theme_location'    => 'top_menu	',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-inverse navbar-collapse',
                                    'container_id'      => 'topmenu',
                                    'menu_class'        => 'nav navbar-nav navbar-right',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                );
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        <!-- ~~~~~~~~~~~~~~ Top Menu End ~~~~~~~~~~~~~~ -->


        <!-- ~~~~~~~~~~~~~~ Top Menu Responsive Start ~~~~~~~~~~~~~~ -->

        <div id="topmenuresponsive" class="container visible-xs">
            <div id="tmrrow" class="row">
                <div class="col-xs-12 ">
                    <ul>
                        <li id="acctlogin"><a href="#">Account Login</a></li>
                        <li id="findagent"><a href="#">Find An Agent</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ~~~~~~~~~~~~~~ Top Menu Responsive End ~~~~~~~~~~~~~~ -->


<!-- ~~~~~~~~~~~~~~ Global Menu Start ~~~~~~~~~~~~~~ -->

        <div class="container">
            <nav id="site-navigation" class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#globalmenu">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a href="http://www.julioaenlle.net/thig/"><img id="logoimg" src="http://julioaenlle.net/thig/wp-content/uploads/2016/10/thig_horizontal.png" alt="Tower Hill Insurance | Florida Homeowners Insurance">
                    </a>
                </div>
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'globalmenu',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            </nav><!-- #site-navigation -->
        </div>


<!-- ~~~~~~~~~~~~~~ Global Menu End ~~~~~~~~~~~~~~ -->

        </header><!-- #masthead -->

    <div id="content" class="site-content">
