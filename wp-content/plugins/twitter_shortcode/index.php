<?php 
/*

Plugin Name: MJ twitter shower
Plugin URI: moherst.info 
Description: first draft 
Author: Mamadou Jallow 
Author URI: MOHERST.info
Version: 1.0

*/
include_once('auth.php');
include_once('cert.php');
include_once('headers.php');


add_shortcode('twitter', function($attrs, $content){

$attrs = shortcode_atts(
	[
		'username' => 'goluma2',
		'content' => !empty($content) ? $content : 'follow me on twitter',
		'show_tweets' => false,
		'tweet_reset_time' => 60,
		'num_tweets' => 5
	], $attrs
	);
	// if(!isset($attrs['username'])) $attrs['username'] = 'goluma';
	// if(!isset($attrs['content'])) $attrs['content'] = 'content';
	extract($attrs);


	if ($show_tweets) {
		$tweets = fetch_tweets($num_tweets, $username, $tweet_reset_time );
	}


	return '<a href="http://twitter.com/'.$username.'">'.$content.'</a>';

});


function fetch_tweets($num_tweets, $username, $tweet_reset_time){

	$tweets = curl("https://twitter.com/laracasts");

	print_r($tweets);



}

function curl($url){

$curl_request = curl_init();
curl_setopt($curl_request, CURLOPT_HTTPHEADER, $curl_header);
curl_setopt($curl_request, CURLOPT_HEADER, false);
curl_setopt($curl_request, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/user_timeline.json');
curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, false);
$json = curl_exec($curl_request);
// curl_close($curl_request);

	// $c = curl_init($url);
	// curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 3);
	// curl_setopt($c, CURLOPT_TIMEOUT, 5);
	// var_dump( curl_exec($c)  );
	// return json_decode( curl_exec($json) );
return $json;
}