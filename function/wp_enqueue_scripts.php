<?php
function enqueue(){
	wp_register_style('normalize', get_stylesheet_directory_uri().'/style/normalize.css', NULL, '2.0.1');
	wp_register_style('bootstrap', get_stylesheet_directory_uri().'/style/bootstrap.css', NULL, '2.1.1');
	wp_register_style('media', get_stylesheet_directory_uri().'/style/media.css', NULL, '1.0');
	wp_register_style('font', get_stylesheet_directory_uri().'/style/font.css', NULL, '1.0');
	wp_enqueue_style('theme', get_stylesheet_uri(), array('normalize','bootstrap','media','font'), '1.0.5');
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri().'/script/modernizr.js', NULL, '2.6.2');
	wp_enqueue_script('jquery');
	wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'enqueue');
?>