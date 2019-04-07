<?php
/**
 * Шаблон подвала (footer.php)
 * @package SkifComputers
 * @subpackage S
 */
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $args = array(
						'theme_location' => 'bottom',
						'container'=> false,
						'menu_class' => 'nav nav-pills bottom-menu',
				  		'menu_id' => 'bottom-nav',
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args);
					?>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
