<?php
/*
 * Esse arquivo organiza os CPTs e Taxonomias do tema,
 * para mais informações acesse: https://github.com/wpbrasil/odin/wiki/Classe-Odin_Post_Type
 */

/* Agenda */

/* Biblioteca */
$biblioteca = new Odin_Post_Type(
    'Biblioteca',
    'biblioteca' // Slug do Post Type.
);
$biblioteca->set_labels(
    array(
        'menu_name' => __( 'Biblioteca', 'odin' )
    )
);
$biblioteca->set_arguments(
    array(
        'supports' => array( 'title', 'editor', 'thumbnail' )
    )
);

if ( ! function_exists('brasa_custom_types') ) {

// Register Custom Post Type
function brasa_custom_types() {

	$labels = array(
		'name'                => _x( 'Agenda', 'Post Type General Name', 'odin' ),
		'singular_name'       => _x( 'Agenda', 'Post Type Singular Name', 'odin' ),
		'menu_name'           => __( 'Agenda', 'odin' ),
		'name_admin_bar'      => __( 'Agenda', 'odin' ),
		'parent_item_colon'   => __( 'Evento parente', 'odin' ),
		'all_items'           => __( 'Todos eventos', 'odin' ),
		'add_new_item'        => __( 'Adicionar novo Evento', 'odin' ),
		'add_new'             => __( 'Adicionar novo', 'odin' ),
		'new_item'            => __( 'Novo evento', 'odin' ),
		'edit_item'           => __( 'Editar evento', 'odin' ),
		'update_item'         => __( 'Atualizar Evento', 'odin' ),
		'view_item'           => __( 'Ver evento', 'odin' ),
		'search_items'        => __( 'Buscar Evento', 'odin' ),
		'not_found'           => __( 'Não encontrado', 'odin' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'odin' ),
	);
	$args = array(
		'label'               => __( 'agenda', 'odin' ),
		'description'         => __( 'Agenda de Eventos', 'odin' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-calendar-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'agenda', $args );

}

// Hook into the 'init' action
add_action( 'init', 'brasa_custom_types', 0 );

}
