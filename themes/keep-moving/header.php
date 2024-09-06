<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-container">
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
      </a>
    </div>
    <nav>
      <ul class="nav-menu">
        <!-- Lien Accueil statique -->
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
        <!-- Liens dynamiques via le menu WordPress -->
        <?php
          wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class' => '',
            'container' => false, // Enlève le conteneur div inutile
            'items_wrap' => '%3$s' // Enlève les <ul> supplémentaires générés par wp_nav_menu()
          ));
        ?>
      </ul>
    </nav>
  </div>
</header>