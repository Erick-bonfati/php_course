<?php


function exibeMensagemLancamento(int $anoLancamento): void { // void = indica que a função não retorna nada
    if ($anoLancamento > 2022) {
            echo "Esse filme é um lançamento\n";
        } elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
            echo "Esse filme ainda é novo\n";
        } else {
            echo "Esse filme não é um lançamento\n";
        }
}

function incluidoNoPlano(int $ano, bool $planoPrime): bool { // : bool = indica o tipo de retorno da função
    return $planoPrime || $ano < 2020;
}

function criaFilme(string $nome, int $ano, float $nota, string $genero): Filme {
    $filme = new Filme(); // instancia um objeto da classe Filme

    $filme->nome = $nome;
    $filme->ano = $ano;
    $filme->nota = $nota;
    $filme->genero = $genero;

    return $filme;
}