<?php get_header(); ?>

<section class="hero">
<video autoplay muted loop id="hero-video">
    <source src="<?php echo get_template_directory_uri(); ?>/assets/vidéo/small.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la vidéo.
  </video>
  <div class="hero-content">
    <h1>Bienvenue sur Keep Moving</h1>
    <p>Défiez-vous et atteignez vos objectifs sportifs avec notre plateforme !</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">Commencez maintenant</a>
  </div>
</section>


<?php get_footer(); ?>