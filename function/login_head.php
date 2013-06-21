<?php

add_action('login_head','custom_login_logo');
function custom_login_logo(){
	$path = get_stylesheet_directory().'/image/logo.png';
	$logo = get_stylesheet_directory_uri().'/image/logo.png';
	if($l !== getimagesize($path)){
		$l = getimagesize(get_stylesheet_directory().'/screenshot.png');
	}
	echo '<style type="text/css">.login h1 a { height:'.$l[1].'px !important; background-image:url("'. $logo .'") !important; background-size:'.$l[0].'px '.$l[1].'px !important; }</style>';
}

add_filter('login_headerurl', 'login_header_url');
function login_header_url() {
    return get_home_url();
}

add_filter('login_headertitle', 'login_header_title');
function login_header_title() {
    return get_bloginfo('name');
}
?>