<!--
			TODO: Navigation Desktop
			TODO: Navigation Mobil/Tablet
			TODO: MetaTags für Google und Facebook
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<nav>
			<div class="wrapper">
				<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo_sh_light.svg" alt="">
						<p class="menu-link">Menu</p>
				</div>
				<div class="navigation">
					<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
				</div>
				<div class="notice">
					<p>Deine digitale<br>Agentur</p>
				</div>
			</div>
		</nav>

			<!-- header
			<section id="header" role="banner">
				<div class="w-wrapper">
					logo
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img" width="300px">
						</a>
					</div>
					/logo

					nav
					<nav class="nav" role="navigation">
						<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
					</nav>
					/nav
				</div>
			</section>
			 /header -->
