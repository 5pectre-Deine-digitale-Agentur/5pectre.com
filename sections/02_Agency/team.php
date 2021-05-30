<?php if( have_rows('team') ):
  while( have_rows('team') ): the_row();?>

    <?php $item = have_rows('item');
      if( get_sub_field('titel') or !empty( $item )): ?>

      <section id="team" class="agency">
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
<<<<<<< HEAD
        <div class="item item4">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/ressources/01_Team/erik.png" alt="">
          <div class="data">
            <span class="highlight">Erik</span>
            <span>Geschäftsführer</span>
          </div>
        </div>
        <div class="item item5">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/ressources/01_Team/roman.png" alt="">
          <div class="data">
            <span class="highlight">Roman</span>
            <span>Entwickler</span>
          </div>
        </div>
        <div class="item item6">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/ressources/01_Team/schnabel.png" alt="">
          <div class="data">
            <span class="highlight">Schnabel</span>
            <span>Entwickler</span>
          </div>
        </div>
      </div>
    </main>
  </div>
  <div class="special-title">
    <h2 class="heading">Dein Team</h2>
  </div>
</section>
=======

        <?php if( get_sub_field('titel') ): ?>
          <div class="special-title">
            <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
          </div>
        <?php endif; ?>

      </section>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
>>>>>>> e0ac595d146e525804128bca0c1744e8a1049018
