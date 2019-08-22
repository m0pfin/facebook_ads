<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/8/20
 * Time: 上午11:34
 */
require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'app_id' => '451106528952780',
    'app_secret' => '4bae5ed7f20551f9fd7f42ffe195cfb4',
    'default_graph_version' => 'v4.0',
    'default_access_token' => 'EAAGaR2xqAcwBADBAwqVaX7TgmqMweGUWtYCNREst1RDaKjwBUUxicop8ZBI5J6vZCF1ZCZAvRvb0vZC8R2dsmtZACYTx1uX6ZBhG2zcLCgYjPERs3u1NAUpKVMvOyuZBBvkNWs2n3SkM6PvKZBeEcNiZAIpVQH09LElOL8Kd5YnbIWVILr5sAfxHw8KJ8m8TP0y5zpwRYl26bfCyiOQ23LdpKZBrHZAqOh8h3NjMj1s6YBwL7qJkZCclQ2IUx'
];

$fb = new \Facebook\Facebook($config);
try {
    // Get the \Facebook\GraphNodes\GraphUser object for the current user.
    // If you provided a 'default_access_token', the '{access-token}' is optional.
    $param = '{
  "advertiser_id": "718904e5-2721-4d64-9b30-2097a5877ecb",
  "event": "MOBILE_APP_INSTALL",
  "advertiser_tracking_enabled": "1",
  "application_tracking_enabled": "1"
}';
    $arr = json_decode($param, true);
    $response = $fb->post('451106528952780/activities', $arr);
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage() . PHP_EOL;
    exit;
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage() . PHP_EOL;
    exit;
}

var_dump($response->getBody());

//$me = $response->getGraphUser();
//echo 'Logged in as ' . $me->getName() . PHP_EOL;