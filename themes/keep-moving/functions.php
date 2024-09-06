<?php
// Fonction pour charger les styles Google Fonts et le fichier CSS principal du thème
function keep_moving_enqueue_styles() {
  // Enqueue Google Fonts
  wp_enqueue_style('keep-moving-google-fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap', false);

  // Enqueue the main stylesheet (style.css à la racine du thème)
  wp_enqueue_style('keep-moving-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'keep_moving_enqueue_styles');

// Fonction pour charger les styles CSS générés à partir de Sass
function keep_moving_custom_styles() {
  // Enqueue le fichier CSS compilé à partir de Sass (dans /sass/style.css)
  wp_enqueue_style(
      'keep-moving-custom-css',
      get_template_directory_uri() . '/sass/style.css', // Assure-toi que ce fichier existe
      array(),
      '1.0' // Version du fichier CSS
  );
}

add_action('wp_enqueue_scripts', 'keep_moving_custom_styles');
?>