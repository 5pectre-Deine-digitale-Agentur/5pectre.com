<?php
/* 		Template Name: Agency    */
get_header(); ?>

	<main role="main" data-scroll-container>
		
    <?php
      include 'sections/02_Agency/hero.php';
      include 'sections/02_Agency/competence.php';
      include 'sections/02_Agency/team.php';
			include 'sections/01_Home/about.php';
			include 'sections/02_Agency/skillz.php';
			include 'sections/01_Home/clients.php';
			include 'sections/01_Home/contact.php';
    ?>

<?php get_footer(); ?>
