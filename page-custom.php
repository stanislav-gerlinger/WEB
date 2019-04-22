<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package SkifComputers
 * @subpackage S
 * Template Name: Страница с кастомным шаблоном
 */
get_header(); ?>
<? $post=56;?>
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>