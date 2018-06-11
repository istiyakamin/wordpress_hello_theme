<?php

  require_once(get_template_directory() . '/inc/enqueue.php');
  require_once(get_template_directory() . '/inc/theme-option.php');
  require_once(get_template_directory() . '/inc/theme-element.php');
  require_once(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php');
  require_once(get_template_directory() . '/inc/custom-widget.php');
  require_once get_template_directory() .'/cs-framework/cs-framework.php';
  require_once(get_template_directory() . '/inc/shortcode.php');

  register_nav_menus( array(
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',
) );

add_theme_support( 'post-thumbnails' ); 


?>






