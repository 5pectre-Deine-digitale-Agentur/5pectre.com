<?php
/*		STANDARDSEITENTEMPLATE

	*		TODO: Standardseitentemplate erstellen.
	* 	TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/
get_header(); ?>

	<section role="main">
		<div class="w-wrapper padding-two-top padding-two-bottom">
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'Spectreblank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>
