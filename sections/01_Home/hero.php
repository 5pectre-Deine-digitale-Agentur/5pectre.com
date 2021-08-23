<?php if( have_rows('hero') ):
  while( have_rows('hero') ): the_row();

  $punchline = get_sub_field('punchline');
  $mission = get_sub_field('mission');
  ?>

<?php if( get_sub_field('punchline') or get_sub_field('mission') or get_sub_field('image')): ?>

<section id="hero" class="front-page" data-scroll-section>
  <div class="wrapper">

    <?php if( get_sub_field('punchline') ): ?>
    <div class="title" data-scroll data-scroll-speed="-1">
      <h1 class="heading"><?php echo get_sub_field('punchline') ?></h1>
    </div>
    <?php endif; ?>

    <?php if( get_sub_field('mission') ): ?>
    <div class="mission" data-scroll data-scroll-speed="0.5">
      <span class="large-text"><?php echo get_sub_field('mission') ?></span>
    </div>
    <?php endif; ?>

  </div>

  <?php
$image = get_sub_field('image');
if( !empty( $image ) ): ?>
  <div class="hero-image">
    <img data-scroll src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
  </div>
  <?php endif; ?>

</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
