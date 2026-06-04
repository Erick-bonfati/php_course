<?php

namespace Alura\Mvc\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class LogoutController implements RequestHandlerInterface
{

  public function handle(ServerRequestInterface $request): ResponseInterface
  {
    // session_destroy();
    // OU
    $_SESSION['logado'] = false;
    unset($_SESSION['logado']);

    return new Response(200, [
      'Location' => '/login'
    ]);
  }
}
