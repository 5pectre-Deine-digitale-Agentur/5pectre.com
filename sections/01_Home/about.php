<?php if( have_rows('about') ):
  while( have_rows('about') ): the_row();?>

    <?php if( get_sub_field('titel') or get_sub_field('text')): ?>

    <section id="about" class="front-page" data-scroll-section>
      <div class="wrapper">

        <?php if( get_sub_field('titel') ): ?>
          <div class="section-title" data-scroll data-scroll-speed="0">
            <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
          </div>
        <?php endif; ?>

        <?php if( get_sub_field('text') ): ?>
          <div class="about" data-scroll data-scroll-speed="-0.3">
            <span class="large-text">
            <?php echo get_sub_field('text') ?>
            </span>
          </div>
        <?php endif; ?>

        <a class="button link" href="#" data-scroll data-scroll-speed="-0.3">
          <div class="icon">
            <i class="fas fa-chevron-right"></i>
          </div>
          <span class="button-content"><?php echo the_sub_field('button'); ?></span>
        </a>
      </div>
    </section>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
