<?php
/**
 * The template part for displaying grid post
 *
 * @package VW Bakery
 * @subpackage vw-bakery
 * @since VW Bakery 1.0
 */
?>
<div class="col-lg-4 col-md-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail()) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>      
	        <div class="new-text">
	          	<?php the_excerpt();?>
	        </div>
	        <a class="content-bttn" href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More','vw-bakery' ); ?>"><?php esc_html_e('READ MORE','vw-bakery'); ?></a>
	    </div>
	    <div class="clearfix"></div>
  	</div>
</div>