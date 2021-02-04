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
						<p class="menu-link">
							<svg class="ham hamRotate" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
							  <path
							        class="line top"
							        d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
							  <path
							        class="line middle"
							        d="m 30,50 h 40" />
							  <path
							        class="line bottom"
							        d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
							</svg>
						</p>
				</div>
				<div class="navigation">
					<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
				</div>
				<div class="notice">
					<p>Deine digitale<br>Agentur</p>
				</div>
			</div>
		</nav>

		<div class="nav" id="main-nav">
			<div class="grid">
				<div class="left-nav">
					<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
				</div>
				<div class="right-nav">
					<div class="imprint">
						<h5>Location</h5>
						<p>Am Wasserwerk 2<br>25355 Barmstedt</p>
						<div class="imprint-menu">
							<ul>
								<li><a href="#">Skillz</a></li>
								<li><a href="#">Projektanfrage</a></li>
								<li><a href="#">Partner</a></li>
								<li><a href="#" class="active">Jetzt transformieren</a></li>
								<li><a href="#">Karriere</a></li>
							</ul>
						</div>
						<div class="imprint-nav">
							<ul>
								<li><a href="#">Impressum</a></li>
								<li><a href="#">Datenschutz</a></li>
								<li><a href="#">AGB</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

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
