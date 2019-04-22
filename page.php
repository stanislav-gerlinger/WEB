<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package SkifComputers
 * @subpackage S
 */
get_header(); ?>
<? $post=56;?>
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php 5; ?>" <?php post_class(); ?>>//
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