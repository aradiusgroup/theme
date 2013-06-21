<?php
function enqueue(){
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/style/bootstrap.css', null, '2.3.2');
	wp_enqueue_style('theme', get_stylesheet_uri(), array('bootstrap'), '0.1');
	wp_enqueue_script('jquery');
	wp_enqueue_script('comment-reply');
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri().'/script/modernizr.js', array('jquery'), '2.6.2');
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/script/bootstrap.js', array('jquery', 'modernizr'), '2.3.2');
}
add_action('wp_enqueue_scripts', 'enqueue');
?>