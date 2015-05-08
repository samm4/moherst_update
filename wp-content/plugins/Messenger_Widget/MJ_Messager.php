<?php 
/*

Plugin Name: MJ messenger widget
Plugin URI: moherst.info 
Description: first draft 
Author: Mamadou Jallow 
Author URI: MOHERST.info
Version: 1.0

*/

/**
* 
*/
class MJ_Messager extends WP_Widget
{
    
	function __construct()
	{
		$params = [

			'description' => 'this is message stuff',
			'name' => 'Messager'

		];

		parent::__construct('Messager', '', $params);
	}

	public function form($instance){

		extract($instance);
		?>
		<p>
			<label for=""> Title: </label>
			<input class="widefat"
				id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>"
				value="<?php if( isset($title)) echo esc_attr($title); ?>" 			
			/>

		</p>
		<?php 
	}

	public function widget($args, $instance){
		extract($args);
		extract($instance);
		echo $before_widget;
			echo $before_title. $title. $after_title ;
			echo $description;
		echo $after_widget;
	}
}



function mj_register_messager(){

	register_widget("MJ_Messager");
}
add_action('widgets_init', 'mj_register_messager');