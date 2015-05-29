<?php 
ini_set('display_errors', 1);
define('APP_ROOT', dirname(__DIR__));
chdir(APP_ROOT);

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require 'vendor/autoload.php';

$app = new Application();

//$app->before(function(Request $request){
// 	print 'Antes das rotas - ';
// });

$app->get('/', function() use ($app) {
	return 'Hello World - ';
})
->before(function(){
	print 'Antes dessa rota em questao 1 - ';
})
->before(function(){
	print 'Antes dessa rota em questao 2 - ';
})
->before(function(){
	print 'Antes dessa rota em questao 3 - ';
})
->after(function(){
	print 'After route middleware';
})
;

$app->get('/users', function(){
	return 'Users route';
});
// $app->after(function(Request $request, Response $response){
// 	print 'Middleware After - ';
// });

// $app->finish(function(Request $request, Response $response){
// 	print 'Ele vai ser executado depois que o response for enviado para o browser!';
// });


$app->run();