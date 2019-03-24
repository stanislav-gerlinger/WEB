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

	<header class="user63447817 container-fluid bg-primary">
		<div class="user63447817 row">
			<div class="user63447817 header-top">
				<div class="user63447817 col-md-2">
					<span class="user63447817 header_descr">WhatsApp Telegram</span>
				</div>
				<div class="user63447817 col-md-2 col-md-offset-8">
					<a href="#" class="user63447817 registration">Зарегистрироваться / Войти</a>
				</div>
			</div>
		</div>

		<div class="user63447817 row">
			<div class="user63447817 col-md-6">
				<nav class="user63447817 navbar">
					<div class="user63447817 collapse navbar-collapse">
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
			<div class="user63447817 col-md-3 col-md-offset-3">
				<nav class="user63447817 navbar">
					<div class="user63447817 collapse navbar-collapse">
						<ul class="user63447817 nav navbar-nav">
							<li><a href="#"><i class="user63447817 fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="user63447817 fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="user63447817 fa fa-telegram"></i></a></li>
							<li><a href="#"><i class="user63447817 fa fa-google-plus-official"></i></a></li>
							<li><a href="#"><i class="user63447817 fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="user63447817 fa fa-vk"></i></a></li>
						</ul>
					</div>	
				</nav>

			</div>
		</div>
	</header>