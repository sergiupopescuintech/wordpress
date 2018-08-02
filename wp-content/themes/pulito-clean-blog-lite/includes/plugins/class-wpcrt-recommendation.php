<?php
/**
 * pulito_clean_blog_lite_Recommendation Class
 * 
 * Handles the recommended plugin functionality.
 * 
 * @package Pulito Clean Blog Lite
 * @since 1.0
 */

// Plugin recomendation class
require_once( PULITO_LITE_DIR . '/includes/plugins/class-tgm-plugin-activation.php' );

class pulito_clean_blog_lite_Recommendation {

	function __construct() {
		
		// Action to add recomended plugins
		add_action( 'tgmpa_register', array($this, 'pulito_clean_blog_lite_recommend_plugin') );
	}

	/**
	 * Recommend Plugins
	 * 
	 * @package Pulito Clean Blog Lite
	 * @since 1.0
	 */
	function pulito_clean_blog_lite_recommend_plugin() {
	    $plugins = array(	       
	        array(
	            'name'               => __('Instagram Slider and Carousel Plus Widget', 'pulito-clean-blog-lite'),
	            'slug'               => 'slider-and-carousel-plus-widget-for-instagram',
	            'required'           => false,
	        )
	    );
	    tgmpa( $plugins);
	}
}

$pulito_clean_blog_lite_recommendation = new pulito_clean_blog_lite_Recommendation();