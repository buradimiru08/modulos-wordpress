<?php

/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function modulo_slider() {
    	$labels = array(
        'name'                  => _x( 'sliders', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'slider', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'sliders', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'slider', 'Agregar nuevo on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Agregar nuevo slider', 'textdomain' ),
        'add_new_item'          => __( 'Agregar nuevo item de slider', 'textdomain' ),
        'new_item'              => __( 'Nuevo slider', 'textdomain' ),
        'edit_item'             => __( 'Editar slider', 'textdomain' ),
        'view_item'             => __( 'Ver slider', 'textdomain' ),
        'all_items'             => __( 'Todos sliders', 'textdomain' ),
        'search_items'          => __( 'buscar en los sliders', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent sliders:', 'textdomain' ),
        'not_found'             => __( 'No se encontraron sliders.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No se encontraron sliders en la basura.', 'textdomain' ),
        'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Aplicar slider cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remover slider cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Usar como imagen de portada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Archivos de slider', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insertar slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Subir esto al slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filtar lista de sliders', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders lista de navegacion', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-open-folder', 
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
 
    register_post_type( 'slider', $args );
}
 
add_action( 'init', 'modulo_slider' );