
<section id="page">
  <div class="wrapper">
    <div class="page grid">
      <div class="left-col">
        <div class="addition">
					<?php echo the_field('additional_information');?>
        </div>
      </div>
      <div class="right-col">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>

					<h2><?php _e( 'Sorry, nothing to display.', 'Spectreblank' ); ?></h2>

				<?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
