<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hi', function(){
    echo 'ว่าไง';
});

$app->get('/user/register', function(){ echo '/user/register'; });
$app->get('/user/edit', function(){ echo '/user/edit'; });
$app->get('/room/reserve', function(){ echo '/room/reserve'; });

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
