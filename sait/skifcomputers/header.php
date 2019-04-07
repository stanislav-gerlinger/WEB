<?php
/**
 * Шаблон шапки (header.php)
 * @package SkifComputers
 * @subpackage S
 */
?>
<!DOCTYPE html>
<?
if(isset($_POST['tion']))
{
   echo $_POST['zac'];
    
}

?>
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
                   <p><a href="https://www.whatsapp.com/">WhatsApp</a><a href="https://telegram.org/">Telegram</a><p>
                </div>
               <div class="sm-flex-2 user48123801"> 
               <img src="<?=get_template_directory_uri()?>/img/logotip.jpg" alt="это вроде как логотип">             
                </div>            
                <div class="sm-flex-3 user48123801"> 
                    <a>Зарегистрироваться</a>/<a>Войти</a>
                </div>
            </div>
		</div>
        
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""><i class="fas fa-american-sign-language-interpreting"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto sd">
        <li class="fer"><a href="#">NEW</a></li>
                    <li class="fer"><a href="#">Для неё</a></li>
                    <li class="fer"><a href="#">Для него</a></li>
                    <li class="fer"><a href="#">Для детей</a></li>
                    <li class="fer"><a href="#">Журнал</a></li>
                    <li class="fer"><a href="#">SALE</a></li>
                    <li class="fer"><a href="#">О магазине</a></li>
                    <li class="fer"><a href="#">Помощь</a></li>
                    <li class="fer"><a href="#">Контакты</a></li> 
    </ul>
      
      
                       <ul class="end user48123801">
                     <li class="fer user48123801"><a href="https://www.instagram.com/?hl=ru"><i class="fab fa-instagram"></i></a></li>
                    <li class="fer user48123801"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="fer user48123801"><a href="https://www.pinterest.ru/"><i class="fab fa-pinterest-p"></i></a></li>
                    <li class="fer user48123801"><a href="https://twitter.com/?lang=ru"><i class="fab fa-twitter"></i></a></li>
                    <li class="fer user48123801"><a href="https://vk.com/"><i class="fab fa-vk"></i></a></li>
                    <li class="fer user48123801"><a href="https://accounts.google.com/signin/v2/"><i class="fab fa-google-plus-g"></i></a></li>                
                </ul> 
                      
 <form class="form-inline my-2 my-lg-0" method="post" action="index.php">
<div class="knopka user48123801">
    
    <input  placeholder="тут" name="zac">
             <button type="submit" name="tion" class="submint user48123801">
                    <i class="fas fa-search"></i>
                </button>
     </div>
    </form>

      
               </div>
      
      
      
      
  
</nav>
	</header>