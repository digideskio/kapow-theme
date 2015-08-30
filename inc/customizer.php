<?php
/**
 * My Project Theme Customizer.
 *
 * @package My Project
 */

/**
 * Customizer Housekeeping
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function my_project_cust_reg_housekeeping( $wp_customize ) {
	// Add postMessage support for site title and description for the Theme Customizer.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'my_project_cust_reg_housekeeping' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function my_project_customize_preview_js() {
	wp_enqueue_script( 'my_project_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'my_project_customize_preview_js' );
