<section id="portfolio" class="front-page">
  <div class="wrapper">
    <div class="grid">
      <?php $args = array( 'post_type' => 'Spectre-blank', 'posts_per_page' => 4, 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        $count = 1;
        $num = 2;
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php if( $count % 3 == 0 || $num % 3 == 0 ) : ?>

        <a href="<?php the_permalink(); ?>" class="item item_v">
            <div class="item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/background.png" alt="">
                <div class="item__meta"><?php echo get_the_date( get_option('date_format') ); ?></div>
            </div>

            <h3 class="item__title heading"><?php the_title(); ?></h2>
            <p><?php echo the_content(); ?></p>
        </a>

      <?php else : ?>

        <a href="<?php the_permalink(); ?>" class="item item_h">
            <div class="item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/background.png" alt="">
                <div class="item__meta"><?php echo get_the_date( get_option('date_format') ); ?></div>
            </div>

            <h3 class="item__title heading"><?php the_title(); ?></h2>
            <p><?php echo the_content(); ?></p>
        </a>

      <?php endif; $count++; $num++; ?>
      <?php endwhile; ?>
      </div>
    <div class="portfolio">
      <div class="text-wrapper">
          <span class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </div>
      <a class="button" href="#">
        <div class="icon">
          <i class="fas fa-angle-right"></i>
          <span class="overflow">Button</span>
        </div>
        <span class="button-content">Button</span>
      </a>
    </div>
  </div>
</section>
