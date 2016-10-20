<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Client\Common\HttpMethodsClient as HttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use OneSignal\Config;
use OneSignal\Devices;
use OneSignal\OneSignal;

$config = new Config();
$config->setApplicationId('8ade62d3-6559-4860-a585-faf1278c92d5');
$config->setApplicationAuthKey('ODkwNTg5YzgtZDUxOC00NDk1LThiNWUtOTUxMmYxYTAyZDlm');
$config->setUserAuthKey('ODkwNTg5YzgtZDUxOC00NDk1LThiNWUtOTUxMmYxYTAyZDlm');

$guzzle = new GuzzleClient([
		// ..config
		]);

$client = new HttpClient(new GuzzleAdapter($guzzle), new GuzzleMessageFactory());
$api = new OneSignal($config, $client);

// Do not combine targeting parameters
$api->notifications->add([
    'contents' => [
        'en' => 'Notification message'
    ],
    'included_segments' => ['All'],
    'data' => ['foo' => 'bar'],    
    // ..other options
]);

$data = $api->notifications->add([
		'app_id' => $config->getApplicationId(),
		'headings' => [ 'en' => 'test heading' ],
		'contents' => [ 'en' => 'this is test for checking response' ],
		'url' => 'http://google.com',
		//'included_segments' => ['All'],
		'include_player_ids' => '',
		'data' => ['foo' => 'bar']
		]);

//$api->notifications->open('notification_id');
//$api->notifications->cancel('notification_id');