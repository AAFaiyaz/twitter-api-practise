<?php

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$consumerkey = "cgtQqAqL6kkNd4zgRyT1ZocoH";

$consumersecret = "Pjfs9X1Y07Th9sHCaxjM7pgjYhGIAID5GOrzZEZR5dSBBLqiBQ";

$access_token = "4677950118-dtlF3OfOWgIkH9VLfD8WG2h00STogymkxohqhGp";

$access_token_secret = "SesOPuLxN7QCh193llLBB69zScXM25KP2IkOB7qpaTeHU";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

print_r($content);
?>