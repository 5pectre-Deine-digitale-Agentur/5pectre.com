<?php
// Template Name: Agency
get_header(); ?>
<main data-scroll-container>
	<?php
    include 'sections/agency/hero.php';
    include 'sections/agency/about.php';
    include 'sections/agency/team.php';
    include 'sections/agency/clients.php';
		include 'sections/preload.php';
	?>
</main>

<?php get_footer(); ?>
