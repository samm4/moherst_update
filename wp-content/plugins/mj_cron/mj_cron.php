<?php 
/*

Plugin Name: MJ cron
Plugin URI: moherst.info 
Description: first draft 
Author: Mamadou Jallow 
Author URI: MOHERST.info
Version: 1.0

*/

add_action('init', function(){

	if (!wp_next_scheduled('mj_cron_hook')) {
		wp_schedule_event(time(), 'hourly', 'mj_cron_hook');
	}

});
add_action('mj_cron_hook', function(){
	$str = time();

	$som = mail('sulsiralumo@gmail.com', 'something is new', 'something '.$str);


	die(var_dump($som ));
});