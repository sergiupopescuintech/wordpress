<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 * 
 */

$related_post_show = get_theme_mod( 'related_post_show' );
$single_post_fet_img 	= pulito_clean_blog_lite_get_theme_mod( 'single_post_fet_img' );
get_header(); ?>
<div class="content-row">
	<?php if($single_post_fet_img) { ?>
		<?php get_template_part( 'template-parts/content', 'media' ); ?>
         <?php } ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">			
		<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );

					// Previous/next post navigation.
					the_post_navigation( array(
						'next_text' => '<span class="meta-nav">' . esc_html__( 'Next Post', 'pulito-clean-blog-lite' ) . '</span> <span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav">' . esc_html__( 'Previous Post', 'pulito-clean-blog-lite' ) . '</span> <span class="post-title">%title</span>',
					) );
					

					// If releted are true  load up the releted post template.
					if(!empty($related_post_show)){
						get_template_part( 'template-parts/releted-catagories-posts' );	
					}
					
					
					
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>	
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div> <!-- Content-row -->
<?php
get_footer();