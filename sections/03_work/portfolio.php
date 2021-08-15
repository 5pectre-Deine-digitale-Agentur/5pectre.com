<section id="work" class="side all">
  <div class="wrapper">
    <div class="grid">

      <?php $args = array( 'post_type' => 'Spectre-blank', 'posts_per_page' => 100, 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        $count = 1;
        $num = 2;
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php if( $count % 3  == 0 || $num % 4 == 0 ) : ?>

        <a href="<?php the_permalink(); ?>" class="item item_h">
          <div class="item__image">
            <div class="image" style="background: <?php echo the_field('ci_color'); ?>">
              <?php //include "texture.php"; ?>
              <img class="mockup" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt="">
            </div>
            <div class="item__meta"><?php echo get_the_date( get_option('date_format') ); ?></div>
          </div>

            <h3 class="item__title heading"><?php the_title(); ?></h2>
            <p><?php echo the_content(); $count++; $num++; ?></p>
        </a>

      <?php else : ?>

        <a href="<?php the_permalink(); ?>" class="item item_v">
          <div class="item__image">
            <div class="image" style="background: <?php echo the_field('ci_color'); ?>">
              <?php //include "texture.php"; ?>
              <img class="mockup" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt="">
            </div>
            <div class="item__meta"><?php echo get_the_date( get_option('date_format') ); ?></div>
          </div>

            <h3 class="item__title heading"><?php the_title(); ?></h2>
            <p><?php echo the_content(); $count++; $num++; ?></p>
        </a>

      <?php endif; ?>
      <?php endwhile; ?>

    </div>
  </div>
</section>
