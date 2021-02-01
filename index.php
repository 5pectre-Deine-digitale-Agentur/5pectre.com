<?php get_header(); ?>

	<section role="main">
		<div class="w-wrapper padding-two-top padding-two-bottom">

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	</section>

<?php get_footer(); ?>
