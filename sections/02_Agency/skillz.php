<?php if( have_rows('skillz') ):
  while( have_rows('skillz') ): the_row();?>


  <section id="skillz" class="agency" data-scroll-section>
    <div class="wrapper">

      <?php if( get_sub_field('titel') ): ?>

        <div class="skill-title" data-scroll data-scroll data-scroll-speed="-0.5">
          <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
        </div>

      <?php endif; ?>

      <?php if( have_rows('skill') ):
        while( have_rows('skill') ): the_row();?>

          <div class="skill-row">
            <div class="skill-container accordeon">
              <div class="skill-preview">
                <h3 data-scroll class="heading"><?php echo get_sub_field('titel') ?></h3>
              </div>
              <div class="skill-content">
                <span data-scroll class="large-text"><?php echo get_sub_field('text') ?></span>
              </div>
            </div>
            <div class="show-more">
              <div class="icon">
                <i class="fas fa-chevron-down"></i>
              </div>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>


  <?php endwhile; ?>
<?php endif; ?>
