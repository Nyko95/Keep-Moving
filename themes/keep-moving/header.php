<header>
  <div class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
  </div>
  <nav>
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
  </nav>
</header>