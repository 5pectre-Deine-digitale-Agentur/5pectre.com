<section id="work" class="side all">
  <div class="wrapper">
    <div class="grid">

      <?php $args = array( 'post_type' => 'Spectre-blank', 'posts_per_page' => 100, 'orderby' => 'rand' );
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
  </div>
</section>
