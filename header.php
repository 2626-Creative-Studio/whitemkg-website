<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name');?></title>
    <meta name="description" content="">
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/favicon.jpg">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/vendor.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <!-- scripts -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/vendor/modernizr.js"></script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head();?>
  </head>

  <body <?php body_class();?>>

    <!-- LOADER -->
    <div id="mask">
        <div class="loader-minimal"></div>
    </div>

    <header id="jHeader" class="invert fixed">
      <nav id="whitemkg-navbar" class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/white-logo.svg" alt="logo"></a>
        </div>

        <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right invert">
            <li class="active"><a href="<?php //esc_url(home_url('/'));?>work">Work</a></li>
            <li><a href="<?php //esc_url(home_url('/'));?>about-us">About us</a></li>
            <li><a href="<?php //esc_url(home_url('/'));?>services">Services</a></li>
            <li><a href="<?php //esc_url(home_url('/'));?>contact">Contact</a></li>
          </ul>
        </div> -->
          <?php
            $args = array(
                'menu' => 'Main Menu',
                'menu_class' => 'nav navbar-nav navbar-right invert',
                'container'         => "div", 
                'container_class'   => "collapse navbar-collapse navbar-ex1-collapse",
            );
            ?>
  
         <?php wp_nav_menu($args);?>
      </nav>
    </header>