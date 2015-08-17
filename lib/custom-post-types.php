<?php

// Register AWP Sponsors CPT
function awp_sponsor_cpt() {

	$labels = array(
		'name'                => _x( 'Sponsors', 'Post Type General Name', 'awp15' ),
		'singular_name'       => _x( 'Sponsor', 'Post Type Singular Name', 'awp15' ),
		'menu_name'           => __( 'Sponsors', 'awp15' ),
		'name_admin_bar'      => __( 'Sponsors', 'awp15' ),
		'parent_item_colon'   => __( 'Parent Item:', 'awp15' ),
		'all_items'           => __( 'All Items', 'awp15' ),
		'add_new_item'        => __( 'Add New Item', 'awp15' ),
		'add_new'             => __( 'Add New', 'awp15' ),
		'new_item'            => __( 'New Item', 'awp15' ),
		'edit_item'           => __( 'Edit Item', 'awp15' ),
		'update_item'         => __( 'Update Item', 'awp15' ),
		'view_item'           => __( 'View Item', 'awp15' ),
		'search_items'        => __( 'Search Item', 'awp15' ),
		'not_found'           => __( 'Not found', 'awp15' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'awp15' ),
	);
	$args = array(
		'label'               => __( 'Sponsor', 'awp15' ),
		'description'         => __( 'AWP Sponsors', 'awp15' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'awp_sponsor', $args );

}
add_action( 'init', 'awp_sponsor_cpt', 0 );
