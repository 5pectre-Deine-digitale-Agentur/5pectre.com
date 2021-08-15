<?php if( have_rows('testimonials') ):
  while( have_rows('testimonials') ): the_row();

  $testimonial = get_sub_field('testimonial');
  $name = get_sub_field('name');
  $position = get_sub_field('position');
  ?>

  <section id="testimonial" class="single">
    <div class="wrapper">
      <div class="testimonial">
        <p class="large-text"><?php echo $testimonial; ?></p>
        <h4 class="heading"><?php echo $name; ?></h4>
        <p><?php echo $position ?></p>
      </div>
    </div>
  </section>


  <?php endwhile; ?>
<?php endif; ?>
