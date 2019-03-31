<?php
/**
 * Страница архивов записей (archive.php)
 * @package SkifComputers
 * @subpackage S
 */
get_header(); ?> 
<section>
	<div class="user63447817 container-fluid">
		<div class="user63447817 row">
			<div class="user63447817 col-md-8">
				<div class="user63447817 container-fluid">
					<h2>Записи</h2>
					<div class="user63447817 row">
							<div class="user63447817 <?php content_class_by_sidebar(); ?>">
								<h1><?php // заголовок архивов
									if (is_day()) : printf('Daily Archives: %s', get_the_date());
									elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y'));
									elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y'));
									else : 'Archives';
								endif; ?></h1>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php get_template_part('loop', 'post-user63447817'); ?>
								<?php endwhile;
								else: echo '<p>Нет записей.</p>'; endif; ?>	 
								<?php pagination(); ?>
							</div>
					</div>
				</div>
			</div>
			<div class="user63447817 col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>