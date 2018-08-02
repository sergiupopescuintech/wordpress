<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pulito-clean-blog-lite' ); ?></a>	
<header id="masthead" class="site-header" role="banner">	
		<div class="site-branding container clearfix">
			<div class="pulito-clean-blog-lite-columns-row">
				<div class="header-logo pulito-clean-blog-lite-col-12 pulito-clean-blog-lite-col-sm-12 pulito-clean-blog-lite-columns">
					<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>
					<?php    $image = wp_get_attachment_image_src( pulito_clean_blog_lite_get_theme_mod( 'custom_logo' ) , 'full' ); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php  echo esc_url( $image[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
					</a>
					<?php } else { ?>
						<div class="site-title-wrap">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div>
					<?php } ?>
				</div>			  
			</div><!-- .Row -->
		</div><!-- .logo -->
		<div class="header-content">        
			<div class="header-content__container container">
					<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'pulito-clean-blog-lite' ); ?></button>
							<div class="mobile-logo">
							<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
								$image = wp_get_attachment_image_src( pulito_clean_blog_lite_get_theme_mod( 'custom_logo' ) , 'full' ); ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php  echo esc_url( $image[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
								</a>
								<?php } else { ?>
									<div class="site-title-wrap">
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
									</div>
							<?php } ?>
							</div>
							<?php                    
								wp_nav_menu( array(
										'theme_location' => 'main-menu',
										'menu_id' => 'primary-menu',
								) );                     
							 ?>
					</nav><!-- #site-navigation -->           
			</div>
		</div><!-- .header-content -->			
</header><!-- #masthead -->		
	<div id="content" class="site-content container">