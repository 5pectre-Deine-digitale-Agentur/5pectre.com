<!--
			TODO: Navigation Desktop
			TODO: Navigation Mobil/Tablet
			TODO: MetaTags für Google und Facebook
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

		<!-- Enque Header -->
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<?php include 'sections/navigation.php';?>
