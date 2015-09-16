<?php
/**
 * Register custom taxonomies.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 *
 * @package My Project
 */

/**
 * Register taxonomies.
 *
 * This example includes all of the available `register_taxonomy` parameters.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 */
function my_project_register_taxonomies() {

	// Example taxonomy.
	$labels = array(
		'name'					=> _x( 'Plural Name', 'Taxonomy plural name', 'my-project' ),
		'singular_name'			=> _x( 'Singular Name', 'Taxonomy singular name', 'my-project' ),
		'search_items'			=> __( 'Search Plural Name', 'my-project' ),
		'popular_items'			=> __( 'Popular Plural Name', 'my-project' ),
		'all_items'				=> __( 'All Plural Name', 'my-project' ),
		'parent_item'			=> __( 'Parent Singular Name', 'my-project' ),
		'parent_item_colon'		=> __( 'Parent Singular Name', 'my-project' ),
		'edit_item'				=> __( 'Edit Singular Name', 'my-project' ),
		'update_item'			=> __( 'Update Singular Name', 'my-project' ),
		'add_new_item'			=> __( 'Add New Singular Name', 'my-project' ),
		'new_item_name'			=> __( 'New Singular Name Name', 'my-project' ),
		'add_or_remove_items'	=> __( 'Add or remove Plural Name', 'my-project' ),
		'choose_from_most_used'	=> __( 'Choose from most used my-project', 'my-project' ),
		'menu_name'				=> __( 'Singular Name', 'my-project' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'example', array( 'post' ), $args );
}
//add_action( 'init', 'my_project_register_taxonomies' );
