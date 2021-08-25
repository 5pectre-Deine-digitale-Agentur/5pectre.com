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
    <video data-scroll src="<?php echo esc_url($image['url']); ?>" autoplay=true controls poster="vorschaubild.jpg">
      Dies Video kann in Ihrem Browser nicht wiedergegeben werden.<br>
      Eine Download-Version steht unter <a href="URL">Link-Addresse</a> zum Abruf bereit.
    </video>
  </div>
  <?php endif; ?>

</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
