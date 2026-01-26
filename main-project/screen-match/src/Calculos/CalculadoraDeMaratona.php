<?php

// Polimorfismo = significa "muitas formas". Permite que objetos de diferentes classes sejam tratados como objetos de uma classe comum.
// Neste caso, tanto Filme quanto Serie são Titulo, então podem ser tratados como tal.
class CalculadoraDeMaratona {
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo) : void {
       $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao() : int {
        return $this->duracaoMaratona;
    }
}