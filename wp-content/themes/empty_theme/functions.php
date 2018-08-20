<?php
function css_function(){
  wp_enqueue_style('abc',get_template_directory_uri().'/style.css',false,true,'all');
}
add_action('wp_enqueue_scripts','css_function');


register_nav_menus(array(
          'primary' => __('Primary Menu'),
));

register_nav_menus(array(
          'secondary' => __('Secondary Menu'),
));

//Add the widget location

function footerwidget(){

  register_sidebar(  array(
    'name' => 'Footer Image 1',
    'id' => 'imagefooter1'
  ));
  register_sidebar(  array(
    'name' => 'Footer Image 2',
    'id' => 'imagefooter2'
  ));
}

add_action('widgets_init', 'footerwidget');






?>
