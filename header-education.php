<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

  <head>
    <meta charset="utf-8">

    <!-- Google Chrome Frame for IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php if (is_front_page() ) { echo "TEDxABQ Education"; } else { the_title(); echo " - TEDxABQ Education"; } ?></title>

    <!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <!-- or, set /favicon.ico for IE10 win -->
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

    <!-- drop Google Analytics Here -->
    <!-- end analytics -->

  </head>

  <body <?php body_class(); ?>>

    <div id="container">

      <header class="header" role="banner">

        <div class="wrap clearfix">
          <div class="sixcol first">
            <nav class="global-nav-cont" role="navigation">
              <?php bones_community_nav(); ?>
            </nav>
          </div>
          <div class="sixcol">
            <nav class="global-nav-cont" role="navigation">
              <?php bones_global_nav(); ?>
            </nav>
          </div>
        </div>

        <br />

        <div id="inner-header" class="wrap clearfix">

          <!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
          <p id="logo" class="h1"><a href="<?php echo home_url(); ?>/education" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tedxabqEd_mainlogo.png" /></a></p>

          <!-- if you'd like to use the site description you can un-comment it below -->
          <?php // bloginfo('description'); ?>

        </div> <!-- end #inner-header -->

      </header> <!-- end header -->
