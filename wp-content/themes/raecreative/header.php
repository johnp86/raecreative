<!DOCTYPE html>
<html>
	<head>
		<!--[if lt IE 9]>
		     <script type="text/javascript" src="js/iefix.js"></script>
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/phone.css" media="screen and (max-width: 768px)" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/tabet.css" media="only screen and (min-width: 769px) and (max-width: 1200px)" />
		<title><?php bloginfo("name") ?> | <?php the_title() ?></title>
		<?php wp_head(); ?>	
		
	</head>
	<body id="<?php the_title() ?>">
		<div id="wrapper">
			<header>
				<!--<h1>RaeCreative</h1>-->
				<a href="/"><h1><img src="<?php bloginfo('template_directory'); ?>/images/FINAL_LOGO_Type1.png" /></h1></a>
				<nav class="main_nav">
					<?php wp_nav_menu (array('theme_location' => 'primary-menu','menu_class' => 'nav'));?>
					<?php 
						$children = get_pages('child_of='.$post->ID);
						if($children){
							wp_nav_menu (array('theme_location' => 'secondary-menu','menu_class' => 'second-tier'));
						}
					?>
				</nav>
			</header>