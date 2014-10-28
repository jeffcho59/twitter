<?php

require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "477407844-JNfzOVhLvbCnW35SieImNWp2zvKnisdcCcGwZeRd",
    'oauth_access_token_secret' => "ppgB6Oir3Wj4mlNfnmRlSGaM40hl5yq5rsFgPg6JtN2pJ",
    'consumer_key' => "XVKkg0jgAiPAVZCkH0GoeLltF",
    'consumer_secret' => "adzCZLxcS7J1HMpSjbKLx9clHBizHLUDhYMIPQydCVwCFWzMIm"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=iagdotme&count=20';
 
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
			 
?>