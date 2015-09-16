<?php
/**
 * Compatibility with specific plugins.
 *
 * @package My Project
 */

/**
 * Add theme support for Jetpack Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function my_project_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'my_project_infinite_scroll_render',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'my_project_jetpack_setup' );

/**
 * Custom render function for Jetpack Infinite Scroll.
 */
function my_project_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
}
