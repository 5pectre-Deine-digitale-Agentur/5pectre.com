<?php if( have_rows('competence') ):
  while( have_rows('competence') ): the_row();?>

  <?php $item = have_rows('item');
   if( get_sub_field('titel') or !empty( $item )): ?>

<section id="competence" class="agency">
  <div class="wrapper">

    <!-- Keine Ahnung warum das jetzt nicht angezeigt wird -->

    <?php if( get_sub_field('titel') ): ?>

      <div class="competence">
        <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
      </div>

    <?php endif; ?>

    <?php $item = have_rows('item');
     if( !empty( $item )): ?>

    <div class="competence-listing">
      <div class="grid-right">

        <?php if( have_rows('item') ):
          while( have_rows('item') ): the_row();?>

        <?php if( get_sub_field('titel') or get_sub_field('text')): ?>

        <div class="item">
          <h3 class="heading"><?php echo get_sub_field('titel') ?></h3>
        </div>
        <div class="item">
          <span class="large-text"><?php echo get_sub_field('text') ?></p>
        </div>

      <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>

      </div>
    </div>

  <?php endif; ?>

  </div>
</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
