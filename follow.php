#!/usr/bin/env php
<?php

$root = __DIR__;
$vendorDir = $root.'/vendor';
$loader = require $root.'/../../vendor/autoload.php';
$loader->setPsr4('Abraham\\TwitterOAuth\\', [$vendorDir . '/abraham/twitteroauth/src']);

$config = require $root.'/../../config/services.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$devs = (new \October\Rain\Parse\Yaml)->parseFile($root.'/config/stars.yaml');

$api = new TwitterOAuth(
    array_get($config, 'services.twitter.key'),
    array_get($config, 'services.twitter.secret'),
    $argv[1],
    $argv[2]
);

foreach ($devs as $dev) {
    if (!$screenName = array_get($dev, 'twitter')) {
        continue;
    }

    $res = $api->post('friendships/create', [
        'screen_name' => $screenName
    ]);
}
