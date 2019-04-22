<?php
/**
 * Шаблон подвала (footer.php)
 * @package SkifComputers
 * @subpackage S
 */
?>
<?
if(isset($_POST['tion'])){

    $post=$_POST['zac'];
echo the_ID(),post_class();
    }?>
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>
	<footer>
        
               <!--Верхняяя часть шапки-->
	
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
        
        
        
<nav class="navbar navbar-expand-lg navbar-light bg-light">    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""><i class="fas fa-american-sign-language-interpreting"></i></span>
  </button>
    

    
    
    
    
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">    

      
      
      
      
      
				<div class="col-md-12">
                    <div class="row">
					<?php $args = array(
						'theme_location' => 'top',
						'container'=> false,
						'menu_class' => 'navbar-nav mr-auto sd',
				  		'menu_id' => 'top-nav',
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args);
					?>
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
    
    <input  placeholder="ТЕКСТ" class="vidvig_knop" name="zac">
             <button type="submit" name="tion" class="submint user48123801">
                    <i class="fas fa-search"></i>
                </button>
     </div>
    </form>
                    
                    
                    </div>
                    
				</div>


      
      </div>
    


        </nav>

        
	</footer>
<?php wp_footer(); ?>
</body>
</html>
