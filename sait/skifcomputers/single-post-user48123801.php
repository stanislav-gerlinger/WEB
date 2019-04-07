<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package SkifComputers
 * @subpackage S
 */
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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
