<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/fonts.css" rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

    <!-- HEADER
    ============ -->
    <header class="site-header" role="banner">
      <div class="container">

        <!-- NAVBAR
        ============ -->
        <div class="navbar-wrapper">
          <div class="navbar" role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand on-mobile" href="/">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-horizontal.png" alt="Bootstrap to Wordpress" class="horizontal">
                </a>
              </div><!-- navbar-header -->

              <?php
                wp_nav_menu( array(

                  'theme_location' => 'header',
                  'container'       => 'nav',
                  'container_class' => 'navbar-collapse collapse',
                  'menu_class'        => 'nav navbar-nav row'

                ) );
              ?>

              <a class="navbar-brand off-mobile" href="/">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.jpg" alt="Bootstrap to Wordpress">
              </a>
            </div><!-- container -->
          </div><!-- navbar -->
        </div><!-- navbar-wrapper -->
      </div><!-- .container -->
    </header>
