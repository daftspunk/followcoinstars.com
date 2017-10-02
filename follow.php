<?php

$root = __DIR__;
$loader = require $root.'/vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$devs = Yaml::parseFile($root.'/config/stars.yaml');

$api = new TwitterOAuth(
    Config::get('services.twitter.key'),
    Config::get('services.twitter.secret'),
    $argv[1],
    $argv[2]
);

foreach ($devs as $dev) {
    if (!$screenName = array_get($dev, 'twitter')) {
        continue;
    }

    $res = $api->post('friendships/create', [
        'screen_name' => $screenName
    );
}
