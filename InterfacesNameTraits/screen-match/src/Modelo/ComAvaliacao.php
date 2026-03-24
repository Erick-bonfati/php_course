<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

// Traits são um mecanismo de reutilização de código em PHP, permitindo que métodos sejam compartilhados entre classes sem a necessidade de herança. Eles são usados para evitar a duplicação de código e promover a composição de comportamentos.

trait ComAvaliacao 
{
  private array $notas = [];

    /**
     * @throws NotaInvalidaException Se a nota for menor que 0 ou maior que 10
    */

  public function avalia(float $nota): void
  {
    if($nota < 0 || $nota > 10) {
        throw new NotaInvalidaException();
    }
      $this->notas[] = $nota;
  }

  public function media(): float
  {
      $somaNotas = array_sum($this->notas);
      $quantidadeNotas = count($this->notas);

      return $somaNotas / $quantidadeNotas;
  }
}