<?php
/**
 * The template part for header
 *
 * @package VW Bakery 
 * @subpackage vw_bakery
 * @since VW Bakery 1.0
 */
?>

<div id="header">
  <div class="container">
    <div class="bg-header-box">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="nav primary-left">
            <?php wp_nav_menu( array('theme_location'  => 'primary-left') ); ?>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 col-12 logo_static">
          <div class="logo_outer_box">
            <div class="logo_outer">
              <div class="logo">
                <?php if( has_custom_logo() ){ vw_bakery_the_custom_logo();
                }else{ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
                  <?php $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo esc_html($description); ?></p>
                <?php endif; } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-11">
          <div class="nav primary-right">
            <?php wp_nav_menu( array('theme_location'  => 'primary-right') ); ?>
          </div>
        </div>
        <div class="search-box col-lg-1 col-md-1">
          <span><i class="fas fa-search"></i></span>
        </div>
      </div>
    </div>
  </div>
  <div class="serach_outer">
    <div class="closepop"><i class="far fa-window-close"></i></div>
    <div class="serach_inner">
      <?php get_search_form(); ?>
    </div>
  </div>
</div>