<?php get_header(); ?>

<section class="hero">
  <div class="hero-content">
    <h1>Bienvenue sur Keep Moving</h1>
    <p>Défiez-vous et atteignez vos objectifs sportifs avec notre plateforme !</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">Commencez maintenant</a>
  </div>
</section>

<section class="features">
  <div class="container">
    <h2>Nos fonctionnalités</h2>
    <div class="feature">
      <h3>Défis personnalisés</h3>
      <p>Créez vos propres défis sportifs et suivez vos progrès.</p>
    </div>
    <div class="feature">
      <h3>Classements et Récompenses</h3>
      <p>Gagnez des badges et des récompenses en atteignant vos objectifs.</p>
    </div>
    <div class="feature">
      <h3>Intégration avec vos applications préférées</h3>
      <p>Connectez-vous à Strava, Fitbit, et plus encore.</p>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <h2>Rejoignez notre communauté</h2>
    <p>Partagez vos accomplissements et défiez vos amis.</p>
    <a href="<?php echo esc_url(home_url('/challenges')); ?>" class="btn-secondary">Voir les défis</a>
  </div>
</section>

<?php get_footer(); ?>