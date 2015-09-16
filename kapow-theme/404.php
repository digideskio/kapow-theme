<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package My Project
 */

get_header(); ?>

	<main class="site-main" role="main">

		<?php do_action( 'my_project_before_main_content' ); ?>

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'my-project' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">

				<?php do_action( 'my_project_before_post_content' ); ?>

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'my-project' ); ?></p>

				<?php get_search_form(); ?>

				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<?php
				// Only show the widget if site has multiple categories.
				if ( my_project_categorized_blog() ) :  ?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'my-project' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

				<?php endif; ?>

				<?php
					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'my-project' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>

				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				<?php do_action( 'my_project_after_post_content' ); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

		<?php do_action( 'my_project_after_main_content' ); ?>

	</main><!-- .site-main -->

<?php get_footer(); ?>
