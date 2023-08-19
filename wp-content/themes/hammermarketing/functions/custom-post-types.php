<?php
//ADD CUSTOM POST TYPE FOR INSIGHTS


// // Register Custom Post Type
function teams() {
	
	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'teams' ),
		'singular_name'         => _x( 'Team member', 'Post Type Singular Name', 'teams' ),
		'menu_name'             => __( 'Team', 'teams' ),
		'name_admin_bar'        => __( 'teams', 'teams' ),
		'archives'              => __( 'Item Archives', 'teams' ),
		'attributes'            => __( 'Item Attributes', 'teams' ),
		'parent_item_colon'     => __( 'Parent Item:', 'teams' ),
		'all_items'             => __( 'All Team Posts', 'teams' ),
		'add_new_item'          => __( 'Add New Team Member', 'teams' ),
		'add_new'               => __( 'Add Team Member', 'teams' ),
		'new_item'              => __( 'New Team Member', 'teams' ),
		'edit_item'             => __( 'Edit Team Member', 'teams' ),
		'update_item'           => __( 'Update Team Member', 'teams' ),
		'view_item'             => __( 'View Team Member', 'teams' ),
		'view_items'            => __( 'View Teams', 'teams' ),
		'search_items'          => __( 'Search Item', 'teams' ),
		'not_found'             => __( 'Not found', 'teams' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'teams' ),
		'featured_image'        => __( 'Featured Image', 'teams' ),
		'set_featured_image'    => __( 'Set featured image', 'teams' ),
		'remove_featured_image' => __( 'Remove featured image', 'teams' ),
		'use_featured_image'    => __( 'Use as featured image', 'teams' ),
		'insert_into_item'      => __( 'Insert into item', 'teams' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'teams' ),
		'items_list'            => __( 'Items list', 'teams' ),
		'items_list_navigation' => __( 'Items list navigation', 'teams' ),
		'filter_items_list'     => __( 'Filter items list', 'teams' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'teams' ),
		'description'           => __( 'Custom Post type for team members', 'teams' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest' => true,
	);
	register_post_type( 'teams', $args );

}
add_action( 'init', 'teams', 0 );




?>