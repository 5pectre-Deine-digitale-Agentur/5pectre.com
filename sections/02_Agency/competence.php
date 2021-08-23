<?php if( have_rows('competence') ):
  while( have_rows('competence') ): the_row();?>

  <section id="competence" class="agency" data-scroll-section>
    <div class="wrapper">

      <div class="competence" data-scroll data-scroll-speed="0">
        <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
      </div>

      <div class="competence-listing">
        <div class="grid-right">

          <?php if( have_rows('items') ):
            while( have_rows('items') ): the_row();?>

          <div class="item" data-scroll data-scroll-speed="-0.5">
            <h3 class="heading"><?php echo get_sub_field('titel') ?></h3>
          </div>
          <div class="item" data-scroll data-scroll-speed="0.3">
            <span class="large-text"><?php echo get_sub_field('text') ?></span>
          </div>

          <?php endwhile; ?>
        <?php endif; ?>

        </div>
      </div>

    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
