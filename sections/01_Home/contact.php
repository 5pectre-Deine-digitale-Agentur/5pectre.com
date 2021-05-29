<?php if( have_rows('about') ):
  while( have_rows('about') ): the_row();?>

<?php if( get_sub_field('titel') or get_sub_field('text') or get_sub_field('image')): ?>

<section id="contact" class="front-page">
  <div class="wrapper">
    <div class="grid">
      <div class="column">
        <div class="contact">

          <?php if( get_sub_field('titel') or get_sub_field('text')): ?>

          <div class="contact-wrapper">

            <?php if( get_sub_field('titel') ): ?>
            <h4>Lass uns Etwas starten!</h4>
            <?php endif; ?>

            <?php if( get_sub_field('text') ): ?>
            <span>Du planst dein nächstes Projekt?<br>Ganz gleich ob PWA, Webseite oder Marketing im Bereich Social-Media oder Suchmaschinen Optimierung. Lass uns schnacken und schauen, wie wir dich voran bringen!</span>
            <?php endif; ?>

          </div>

          <?php endif; ?>

          <a class="button" href="#">
            <div class="icon">
              <i class="fas fa-angle-right"></i>
              <span class="overflow">Button</span>
            </div>
            <span class="button-content">Button</span>
          </a>
        </div>
      </div>

      <!-- Ich weiß nicht warum das nicht funktioniert -->

      <?php $image = get_sub_field('image');
        if( !empty( $image ) ): ?>

        <div class="column">
          <div class="team-container">Halllo
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
        </div>

      <?php endif; ?>

      <div class="column">
        <div class="team-container">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ressources/01_Team/erik.png" alt="">
        </div>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
