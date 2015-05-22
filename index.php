<?php 

use Silex\Application;

require __DIR__ . '/vendor/autoload.php';

$app = new Application();

$app->get('/', function() use ($app) {
	return 'Hello World';
});

$app->run();