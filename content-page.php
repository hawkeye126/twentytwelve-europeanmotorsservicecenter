<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if (!is_front_page()) : ?>
			<header class="entry-header">
				<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
				<?php the_post_thumbnail(); ?>
				<?php endif; ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'pre-content-widget' ) ) : ?>
			<div id="pre-content-widget-holder" class="pre-content-widget-holder" role="complementary">
				<?php dynamic_sidebar( 'pre-content-widget' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php if ( is_active_sidebar( 'post-content-widget' ) ) : ?>
			<div id="post-content-widget-holder" class="post-content-widget-holder" role="complementary">
				<?php dynamic_sidebar( 'post-content-widget' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
