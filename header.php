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

    <header id="jHeader" class="invert fixed dark">
      <nav id="whitemkg-navbar" class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
            <!-- <img src="<?php //echo esc_url(get_template_directory_uri()); ?>/images/white-logo.svg" alt="logo"> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.18 19.72"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:3px;}.cls-2{fill:#fff;}</style></defs><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polyline class="cls-1" points="30.51 0.01 30.52 9.55 30.54 19.53"/><line class="cls-1" x1="41.36" y1="9.75" x2="30.52" y2="9.55"/><line class="cls-1" x1="41.36" y1="0.02" x2="41.33" y2="19.72"/><line class="cls-1" x1="52.22" y1="1.52" x2="63.1" y2="1.52"/><line class="cls-1" x1="57.61" y1="19.24" x2="57.66" y2="1.53"/><polyline class="cls-1" points="78.11 1.52 68.08 1.52 68.08 18.18 78.18 18.18"/><line class="cls-1" x1="78.11" y1="9.15" x2="68.07" y2="9.15"/><line class="cls-1" x1="48.34" y1="0.05" x2="48.34" y2="13.54"/><circle class="cls-2" cx="48.34" cy="18.02" r="1.58"/><path class="cls-2" d="M0,0,3.26,0,8.12,12.2,13.52.89l5.14,10.73L23.52,0h2.95l-8,19.56L13.58,8.34l-5.08,11Z"/></g></g></svg>
          </a>
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
    'container' => "div",
    'container_class' => "collapse navbar-collapse navbar-ex1-collapse",
);
?>

         <?php wp_nav_menu($args);?>
      </nav>
    </header>