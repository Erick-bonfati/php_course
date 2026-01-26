<?php


class Filme extends Titulo { // extends = herda os atributos e métodos da classe Titulo

    public function __construct( 
        string $nome,
        int $ano,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
        ) {
            // parent = chama o construtor da classe pai (Titulo)
            parent::__construct($nome, $ano, $genero); // inicializa atributos da classe pai(base) = Titulo
        }

    public function duracaoEmMinutos(): int {
        return $this->duracaoEmMinutos;
    }
}