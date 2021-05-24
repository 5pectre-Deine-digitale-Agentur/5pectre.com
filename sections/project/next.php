<?php
$featured_posts = get_field('next');
if( $featured_posts ): ?>
<?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
<section id="next">
  <div data-url="<?php the_permalink(); ?>" class="wrapper link">
    <div class="grid">
      <div class="left">
        <img src="<?php echo the_field('teaser');?>" alt="">
      </div>
      <div class="right">
        <div class="content">

          <?php if( have_rows('info') ): ?>
            <?php while( have_rows('info') ): the_row(); ?>
              <div class="meta">Nächstes Project</div>
              <h2><?php echo the_sub_field('client');?></h2>
            <?php endwhile;?>
          <?php endif;?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
