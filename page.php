<?php
/*		STANDARDSEITENTEMPLATE

	*		TODO: Standardseitentemplate erstellen.
	* 	TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/
get_header(); ?>

<section id="page">
  <div class="wrapper">
    <div class="page grid">
      <div class="left-col">
        <div class="addition">
					<?php echo the_field('additional_information');?>
        </div>
      </div>
      <div class="right-col">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>

					<h2><?php _e( 'Sorry, nothing to display.', 'Spectreblank' ); ?></h2>

				<?php endif; ?>

      </div>
    </div>
		<div class="get-back">
			<a href="<?php echo get_home_url();?>" class="special-title">
				<h2>Home</h2>
				<h3>Zurück zur Startseite</h3>
				<svg xmlns="http://www.w3.org/2000/svg" width="236.36" height="81.489" viewBox="0 0 236.36 81.489">
				  <defs>
				    <style>
				      .cls-1 {
				        fill: none;
				        stroke: #fff;
				        stroke-width: 5px;
				      }
				    </style>
				  </defs>
				  <g id="Gruppe_202" data-name="Gruppe 202" transform="translate(-1188.076 -1913.261)">
				    <path id="Pfad_169" data-name="Pfad 169" class="cls-1" d="M13171.076,10178.011H13332.3l72.638,72.638v-72.638" transform="translate(-11983 -8262.25)"/>
				    <line id="Linie_26" data-name="Linie 26" class="cls-1" x1="69" transform="translate(1354.938 1992.25)"/>
				  </g>
				</svg>
			</a>
		</div>
  </div>
</section>

<?php get_footer(); ?>
