<?php
function keep_moving_register_menus() {
  register_nav_menu('header-menu', 'Menu Principal');
}
add_action('init', 'keep_moving_register_menus');

//Fonction pour ajouter Police Google Fonts

function keep_moving_enqueue_styles() {
  // Enqueue Google Fonts
  wp_enqueue_style('keep-moving-google-fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap', false);

  // Enqueue other styles (CSS compiled from Sass)
  wp_enqueue_style('keep-moving-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'keep_moving_enqueue_styles');