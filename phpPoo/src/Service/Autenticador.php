<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): bool
    {
      if($autenticavel->podeAutenticar($senha))
      {
        echo "Autenticado com sucesso!" . PHP_EOL;
        return true;
      }
      echo "Falha na autenticação!" . PHP_EOL;
      return false;
    }
}