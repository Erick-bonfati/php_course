<?php


class Filme { // definição da classe Filme

    private array $notas;

    // Todo método que é chamado automaticamente pela linguagem quando um objeto é criado(instanciado) é chamado de Método construtor
    // Aqui também estamos usando a sintaxe de promoção de propriedades do PHP 8 que é nada mais do que uma forma mais curta de declarar e inicializar propriedades
    //As propriedades sempre são tipadas
    public function __construct( 
        public readonly string $nome, // readonly significa que a propriedade só pode ser atribuída uma vez, ou seja, no momento da construção do objeto
        public readonly int $ano, // mudamos para public pois queremos acessar essas propriedades fora da classe, sem os getters
        public readonly Genero $genero, // usando o enum Genero para tipar a propriedade genero
        public readonly int $duracaoEmMinutos,
        ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void   {
      $this->notas[] = $nota;
    }

    public function media() : float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }

}