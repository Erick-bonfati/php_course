<?php

namespace Alura\Mvc\Controller;

class LogoutController implements Controller
{

  public function processaRequisicao(): void
  {
    // session_destroy();
    // OU
    $_SESSION['logado'] = false;
    unset($_SESSION['logado']);

    header('Location: /login');
  }
}