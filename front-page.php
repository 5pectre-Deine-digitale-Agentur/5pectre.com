<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentieren
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

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
    <div class="cta">
      <div class="icon">

      </div>
      <p>Sende uns eine Mail, um unsere vielen weiteren Projekte zu erleben</p>
    </div>
    <div class="controls">
      <div class="next"></div>
      <div class="prev"></div>
    </div>
</section>

<?php get_footer(); ?>
