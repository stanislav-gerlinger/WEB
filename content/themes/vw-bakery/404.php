<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Bakery
 */

get_header(); ?>
weqweqwe
<div id="content-vw">
	<div class="container">
    	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-bakery' ), esc_html__( 'Not Found', 'vw-bakery' ) ) ?></h1>
		<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-bakery' ); ?></p>
		<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-bakery' ); ?></p>
    	<a class="error-btn" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'Return to the home page', 'vw-bakery' ); ?></a>
		<div class="clearfix"></div>
	</div>
</div>
qweqweqwe
<?php get_footer(); ?>