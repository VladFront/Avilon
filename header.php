<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="<?php bloginfo('description'); ?>" name="description">

  <!-- Favicons -->
  <link href="<?php bloginfo('template_url'); ?>/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <?php wp_head(); ?>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><?php the_field('g_site_title', 'option'); ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></img></a> -->
      </div>
      <?php wp_nav_menu( array(
          'theme_location'  => 'Верхнее меню',
          'menu'            => 'top', 
          'container'       => 'nav', 
          'container_id'    => 'nav-menu-container', 
          'menu_class'      => 'nav-menu', 
          'echo'            => true,
          'before'          => '<li>',
          'after'           => '</li>',
      ) ); ?>
<!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->