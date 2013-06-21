<?php
function favicon(){
	echo '<link rel="shortcut icon" href="'.get_home_url().'/image/favicon.ico" >';
}
add_action('wp_head', 'favicon');
?>