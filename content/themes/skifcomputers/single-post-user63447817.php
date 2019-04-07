<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package SkifComputers
 * @subpackage S
 */
get_header(); ?>

<div class="user63447817 container">
		<div class="user63447817 row">
			<div class="user63447817 col-md-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="user63447817 single" <?php post_class(); ?>>
					<img src="<?php echo get_template_directory_uri()."/images/image.png"; ?>" alt="png">
					<div class="user63447817 descr">
						<h3><?php the_title(); ?></h3>
						<p>Автор:  <?php the_author_posts_link(); ?></p>
						<span>
							<?php the_content(); ?>
						</span>
					</div>
				</div>
			<?php endwhile; ?>
				<?php previous_post_link('%link', '<- Предыдущий пост: %title', TRUE); ?> 
				<?php next_post_link('%link', 'Следующий пост: %title ->', TRUE); ?> 
				<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>