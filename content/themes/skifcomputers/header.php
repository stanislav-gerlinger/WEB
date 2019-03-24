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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container user48123801">
			<div class="row user48123801">
               <div class="sm-flex-5 user48123801"> 
               <p>WhatsApp Telegram<p>
                </div>
               <div class="sm-flex-2 user48123801"> 
               <img src="<?php echo get_template_directory_uri(); ?>/pictyres/logotip.jpg" alt=""это вроде как логотип>             
                </div>            
                <div class="sm-flex-3 user48123801"> 
                    <a>Зарегистрироваться</a>/<a>Войти</a>
                </div>
            </div>
		</div>
        <div class="spisok user48123801">
        <div class="container user48123801">
			<div class="row user48123801">

                <ul class="start user48123801">
                    <li class="fer user48123801">NEW</li>
                    <li class="fer user48123801">Для неё</li>
                    <li class="fer user48123801">Для него</li>
                    <li class="fer user48123801">Для детей</li>
                    <li class="fer user48123801">Журнал</li>
                    <li class="fer user48123801">SALE</li>
                    <li class="fer user48123801">О магазине</li>
                    <li class="fer user48123801">Помощь</li>
                    <li class="fer user48123801">Контакты</li>           
                </ul>
                 <ul class="end user48123801">
                    <li class="fer user48123801"><i class="fab fa-instagram"></i></li>
                    <li class="fer user48123801"><i class="fab fa-facebook-f"></i></li>
                    <li class="fer user48123801"><i class="fab fa-pinterest-p"></i></li>
                    <li class="fer user48123801"><i class="fab fa-twitter"></i></li>
                    <li class="fer user48123801"><i class="fab fa-vk"></i></li>
                    <li class="fer user48123801"><i class="fab fa-google-plus-g"></i></li>                
                </ul>  
                <div class="knopka user48123801">
             <button class="submint user48123801">
                    <i class="fas fa-search"></i>
                </button>
                    </div>
            </div>
		</div>
        </div>
	</header>