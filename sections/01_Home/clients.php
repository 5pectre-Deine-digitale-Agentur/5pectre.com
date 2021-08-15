<?php if( have_rows('clients') ):
  while( have_rows('clients') ): the_row();

  $title = get_sub_field('title');
  $images = get_sub_field('client');
  ?>

    <section id="clients" class="front-page" data-scroll-section>
      <div class="wrapper">
        <div class="title">
          <h2 class="heading" data-scroll><?php echo $title ?></h2>
        </div>
        <div class="grid">

          <?php if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="item">
                <img data-scroll src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

        </div>

        <div class="show-more accordeon">
          <div class="client-list">
            <div class="grid">

              <?php if( have_rows('client_list') ):
                while( have_rows('client_list') ): the_row();

                $client = get_sub_field('client_name');
                ?>

                  <span class="client"><?php echo $client; ?></span>

                  <?php endwhile;
                endif; ?>

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
