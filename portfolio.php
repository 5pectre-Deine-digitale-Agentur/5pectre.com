<?php
  // Template Name: Portfolio
get_header(); ?>

<main data-scroll-container>
  <?php
  // include 'sections/portfolio/portfolioSlider.php';
  include 'sections/portfolio/hero.php';
  include 'sections/portfolio/slider.php';
  include 'sections/portfolio/cta.php';
  include 'sections/preload.php';
  ?>
</main>

<?php get_footer();?>
