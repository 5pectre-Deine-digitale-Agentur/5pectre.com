<section id="portfolio" class="front-page" data-scroll-section>
  <div class="wrapper">
    <div class="grid">
      <?php $args = array( 'post_type' => 'Spectre-blank', 'posts_per_page' => 4, 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        $count = 1;
        $num = 2;
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if( $count % 3 == 0 || $num % 3 == 0 ) : ?>

          <a href="<?php the_permalink(); ?>" class="item item_v" data-scroll data-scroll data-scroll-speed="0.5">
            <div class="item__image">
              <div class="image" style="background: <?php echo the_field('ci_color'); ?>">
                <?php //include "texture.php"; ?>
                <img class="mockup" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt="">
              </div>
              <div class="item__meta"><?php echo get_the_date( get_option('date_format') ); ?></div>
            </div>

            <h3 class="item__title heading"><?php the_title(); ?></h2>
            <p><?php echo the_content(); ?></p>
          </a>

        <?php else : ?>

          <a href="<?php the_permalink(); ?>" class="item item_h" data-scroll data-scroll data-scroll-speed="1">
            <div class="item__image">
              <div class="image" style="background: <?php echo the_field('ci_color'); ?>">
                <?php //include "texture.php"; ?>
                <img class="mockup" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt="">
              </div>
              <div class="item__meta"><?php echo get_the_date( get_option('date_format') ); ?></div>
            </div>

              <h3 class="item__title heading"><?php the_title(); ?></h2>
              <p><?php echo the_content(); ?></p>
          </a>

        <?php endif; $count++; $num++; ?>
      <?php wp_reset_query(); endwhile; ?>
      </div>

    <?php if( have_rows('portfolio') ):
      while( have_rows('portfolio') ): the_row();

      $text = get_sub_field('text')?>

        <div class="portfolio" data-scroll data-scroll-speed="1">
          <div class="text-wrapper">
              <span class="large-text"><?php echo $text ?></span>
          </div>
          <div class="button link" href="#" onclick="work()">
            <div class="icon">
              <i class="fas fa-chevron-right"></i>
            </div>
            <span class="button-content">herumstöbern</span>
          </div>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
