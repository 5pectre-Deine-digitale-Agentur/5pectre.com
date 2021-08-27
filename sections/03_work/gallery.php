<?php if( have_rows('gallery') ):
  while( have_rows('gallery') ): the_row();

  $value = get_sub_field('section_type');
  $images = get_sub_field('gallery');
  ?>
  <section id="gallery" class="single" data-scroll-section>
    <div class="wrapper">
      <!--
      Das wird ein Repeater

      Ich möchte mir hier gerne aussuchen können, welchen der beiden Blöcke ich im Repeater verwenden möchte.
      -->

      <?php if( get_sub_field('section_type') == 'Bild' ) {
        if ( have_rows('item') ):
            while( have_rows('item') ): the_row();

            $img = get_sub_field('image');
            $text = get_sub_field('text');?>

            <div class="gallery-item">
              <div class="item__container" data-scroll data-scroll-speed="-0.5" style="background: <?php echo the_field('ci_color'); ?>">
                <img class="img-item" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
              </div>

              <p class="large-text"><?php echo $text ?></p>
            </div>

            <?php endwhile; ?>
          <?php endif;
        } elseif (get_sub_field('section_type') == 'Galerie') { ?>
          <div class="gallery-item">
            <div class="gallery-grid">
              <?php $text = get_sub_field('text'); ?>
              <?php if( $images ): ?>
                <?php foreach( $images as $image ): ?>

                  <div class="item" data-scroll data-scroll-speed="-0.5" style="background: <?php echo the_field('ci_color'); ?>">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  </div>

                <?php endforeach; ?>
              <?php endif; ?>

            </div>
            <p class="large-text" data-scroll><?php echo $text ?></p>
          </div>
      <?php  } else {
        echo "";
      }?>


      <!-- <div class="gallery-item">
        <div class="gallery-grid">
          <div class="item">
            <img src="https://www.popwebdesign.de/popart_blog/de/wp-content/uploads/2019/02/Webdesign-trends-fuerr-2019-757x757.jpg" alt="">
          </div>
          <div class="item">
            <img src="https://www.popwebdesign.de/popart_blog/de/wp-content/uploads/2019/02/Webdesign-trends-fuerr-2019-757x757.jpg" alt="">
          </div>
          <div class="item">
            <img src="https://www.popwebdesign.de/popart_blog/de/wp-content/uploads/2019/02/Webdesign-trends-fuerr-2019-757x757.jpg" alt="">
          </div>
          <div class="item">
            <img src="https://www.popwebdesign.de/popart_blog/de/wp-content/uploads/2019/02/Webdesign-trends-fuerr-2019-757x757.jpg" alt="">
          </div>
        </div>
        <p class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div> -->
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
