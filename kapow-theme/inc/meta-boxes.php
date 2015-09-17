<?php
/**
 * Custom meta boxes for this theme.
 *
 * Ensure that you have installed Custom Meta Boxes via Composer.
 *
 * @link https://github.com/humanmade/Custom-Meta-Boxes
 *
 * @package My Project
 */

// Include Human Made's Custom Meta Boxes if it has been installed with Composer.
include get_template_directory() . '/inc/vendor/humanmade/custom-meta-boxes/custom-meta-boxes.php';

/**
 * Create meta boxes.
 *
 * This is an example of how to create a meta box.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 *
 * @param  array $meta_boxes Existing meta boxes.
 * @return array Existing plus custom meta boxes.
 */
function my_project_create_meta_boxes( array $meta_boxes ) {

	// Example fields.
	$example_fields = array(
		array(
		    'id'   => 'example-field-text',
		    'name' => 'A simple text input',
		    'type' => 'text',
		),
	);

	// Example meta box.
	$meta_boxes[] = array(
		'title'    => __( 'Example Meta Box', 'my-project' ),
		'pages'    => array( 'page', 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => $example_fields,
	);

	return $meta_boxes;
}
//add_filter( 'cmb_meta_boxes', 'my_project_create_meta_boxes' );
