<?php if( have_rows('clients') ):
  while( have_rows('clients') ): the_row();

  $title = get_sub_field('title');
  $images = get_sub_field('client');
  ?>

    <section id="clients" class="front-page">
      <div class="wrapper">
        <div class="title">
          <h2 class="heading"><?php echo $title ?></h2>
        </div>
        <div class="grid">

          <?php if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="item">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

        </div>

        <div class="show-more accordeon">
          <div class="client-list">
            <div class="grid">

              <?php
              $args = array( 'post_type' => 'Spectre-blank', 'posts_per_page' => 4, 'orderby' => 'rand' );
              $loop = new WP_Query( $args );

              while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <span class="client"><?php echo the_title(); ?></span>

              <?php
              wp_reset_query();
              endwhile; ?>

            </div>
          </div>
          <div class="icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>
