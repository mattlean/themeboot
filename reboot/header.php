<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <title><?php
        global $page, $paged;

        wp_title( '|', true, 'right' );

        bloginfo('name');
        $site_description = get_bloginfo( 'description', 'display' );

        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
    ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <?php wp_nav_menu(array('container' => false, 'menu_class' => 'nav navbar-nav mdlg-pull-right', 'theme_location' => 'main-nav-menu') ); ?>
            </div>
          </div>
        </nav>

      </div>
    </div>