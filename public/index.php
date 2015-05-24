<?php 

define('APP_ROOT', dirname(__DIR__));
chdir(APP_ROOT);

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require 'vendor/autoload.php';

$app = new Application();

$app->before(function(Request $request){
	print 'Antes das rotas';
});

$app->get('/', function() use ($app) {
	return 'Hello World';
});

$app->after(function(Request $request, Response $response){
	print 'Middleware After';
});


$app->run();