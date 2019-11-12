<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
  <nav>
    <?php 
      wp_nav_menu( array('theme_location' => 'nav_main') );
    ?>
  </nav>
</header>