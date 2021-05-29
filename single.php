<?php
/* 		POST-TEMPLATE

	*		TODO: Post-Seitentemplate nach Design erstellen
	*		TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/

get_header(); ?>

	<main role="main" data-scroll-container>
		<?php
		include 'sections/01_Home/hero.php';
		include 'sections/03_work/details.php';
		include 'sections/03_work/gallery.php';
		include 'sections/03_work/testimonial.php';
		include 'sections/03_work/related.php';
		?>
	</main>

<?php get_footer(); ?>
