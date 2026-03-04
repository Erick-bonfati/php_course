<?php

/* Classe abstrata: uma classe que não pode ser instanciada diretamente,
   servindo como base para outras classes. Ela pode conter métodos abstratos
   que devem ser implementados pelas subclasses.  */

// Ao implementar a interface Avaliavel, a classe Titulo é obrigada a implementar os métodos avalia() e media(), garantindo que todas as subclasses de Titulo tenham esses comportamentos, permitindo que sejam tratadas de forma intercambiável quando se trata de avaliação e cálculo de média.
abstract class Titulo implements Avaliavel
{
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    ) {
        $this->notas = [];
    }

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

    abstract public function duracaoEmMinutos(): int; // abstract method = significa que a classe é abstrata e deve ser implementada nas subclasses
} 