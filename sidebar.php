<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package SkifComputers
 * @subpackage S
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { ?>
<aside class="col-sm-3">
    <? $post=56;?>
	<?php dynamic_sidebar('sidebar'); ?>
</aside>
<?php } ?>