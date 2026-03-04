<?php

// Traits são um mecanismo de reutilização de código em PHP, permitindo que métodos sejam compartilhados entre classes sem a necessidade de herança. Eles são usados para evitar a duplicação de código e promover a composição de comportamentos.

trait ComAvaliacao 
{
  private array $notas = [];

  public function avalia(float $nota): void
  {
      $this->notas[] = $nota;
  }

  public function media(): float
  {
      $somaNotas = array_sum($this->notas);
      $quantidadeNotas = count($this->notas);

      return $somaNotas / $quantidadeNotas;
  }
}