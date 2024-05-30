<?php
/*
    Plugin Name: SQLGym - Post Types
    Plugin URI: 
    Description: Añade Post Types al sitio SQLGym
    Version: 1.0.0
    Author: Guillermo, Leonardo, Johann
    Author URI: 
    Text Domain: SQLGym
*/
 


if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function sqlgym_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'sqlgym' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'sqlgym' ),
		'menu_name'             => __( 'Clases', 'sqlgym' ),
		'name_admin_bar'        => __( 'Clase', 'sqlgym' ),
		'archives'              => __( 'Archivo', 'sqlgym' ),
		'attributes'            => __( 'Atributos', 'sqlgym' ),
		'parent_item_colon'     => __( 'Clase Padre', 'sqlgym' ),
		'all_items'             => __( 'Todas Las Clases', 'sqlgym' ),
		'add_new_item'          => __( 'Agregar Clase', 'sqlgym' ),
		'add_new'               => __( 'Agregar Clase', 'sqlgym' ),
		'new_item'              => __( 'Nueva Clase', 'sqlgym' ),
		'edit_item'             => __( 'Editar Clase', 'sqlgym' ),
		'update_item'           => __( 'Actualizar Clase', 'sqlgym' ),
		'view_item'             => __( 'Ver Clase', 'sqlgym' ),
		'view_items'            => __( 'Ver Clases', 'sqlgym' ),
		'search_items'          => __( 'Buscar Clase', 'sqlgym' ),
		'not_found'             => __( 'No Encontrado', 'sqlgym' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'sqlgym' ),
		'featured_image'        => __( 'Imagen Destacada', 'sqlgym' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'sqlgym' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'sqlgym' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'sqlgym' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'sqlgym' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'sqlgym' ),
		'items_list'            => __( 'Lista de Clases', 'sqlgym' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'sqlgym' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'sqlgym' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'sqlgym' ),
		'description'           => __( 'Clases para el Sitio Web', 'sqlgym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sqlgym_clases', $args );

}
add_action( 'init', 'sqlgym_clases_post_type', 0 );

// Instructores Custom Post Type
function sqlgym_instructores_post_type() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'sqlgym' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'sqlgym' ),
		'menu_name'             => __( 'Instructores', 'sqlgym' ),
		'name_admin_bar'        => __( 'Instructor', 'sqlgym' ),
		'archives'              => __( 'Archivo', 'sqlgym' ),
		'attributes'            => __( 'Atributos', 'sqlgym' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'sqlgym' ),
		'all_items'             => __( 'Todas Las Instructores', 'sqlgym' ),
		'add_new_item'          => __( 'Agregar Instructor', 'sqlgym' ),
		'add_new'               => __( 'Agregar Instructor', 'sqlgym' ),
		'new_item'              => __( 'Nueva Instructor', 'sqlgym' ),
		'edit_item'             => __( 'Editar Instructor', 'sqlgym' ),
		'update_item'           => __( 'Actualizar Instructor', 'sqlgym' ),
		'view_item'             => __( 'Ver Instructor', 'sqlgym' ),
		'view_items'            => __( 'Ver Instructores', 'sqlgym' ),
		'search_items'          => __( 'Buscar Instructor', 'sqlgym' ),
		'not_found'             => __( 'No Encontrado', 'sqlgym' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'sqlgym' ),
		'featured_image'        => __( 'Imagen Destacada', 'sqlgym' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'sqlgym' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'sqlgym' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'sqlgym' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'sqlgym' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'sqlgym' ),
		'items_list'            => __( 'Lista de Instructores', 'sqlgym' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'sqlgym' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'sqlgym' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'sqlgym' ),
		'description'           => __( 'Instructores para el Sitio Web', 'sqlgym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'sqlgym_instructores_post_type', 0 );


function sqlgym_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'sqlgym' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'sqlgym' ),
		'menu_name'             => __( 'Testimoniales', 'sqlgym' ),
		'name_admin_bar'        => __( 'Testimonial', 'sqlgym' ),
		'archives'              => __( 'Archivo', 'sqlgym' ),
		'attributes'            => __( 'Atributos', 'sqlgym' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'sqlgym' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'sqlgym' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'sqlgym' ),
		'add_new'               => __( 'Agregar Testimonial', 'sqlgym' ),
		'new_item'              => __( 'Nueva Testimonial', 'sqlgym' ),
		'edit_item'             => __( 'Editar Testimonial', 'sqlgym' ),
		'update_item'           => __( 'Actualizar Testimonial', 'sqlgym' ),
		'view_item'             => __( 'Ver Testimonial', 'sqlgym' ),
		'view_items'            => __( 'Ver Testimoniales', 'sqlgym' ),
		'search_items'          => __( 'Buscar Testimonial', 'sqlgym' ),
		'not_found'             => __( 'No Encontrado', 'sqlgym' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'sqlgym' ),
		'featured_image'        => __( 'Imagen Destacada', 'sqlgym' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'sqlgym' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'sqlgym' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'sqlgym' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'sqlgym' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'sqlgym' ),
		'items_list'            => __( 'Lista de Testimoniales', 'sqlgym' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'sqlgym' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'sqlgym' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'sqlgym' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'sqlgym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'sqlgym_testimoniales_post_type', 0 );

