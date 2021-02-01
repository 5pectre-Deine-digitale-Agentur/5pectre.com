<?php
/*    404-WEITERLEITUNG

  *   TODO: 404 Umleitung einrichten
	*		TODO: Button um zurück zur Startseite zu kommen nicht vergessen

*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'Spectreblank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'Spectreblank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
