<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package My Project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
	<header class="entry-header">

		<?php do_action( 'my_project_featured_image' ); ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php my_project_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php do_action( 'my_project_before_search_excerpt' ); ?>

		<?php the_excerpt(); ?>

		<?php do_action( 'my_project_before_search_excerpt' ); ?>

	</div><!-- .entry-summary -->

	<footer class="entry-footer">

		<?php my_project_entry_footer(); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

