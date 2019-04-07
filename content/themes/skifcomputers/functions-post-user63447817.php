<?php
add_action( 'init', 'register_post_type_user63447817' );
function register_post_type_user63447817(){
	register_post_type('post-user63447817', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Записи user63447817', // основное название для типа записи
			'singular_name'      => 'Запись user63447817', // название для одной записи этого типа
			'add_new'            => 'Добавить запись user63447817', // для добавления новой записи
			'add_new_item'       => 'Добавление записи user63447817', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи user63447817', // для редактирования типа записи
			'new_item'           => 'Новая запись user63447817', // текст новой записи
			'view_item'          => 'Смотреть запись user63447817', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись user63447817', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Записи user63447817', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	flush_rewrite_rules();
}
?>