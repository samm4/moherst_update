<?php 

$oauth_hash = '';
$oauth_hash .= 'oauth_consumer_key=DRrSkNxCYR16ogtVs6IwWpqvE&';
$oauth_hash .= 'oauth_nonce=' . time() . '&';
$oauth_hash .= 'oauth_signature_method=HMAC-SHA1&';
$oauth_hash .= 'oauth_timestamp=' . time() . '&';
$oauth_hash .= 'oauth_token=793746098-GH8jlawPpAX4zVomEaJDMSqmstIW9CuvdRnYaK2n&';
$oauth_hash .= 'oauth_version=1.0';
$base = '';
$base .= 'GET';
$base .= '&';
$base .= rawurlencode('https://api.twitter.com/1.1/statuses/user_timeline.json');
$base .= '&';
$base .= rawurlencode($oauth_hash);
$key = '';
$key .= rawurlencode('tW0S1DCnZ1kk8NoexEHqbtsakMpvIjoOmelIRlfHmqQBOwCZv4');
$key .= '&';
$key .= rawurlencode('AXwdqtNwrWFubt9EZrv6wTD2R1cGtzk5ooyinPi9T6ztb');
$signature = base64_encode(hash_hmac('sha1', $base, $key, true));
$signature = rawurlencode($signature);