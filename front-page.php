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
          <span class="active">1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <div class="border"></div>
        </div>
        <span class="agency"> // Deine digitale Agentur</span>
      </div>

      <h1>Einfach eine weitere Agentur
        <h1 class="highlight">Nur Besser</h1>
      </h1>
    </div>
    <div class="header slider_img slide">
      <img src="<?php echo get_template_directory_uri();?>/img/team/Erik.png" alt="">
    </div>
    <div class="header slider_img slide">
      <img src="<?php echo get_template_directory_uri();?>/img/team/1.jpg" alt="">
    </div>
    <div class="header slider_img slide">
      <img src="<?php echo get_template_directory_uri();?>/img/team/2.jpg" alt="">
    </div>
    <div class="header slider_img slide">
      <img src="<?php echo get_template_directory_uri();?>/img/team/3.jpg" alt="">
    </div>
    <div class="cta" id="cta">
      <div class="icon">

      </div>
      <p>Sende uns eine Mail, um unsere vielen weiteren Projekte zu erleben</p>
    </div>
    <div class="controls">
      <div class="next"></div>
      <div class="prev"></div>
    </div>
    <section id="ud_preloader">
      <div id="ud_bg_right" class="ud_pre_half"></div>
    </section>
</section>

<script type="text/javascript">
anime({
  targets: ".ud_pre_half",
  width: "0",
  delay: 1000,
  duration: 600,
  easing: 'linear'
});

anime({
  targets: ["h1", ".cta", "nav", ".controls"],
  opacity: "1",
  translateY: ["10px", "0"],
  delay: 1600,
  duration: 300,
  easing: 'linear'
});

anime({
  targets: ".border",
  width: "100%",
  delay: 2600,
  duration: 300,
  easing: 'linear'
});
anime({
  targets: ['.numbering span', '.agency'],
  opacity: 1,
  delay: function(el, i, l) {
    return 2600 + (i * 150);
  },
});


</script>

<?php get_footer(); ?>
