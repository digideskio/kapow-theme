<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My Project
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php do_action( 'my_project_before_wp_head' ); ?>
	
	<?php wp_head(); ?>
	
	<?php do_action( 'my_project_after_wp_head' ); ?>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>assets/js/header_ie.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'my-project' ); ?></a>

<div class="hfeed site">

	<?php do_action( 'my_project_before_header' ); ?>

	<header class="site-header" role="banner">

		<?php do_action( 'my_project_before_header_content' ); ?>

		<div class="site-branding">

			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<p class="site-description"><?php bloginfo( 'description' ); ?></p>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="site-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Main Menu', 'my-project' ); ?></button>

			<?php do_action( 'my_project_before_primary_nav' ); ?>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
					)
				);
			?>

			<?php do_action( 'my_project_after_primary_nav' ); ?>

		</nav><!-- .site-navigation -->

		<?php do_action( 'my_project_after_header_content' ); ?>

	</header><!-- .site-header -->

	<?php do_action( 'my_project_after_header' ); ?>

	<div id="content" class="site-content">

		<?php do_action( 'my_project_before_main' ); ?>
