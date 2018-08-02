<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */
$blog_intro_show = pulito_clean_blog_lite_get_theme_mod( 'blog_intro_show' );
$blog_intro_title = pulito_clean_blog_lite_get_theme_mod( 'blog_intro_title' );
$blog_intro_subtitle = pulito_clean_blog_lite_get_theme_mod( 'blog_intro_subtitle' );
$blog_intro_desc = pulito_clean_blog_lite_get_theme_mod( 'blog_intro_desc' );
$blog_intro_link = pulito_clean_blog_lite_get_theme_mod( 'blog_intro_link' );
$blog_intro_button = pulito_clean_blog_lite_get_theme_mod( 'blog_intro_button' );

get_header(); ?>
<div class="content-row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if($blog_intro_show) { ?>
				<div class="main-blog-intro-section container clearfix">
					<?php if(!empty($blog_intro_title) ) { ?><h1><?php echo esc_html($blog_intro_title); ?></h1><?php } ?>
					<?php if(!empty($blog_intro_subtitle) ) { ?><h2><?php echo esc_html($blog_intro_subtitle); ?></h2><?php } ?>
					<?php if(!empty($blog_intro_desc) ) { ?><p><?php echo esc_html($blog_intro_desc); ?></p><?php } ?>
					<div class="link-more"><a href="<?php echo esc_url($blog_intro_link); ?>"><?php echo esc_html($blog_intro_button); ?> </a>	</div>
				</div>
			<?php } ?>
			
			<?php
			if ( have_posts() ) :				
				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
			<?php
				endif;                  
               ?>
                 <div class="post-loop-wrap clearfix">
					<?php				
					/* Start the Loop */
					while ( have_posts() ) : the_post();						
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					
					endwhile; ?>
                </div>
				<?php
				the_posts_pagination( array(
					'prev_text' => esc_html__( '&larr; Previous', 'pulito-clean-blog-lite' ),
					'next_text' => esc_html__( 'Next &rarr;', 'pulito-clean-blog-lite' ),
				) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div> <!-- Content-row -->
<?php
get_footer();