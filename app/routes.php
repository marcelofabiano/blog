<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function (Request $request, Response $response) {
    return (new \App\Controllers\HomeController($request, $response, $this->view))->index();
});

$app->get('/post/{id}', function (Request $request, Response $response, $args) {
    return (new \App\Controllers\HomeController($request, $response, $this->view))->show($args['id']);
});
