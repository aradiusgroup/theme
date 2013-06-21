<?php
add_filter('wp_title', 'filter_wp_title', 10, 1);

function filter_wp_title($title) {
	global $page, $paged, $wp_query;
	if(is_archive()){
		if(is_tax()){
			return $title;
		}
		$cpt = get_post_types(array('_builtin'=>0, 'publicly_queryable'=>1),'objects');
		if(is_post_type_archive(array_keys($cpt)))
			$title = $cpt[get_post_type()]->labels->name.' Archives';
			return $title;
	}
	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo('description');

	$filtered_title = $title . get_bloginfo('name');
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description : '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'minnowproject' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}
?>