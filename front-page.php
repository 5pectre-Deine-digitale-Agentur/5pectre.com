<?php
/*    STARTSEITE

  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind, sind Asana zu entnehmen

*/

get_header(); ?>

<section id="title" class="light-background">
    <div class="wrapper">
      <div class="subtitle">
        <div class="numbering">
          <span class="active" id="number_1">1</span>
          <span id="number_2">2</span>
          <span id="number_3">3</span>
          <span id="number_4">4</span>
          <div class="border"></div>
        </div>
        <span class="agency"> // Deine digitale Agentur</span>
      </div>

      <h1 class="slide_title_1 slide_title">Einfach eine weitere Agentur
        <span class="highlight">Nur Besser</span>
      </h1>
      <h1 class="slide_title_2 slide_title">EOVA Elektrotechnik
      </h1>
      <h1 class="slide_title_3 slide_title">Insanto Seniorenresidenzen
      </h1>
      <h1 class="slide_title_4 slide_title">Sammys Dampfshop
      </h1>
    </div>
    <div class="header slider_img slide" id="slide_1">
      <img src="<?php echo get_template_directory_uri();?>/img/team/Erik.png" alt="">
    </div>
    <div class="header slider_img slide" id="slide_2">
      <img src="<?php echo get_template_directory_uri();?>/img/assets/1.jpg" alt="">
    </div>
    <div class="header slider_img slide" id="slide_3">
      <img src="<?php echo get_template_directory_uri();?>/img/assets/2.jpg" alt="">
    </div>
    <div class="header slider_img slide" id="slide_4">
      <img src="<?php echo get_template_directory_uri();?>/img/assets/3.jpg" alt="">
    </div>
    <div class="cta" id="cta">
      <div class="icon"></div>
      <p>Sende uns eine Mail, um unsere vielen weiteren Projekte zu erleben</p>
    </div>
    <div class="controls">
      <div class="next"></div>
      <div class="prev"></div>
    </div>
    <div class="mask"></div>
</section>

<?php get_footer(); ?>
