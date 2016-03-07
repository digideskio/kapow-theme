<?php
/**
 * Enqueue script and style assets.
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
 *
 * @package My Project
 */

/**
 * Enqueue assets for the front-end.
 */
function my_project_assets() {
	// Header JS.
	wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.min.js', array(), '0.1', false );

	// Footer JS.
	wp_enqueue_script( 'footer', get_template_directory_uri() . '/assets/js/footer.min.js', array( 'jquery' ), '0.1', true );

	// Comments JS.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Stylesheet.
	wp_enqueue_style( 'my-project-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_project_assets' );

/**
 * Enqueue assets for the admin area.
 */
function my_project_admin_assets() {
	// Admin stylesheet.
	wp_enqueue_style( 'my-project-style', get_template_directory_uri() . '/assets/css/admin.css' );

	// Editor stylesheet.
	wp_enqueue_style( 'my-project-style', get_template_directory_uri() . '/assets/css/editor.css' );
}
add_action( 'admin_enqueue_scripts', 'my_project_admin_assets' );


