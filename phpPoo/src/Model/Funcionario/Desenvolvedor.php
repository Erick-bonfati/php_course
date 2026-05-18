<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel() {
      return $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}