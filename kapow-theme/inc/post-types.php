<?php
/**
 * Register custom post types.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @package My Project
 */

/**
 * Register post types.
 *
 * This example includes all of the available `register_post_type` parameters.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 */
function my_project_register_post_types() {

	// Example post type.
	$labels = array(
		'name'                => __( 'Plural Name', 'my-project' ),
		'singular_name'       => __( 'Singular Name', 'my-project' ),
		'add_new'             => _x( 'Add New Singular Name', 'my-project', 'my-project' ),
		'add_new_item'        => __( 'Add New Singular Name', 'my-project' ),
		'edit_item'           => __( 'Edit Singular Name', 'my-project' ),
		'new_item'            => __( 'New Singular Name', 'my-project' ),
		'view_item'           => __( 'View Singular Name', 'my-project' ),
		'search_items'        => __( 'Search Plural Name', 'my-project' ),
		'not_found'           => __( 'No Plural Name found', 'my-project' ),
		'not_found_in_trash'  => __( 'No Plural Name found in Trash', 'my-project' ),
		'parent_item_colon'   => __( 'Parent Singular Name:', 'my-project' ),
		'menu_name'           => __( 'Plural Name', 'my-project' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'example', $args );
}
//add_action( 'init', 'my_project_register_post_types' );
