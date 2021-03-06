<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			
			<?php if ( is_single() ) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php endif; // is_single() ?>

			<?php if ( ! post_password_required() && ! is_attachment() ) : ?>
                <?php if (wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail' )) : ?>
                	<?php $featured_img = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'single-post-thumbnail' );  ?>
	                    <div class="lightbox-img featured-img-wrap">
	                    	<a href="<?php echo $featured_img[0]; ?>" rel="lightbox">
	                    		<img src="<?php echo $featured_img[0]; ?>" />
	                    	</a>
	                    </div>
                <?php endif; ?>
            <?php endif; ?>

			<?php if ( !is_single() ) : ?>
				<?php if (is_post_type_archive( "testimonials" ) ) : ?>
					<?php if ( get_post_meta( get_the_ID(), 'l_m_meta_value_key', true ) ) : ?>
					    <a class='testimonial-link' target='_blank' href="<?php echo get_post_meta( get_the_ID(), '_lm_meta_value_key', true ); ?>" rel="bookmark"> 
					<?php endif; ?>
						<div class="entry-content">
							<?php if ( get_post_meta( get_the_ID(), '_lm_meta_value_key', true ) ) : ?>
							    <a class='testimonial-link' target='_blank' href="<?php echo get_post_meta( get_the_ID(), '_lm_meta_value_key', true ); ?>" rel="bookmark"> 
							<?php endif; ?>
								<blockquote>
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
								</blockquote>
							<?php if ( get_post_meta( get_the_ID(), '_lm_meta_value_key', true ) ) : ?>
							    </a> 
							<?php endif; ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->
						<h1 class="entry-title"> -- <?php the_title(); ?></a></h1>
					<?php if ( get_post_meta( get_the_ID(), '_my_meta_value_key', true ) ) : ?>
					    </a> 
					<?php endif; ?>
				<?php elseif (is_post_type_archive( "staff" ) ) : ?>
					<div class='staff-content-wrap'>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-content">
							<h2><?php echo get_post_meta( get_the_ID(), '_lm_meta_value_key', true ); ?></h2>
							<p><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></p></div>
					</div>
				<?php else :  ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php endif; // is_post_type_archive() ?>
			<?php endif; // !is_single() ?>

			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php //comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
			<?php if ( is_single() ) : ?>
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
			<?php endif; // is_single() ?>
		<?php endif; ?>

		<footer class="entry-meta">
			<?php //twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
