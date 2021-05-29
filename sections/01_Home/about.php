<?php if( have_rows('about') ):
  while( have_rows('about') ): the_row();?>

<?php if( get_sub_field('titel') or get_sub_field('text')): ?>

<section id="about" class="front-page">
  <div class="wrapper">

    <?php if( get_sub_field('titel') ): ?>
      <div class="section-title">
        <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
      </div>
    <?php endif; ?>

    <?php if( get_sub_field('text') ): ?>
      <div class="about">
        <span class="large-text">
        <?php echo get_sub_field('text') ?>
        </span>
      </div>
    <?php endif; ?>

    <a class="button link" href="#">
      <div class="icon">
      </div>
      <span class="button-content">Button</span>
    </a>
  </div>
</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
