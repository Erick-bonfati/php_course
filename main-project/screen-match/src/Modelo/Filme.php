<?php


class Filme { // definição da classe Filme
    private string $nome = "Nome padrao"; // public = visível em qualquer lugar
    private int $ano = 2025;
    private string $genero = "ação";

    private array $notas = [];

    public function avalia(float $nota): void   {
      $this->notas[] = $nota;
    }

    public function media() : float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }

    public function dadosFilme(): array
    {
        return [
            'ano' => $this->ano,
            'genero' => $this->genero,
            'nome' => $this->nome
        ];
    }

    public function defineNovoFilme(int $ano, string $nome, string $genero)
    {
        $this->ano = $ano;
        $this->nome = $nome;
        $this->genero = $genero;
    }
}