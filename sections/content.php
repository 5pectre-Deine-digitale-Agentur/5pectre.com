<section id="content">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="page-title"><?php the_title();?></h1>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
              <?php comments_template( '', true ); // Remove if you don't want comments ?>
              <br class="clear">
              <?php edit_post_link(); ?>

            </article>

          <?php endwhile; ?>

          <?php else: ?>

              <h2><?php _e( 'Sorry, nothing to display.', 'Spectreblank' ); ?></h2>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
