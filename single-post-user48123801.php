<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package SkifComputers
 * @subpackage S
 */
get_header(); ?>
<section>
    <p><?=isset($_REQUEST['post_id']) ? $_REQUEST['post_id'] :  "" ?></p>
    <p><?=isset($_REQUEST['name']) ? $_REQUEST['name'] :  "" ?></p>
    <p><?=isset($_REQUEST['email']) ? $_REQUEST['email'] :  "" ?></p>
    <p><?=isset($_REQUEST['comment']) ? $_REQUEST['comment'] :  "" ?></p> 

    <?   
    $errors = [];
       // echo $_REQUEST['name'];strlen($_REQUEST['name'])
        
    if(isset($_REQUEST['email'])){
        $go=strlen($_REQUEST['email']);
    }
    else{
        $go="";
    }
    if(isset($_REQUEST['name'])){
        $ko=strlen($_REQUEST['name']);
    }
    else{
        $ko="";
    }
        
        
        
        
        
    if($ko < 3) {
        $errors['name'] = "Имя мало";
    }
    if($go < 3 || !preg_match("/[0-9a-z]+@[a-z]/", $_REQUEST['email'])) {
        $errors['email'] = "email некоректен";
    }

    if(empty($errors)) {
        
        $to      = 'malkina.irina.1999@gmail.com';
        $subject = 'Оформление заказа сайта';
        $message = [
            'test',
            'loop'
        ];
        $headers = [
            'From: webmaster@example.com',
            'X-Mailer: PHP/' . phpversion()
        ];
        
        $send = mail($to, $subject, implode("\r\n", $message), implode("\r\n", $headers));
        echo $send ? "Письмо отправлено" : "НЕ отправлено"; 
            
    }
    ?>
    <form action="" method="post">
        <p><input name="post_id" value="<? the_ID();?>" type="hidden" ></p>
        <p>
            <input name="name" placeholder="Введите имя"  value="<?=(isset($_REQUEST['name']) || isset($send)) ? $_POST['name'] :  "" ?>">
            <?=isset($errors['name']) ? $errors['name'] : ""?>     
        </p>
        
        <p>
            <input name="email" placeholder="Введите email" value="<?=(isset($_REQUEST['email']) || isset($send)) ? $_REQUEST['email'] :  "" ?>">
            <?=isset($errors['email']) ? $errors['email'] : ""?>   
        </p>
        <p><textarea name="comment"  placeholder="Введите комент"> </textarea></p>
        <p><button type="submit" >Отправить</button></p>
    </form>
</section>
<section>

	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
            
				<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
                        <div><? echo "<div class='krygok'></div><div class='kvadrat'></div><div class='oval'></div>"; ?></div>
						<div class="meta">
							<p>Опубликовано: <?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></p>
							<?php the_tags('<p>Тэги: ', ',', '</p>'); ?>
						</div>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
				<?php previous_post_link('%link', '<- Предыдущий пост: %title', TRUE); ?> 
				<?php next_post_link('%link', 'Следующий пост: %title ->', TRUE); ?> 
				<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
