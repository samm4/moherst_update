<?php 
/*

Plugin Name: MJ filter
Plugin URI: moherst.info 
Description: first draft 
Author: Mamadou Jallow 
Author URI: MOHERST.info
Version: 1.0

*/

// add_filter('the_title', ucwords);

// add_filter('the_content', function($content){
// 	return $content . '-'. time();
// });

// add_action('wp_footer', function(){

// echo 'from the footer';
// });

// add_action('comment_post', function(){

// 	$email =  get_bloginfo('admin_email');
// 	var_dump(wp_mail($email, 'new email', ' a new email triggered'));
// 	die();// wp_mail($email, 'new email', ' a new email triggered');

// });


add_action('the_content', function($content){
	// echo "not in";
	$id =  get_the_id();

	// var_dump(is_singular('post'));
	if(!is_singular('post')){

		return $content;
	}

	$term = get_the_terms($id, 'category' );
	$cats[] = $term->cat_ID;
	// print_r($id);
	// print_r($term);

	foreach ($term as $term) {
		$cats[] = $term->cat_ID;
	}
	$loop = new WP_Query(array(
			'posts_per_page' => 2,
			'categrory__in' => $cats,
			'orderby' => 'rand',
			'post__not_in' => array($id)
		));

	if ($loop->have_posts()) {
		$content .= '
			<h2> this is an experiment of links </h2> 
			<ul class="related-category-posts">';

		while ($loop->have_posts()) {
			
			$content .= '
			<li>
				<a href="'.get_permalink().'">'.get_the_title() . '</a> </li>';
			
		}
		$content .= '</ul>';
		wp_reset_query();
	}
});