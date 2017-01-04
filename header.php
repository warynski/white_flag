<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="White Flag Appareal">
		<meta name="author" content="Bodep">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<?php wp_head(); ?>
<!-- 		<link rel="stylesheet" type="text/css" href="fonts/font.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script> -->
	</head>
<body<?php body_class(); ?>>
	<header>
		<nav class="navbar">
			<div class="container-fluid">
				<div class="nav-logo">
					<a class="navbar-brand wf-logo" href="#"><img src="img/logo.png"></a>
				</div>
				<div>
				    <?php wp_nav_menu()?>
				</div>
			</div>
		</nav>
	</header>