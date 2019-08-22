<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/8/22
 * Time: 下午5:44
 */
require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'app_id' => '451106528952780',
    'app_secret' => '4bae5ed7f20551f9fd7f42ffe195cfb4',
    'default_graph_version' => 'v4.0',
    'default_access_token' => 'EAAGaR2xqAcwBADBAwqVaX7TgmqMweGUWtYCNREst1RDaKjwBUUxicop8ZBI5J6vZCF1ZCZAvRvb0vZC8R2dsmtZACYTx1uX6ZBhG2zcLCgYjPERs3u1NAUpKVMvOyuZBBvkNWs2n3SkM6PvKZBeEcNiZAIpVQH09LElOL8Kd5YnbIWVILr5sAfxHw8KJ8m8TP0y5zpwRYl26bfCyiOQ23LdpKZBrHZAqOh8h3NjMj1s6YBwL7qJkZCclQ2IUx',
    'ad_account_id' => '612415585832408'
];

$fb = new \Facebook\Facebook($config);

$ad_account_id = $config['ad_account_id'];
$params = [
    'name' => 'My campaign',
    'objective' => 'LINK_CLICKS',
    'status' => 'PAUSED'
];

$result = $fb->post('act_'.$ad_account_id.'/campaigns', $params);

var_dump($result->getBody());

