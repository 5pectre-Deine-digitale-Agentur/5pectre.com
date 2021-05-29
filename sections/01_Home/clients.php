<?php if( have_rows('clients') ):
  while( have_rows('clients') ): the_row();?>

<?php $client = have_rows('client');
 if( get_sub_field('titel') or !empty( $client )): ?>

    <section id="clients" class="front-page">
      <div class="wrapper">
        <div class="title">
          <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
        </div>
        <div class="grid">

          <?php if( have_rows('client') ):
            while( have_rows('client') ): the_row();?>

          <?php if( get_sub_field('image')): ?>

          <?php
              $image = get_sub_field('image');
              if( !empty( $image ) ): ?>
          <div class="item">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>
          <?php endif; ?>

          <?php endif; ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="show-more accordeon">
          <div class="client-list">
            <div class="grid">

              <?php if( have_rows('client') ):
                while( have_rows('client') ): the_row();?>

              <?php if( get_sub_field('namen')): ?>

              <span class="client"><?php echo get_sub_field('namen') ?></span>

              <?php endif; ?>
              <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>
          <div class="icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </div>
    </section>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
