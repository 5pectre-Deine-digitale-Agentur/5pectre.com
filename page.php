<?php get_header(); ?>

<main id="page" data-scroll-container>
  <section id="page">
    <div class="wrapper">
      <h1 class="heading"><?php echo the_title(); ?></h1>
      <div class="page grid">
        <div class="left-col">
          <div class="addition">
  					<?php echo the_field('left-col');?>
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
</main>

<?php get_footer(); ?>
