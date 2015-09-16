<?php
/**
 * Custom shortcodes for this theme.
 *
 * @link https://codex.wordpress.org/Function_Reference/add_shortcode
 *
 * @package My Project
 */

/**
 * Example of a simple shortcode.
 *
 * This would be called by using `[simple]` in the post editor.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 *
 * @return string Example shortcode output.
 */
function my_project_simple_shortcode() {
	// Create some content to return.
	$content = '<div>This is an example shortcode!</div>';

	return $content;
}
//add_shortcode( 'simple', 'my_project_simple_shortcode' );
