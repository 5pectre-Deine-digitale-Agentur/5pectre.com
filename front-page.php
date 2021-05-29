<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentiert
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>

<main role="main" data-scroll-container>

  <?php
    include 'sections/01_Home/hero.php';
    include 'sections/01_Home/about.php';
    include 'sections/01_Home/portfolio.php';
    include 'sections/01_Home/clients.php';
    include 'sections/01_Home/contact.php';
  ?>

<?php get_footer(); ?>
