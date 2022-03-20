<?php

use App\Middlewares\Requests\SplitTimeCalcRequest;
use App\Middlewares\Requests\UserRequest;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// example 1
$app->post('/user/register', function (Request $request, Response $response, $args) {
  $params = $request->getAttribute('validated');
  $response->getBody()->write(json_encode($params, JSON_PRETTY_PRINT));

  return $response;
})->add(new UserRequest(false));

// example 2
$app->put('/user/profile', function (Request $request, Response $response, $args) {
  $params = $request->getAttribute('validated');
  $response->getBody()->write(json_encode($params, JSON_PRETTY_PRINT));

  return $response;
})->add(new UserRequest(true));

// example 3
$app->get('/split-time-calc', function (Request $request, Response $response, $args) {
  $params = $request->getAttribute('validated');
  $response->getBody()->write(json_encode($params, JSON_PRETTY_PRINT));

  return $response;
})->add(SplitTimeCalcRequest::class);
