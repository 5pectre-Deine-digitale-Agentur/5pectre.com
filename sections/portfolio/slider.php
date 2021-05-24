  <section id="portfolio">
      <div class="pin-wrap">
        <?php
          $featured_posts = get_field('portfolio');
          if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
              <div data-url="<?php echo the_permalink();?>" class="client link">
                <img src="<?php echo the_field('teaser');?>" alt="">
                <img class="client-logo" src="<?php echo the_field('client_logo');?>" alt="">
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
      </div>
      <div class="progress">
        <div class="thin"></div>
        <div class="thick"></div>
      </div>
  </section>
