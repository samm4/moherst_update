<?php 
/*

Plugin Name: MJ Droper
Plugin URI: moherst.info 
Description: first draft 
Author: Mamadou Jallow 
Author URI: MOHERST.info
Version: 1.0

*/

/**
*  url: name, 
*/
class MJDroper extends WP_Widget
{
    
	function __construct()
	{
		$params = array(
			'Description' => 'sidebar dropdown list creator'
			'name' => 'Droper'
			);
	}

	public function form($instance){
		extract($instance);
	}

	public function widget($args, $instance){
		
	}
}


function mj_register_droper(){

	register_widget("MJDroper");

}
add_action('widgets_init', 'mj_register_droper');