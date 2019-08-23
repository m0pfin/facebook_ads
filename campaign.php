<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/8/22
 * Time: 下午5:44
 */
require_once __DIR__ . '/vendor/autoload.php';

$config = require_once __DIR__.'/config.php';

$fb = new \Facebook\Facebook($config);

$ad_account_id = $config['ad_account_id'];

$params = [
    'name' => 'My campaign',
    'objective' => 'LINK_CLICKS',
    'status' => 'PAUSED'
];

$result = $fb->post('act_'.$ad_account_id.'/campaigns', $params);

var_dump($result->getBody());

