<?php
/**
 * Шаблон шапки (header.php)
 * @package SkifComputers
 * @subpackage S
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="container-fluid bg-primary">
		<div class="row">
			<div class="header-top">
				<div class="col-md-2">
					<span class="header_descr">WhatsApp Telegram</span>
				</div>
				<div class="col-md-2 col-md-offset-8">
					<a href="#" class="registration">Зарегистрироваться / Войти</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<nav class="navbar">
					<div class="collapse navbar-collapse">
						<?php $args = array( 
							'theme_location' => 'top',
							'container'=> false,
					  		'menu_id' => 'top-nav-ul',
					  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
							'menu_class' => 'top-menu',
					  		'walker' => new bootstrap_menu(true)		  		
				  			);
							wp_nav_menu($args);
							?>
					</div>
				</nav>
			</div>
			<div class="col-md-3 col-md-offset-3">
				<nav class="navbar">
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fab fa-telegram"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-vk"></i></a></li>
						</ul>
					</div>	
				</nav>

			</div>
		</div>
	</header>

	<?php
/*
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( 
								'theme_location' => 'top',
								'container'=> false,
						  		'menu_id' => 'top-nav-ul',
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu',
						  		'walker' => new bootstrap_menu(true)		  		
					  			);
								wp_nav_menu($args);
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>


*/

	?>