<?php
/**
 * 
 * Template part for including posts design formate wise
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Pulito Clean Blog Lite
 * @since 1.0 
 * 
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
		<div class="pulito-clean-blog-lite-post-image-bg">  
					<?php get_template_part( 'template-parts/content', 'media' ); ?>
		</div>	
		<div class="pulito-post-grid-content <?php if ( !has_post_thumbnail() ) { echo 'no-thumb-image'; } ?>">				
				<header class="entry-header">
					
						<?php if (is_sticky()) : ?>
										<span class="sticky-label"><i class="fa fa-thumb-tack"></i><span class="sticky-label-text"><?php esc_html_e('Featured', 'pulito-clean-blog-lite'); ?></span></span>
						<?php endif; ?>
					    <?php if ( 'page' !== get_post_type() ) { pulito_clean_blog_lite_cat_posted_on(); }   ?>
						<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
								
						<?php if ( 'page' !== get_post_type() ) { pulito_clean_blog_lite_posted_on(); }  ?>
								
				</header><!-- .entry-header -->
				<?php
				if ( is_search() ) { ?>
						<div class="entry-summary">
				<?php    
						the_excerpt();
				} else { ?>
						<div class="entry-content">
				<?php             
						$ismore = ! empty( $post->post_content ) ? strpos( $post->post_content, '<!--more-->' ) : '';
						if ( ! empty( $ismore ) ) {
								/* translators: %s: Name of current post */
								the_content( sprintf(
												esc_html__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pulito-clean-blog-lite' ),
												get_the_title()
										) );
						} else {
								the_excerpt();				
						}
						wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pulito-clean-blog-lite' ),
								'after'  => '</div>',
						) );

				}
				 ?>
				 
					<footer class="entry-footer">
							<?php pulito_clean_blog_lite_entry_footer(); ?>
					</footer><!-- .entry-footer -->
					
					</div><!-- .entry-content --><!-- .entry-summary -->
				</div>       

</article><!-- #post-## -->