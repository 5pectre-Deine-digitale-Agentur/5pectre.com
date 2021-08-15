<?php if( have_rows('team') ):
  while( have_rows('team') ): the_row();?>

    <?php $item = have_rows('item');
      if( get_sub_field('titel') or !empty( $item )): ?>

      <section id="team" class="agency" data-scroll-section>
        <div class="grid-container">
          <main class="grid-item main" id="slide">
            <div class="items">

              <?php if( have_rows('item') ):
                $post_count = 1;
                while( have_rows('item') ): the_row(); ?>

                  <?php if( get_sub_field('name') or get_sub_field('position')): ?>

                    <div class="item item<?php echo $post_count++ ?>">
                      <?php
                          $image = get_sub_field('image');
                          if( !empty( $image ) ): ?>
                        <img class="img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                      <?php endif; ?>

                      <div class="data">

                        <?php if( get_sub_field('name') ): ?>
                          <span class="highlight"><?php echo get_sub_field('name') ?></span>
                        <?php endif; ?>

                        <?php if( get_sub_field('position') ): ?>
                          <span><?php echo get_sub_field('position') ?></span>
                        <?php endif; ?>

                      </div>
                    </div>

                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </main>
        </div>


        <?php if( get_sub_field('titel') ): ?>
          <div class="special-title">
            <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
          </div>
        <?php endif; ?>

      </section>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
