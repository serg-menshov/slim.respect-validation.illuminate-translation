<?php

declare(strict_types=1);

namespace App\Middlewares\Requests;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Respect\Validation\Exceptions\NestedValidationException;
use Slim\Psr7\Response;
use Respect\Validation\Validator as v;

abstract class BaseRequest
{
  abstract protected function rules(array $params): v;

  /**
   * you can override this method to return additional parameters
   */
  protected function validated(array $params): array
  {
    return $params;
  }

  public function __invoke(Request $request, RequestHandler $handler): Response
  {
    // get not validated request parameters
    $params = json_decode((string)$request->getBody(), true);

    try {
      $this->rules($params)->assert($params);
    } catch (NestedValidationException $e) {
      $payload = json_encode(['message' => $e->getMessages()]);
      $response = new Response;
      $response->getBody()->write($payload);
      return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(422);
    }

    // set validated parameters to read using Request method getAttribute('validated')
    $request = $request->withAttribute('validated', $this->validated($params));

    return $handler->handle($request);
  }
}
