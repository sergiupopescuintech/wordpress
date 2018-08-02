<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Pulito_Clean_Blog_Lite_Script {
	
	function __construct() {

		// Action to add style in front end
		add_action( 'wp_enqueue_scripts', array($this, 'pulito_clean_blog_lite_front_styles'), 1 );

		// Action to add script in front end
		add_action( 'wp_enqueue_scripts', array($this, 'pulito_clean_blog_lite_front_scripts'), 1 );
    
	}
 

	/**
	 * Enqueue styles for front-end
	 * 
	 * @package Pulito Clean Blog Lite
	 * @since 1.0
	 */
	function pulito_clean_blog_lite_front_styles() {
		global $wp_styles;
		

		// Font Awesome CSS
		wp_register_style( 'font-awesome', PULITO_LITE_URL . '/assets/css/font-awesome.min.css', array(), PULITO_LITE_VERSION);
		wp_enqueue_style( 'font-awesome' );				

		wp_enqueue_style( 'pulito-clean-blog-lite-fonts', pulito_clean_blog_lite_fonts_url(), array(), null );

		// Loads theme main stylesheet
		wp_enqueue_style( 'pulito-clean-blog-lite-style', get_stylesheet_uri(), array(), PULITO_LITE_VERSION);

	}

	/**
	 * Enqueue scripts for front-end
	 * 
	 * @package Pulito Clean Blog Lite
	 * @since 1.0
	 */
	function pulito_clean_blog_lite_front_scripts() {		
                
		/*
		 * Adds JavaScript to pages with the comment form to support
		 * sites with threaded comments (when in use).
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
			wp_enqueue_script( 'comment-reply' );
		}			

		// Public Js
		wp_register_script( 'pulito-clean-blog-lite-public-js', PULITO_LITE_URL . '/assets/js/public.js', array('jquery'), PULITO_LITE_VERSION, true);       
		wp_enqueue_script( 'pulito-clean-blog-lite-public-js' );
                
        
	}
}

$pulito_clean_blog_lite_script = new Pulito_Clean_Blog_Lite_Script();