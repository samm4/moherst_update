<?php 
$oauth_header = '';
$oauth_header .= 'oauth_consumer_key="DRrSkNxCYR16ogtVs6IwWpqvE", ';
$oauth_header .= 'oauth_nonce="' . time() . '", ';
$oauth_header .= 'oauth_signature="' . $signature . '", ';
$oauth_header .= 'oauth_signature_method="HMAC-SHA1", ';
$oauth_header .= 'oauth_timestamp="' . time() . '", ';
$oauth_header .= 'oauth_token="793746098-GH8jlawPpAX4zVomEaJDMSqmstIW9CuvdRnYaK2n", ';
$oauth_header .= 'oauth_version="1.0", ';
$curl_header = array("Authorization: Oauth {$oauth_header}", 'Expect:');