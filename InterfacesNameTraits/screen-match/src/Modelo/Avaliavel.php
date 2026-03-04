<?php

interface Avaliavel // Interface é um contrato que define um conjunto de métodos que uma classe deve implementar. Ela é usada para garantir que as classes que a implementam tenham um comportamento consistente, permitindo que sejam tratadas de forma intercambiável.
{
  // Isso significa que todos os métodos são abstractos
    public function avalia(float $nota): void; // Método para avaliar o objeto com uma nota
    public function media(): float; // Método para calcular a média das avaliações
}