<?php 
/*

Plugin Name: Moherst HR
Plugin URI: moherst.info 
Description: HR PACKAGE FOR MOHERST 
Author: samm4 team 
Author URI: MOHERST.info
Version: 1.0

*/



function create_page($page, $content){
	$snippet = '';
	if ($page) {
		if($page == 'login'){
			$snippet =  construct_login($content);
		}else if($page == 'dashboard'){
			$snippet = construct_dashboard($content);
		}else{
			#
		}
	}
	return $snippet;
}

function construct_login($content){
	return $content;
}

add_shortcode('mohersthr', function($attribute, $suun){

$attrs = shortcode_atts(
	[
		'page' => $attribute['page'] ,
		'content' => !empty($content) ? $content : ' '
	], $attrs
	);

	extract($attrs);


	$html = create_page($page, $content);

	return $html;

});


?>
