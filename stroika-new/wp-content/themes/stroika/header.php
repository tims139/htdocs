<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<link href="<?php echo bloginfo('template_url'); ?>/css/layout.css" rel="stylesheet" type="text/css" media="screen">
		<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
		<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.placeholder.min.js" type="text/javascript"></script>
		<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.cycle.all.js" type="text/javascript"></script>
		<script src="<?php echo bloginfo('template_url'); ?>/js/props.js" type="text/javascript"></script>
		<!--[if lt IE 9]><script src="<?php echo bloginfo('template_url'); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
		<!--[if gte IE 9]><link href="<?php echo bloginfo('template_url'); ?>/css/ie9.css" rel="stylesheet" type="text/css" media="screen"><![endif]-->
	</head>
	<body>
		
		<div id="main_wrapper" class="brd4">

			<header class="as_table vmid site_header">
				<div class="as_td">
					<img src="<?php echo bloginfo('template_url'); ?>/img/site_logo.png">
				</div>
				<div class="as_td txt_right">
					<div class="search_container">
						<input type="text" placeholder="Поиск" class="search_form">
						<i class="icon-search"></i>
					</div>
				</div>
			</header>

			<nav class="site_menu brd4">
				<ul>
					<?php wp_nav_menu( array('menu' => 'Header Menu', 'container' => '', 'items_wrap' => '%3$s' )); ?>
				</ul>
			</nav>

			<section class="as_table middle">