<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array
{
    $stringEmpty = "";
    $stringNotEmpty = $stringEmpty ?: "Valor padrão"; // operador elvis faz a comparação diretamente com o valor vazio, sem precisar comparar com ele

    return [
        'nome' => $nome,
        'anoLancamento' => $anoLancamento,
        'genero' => $genero,
        'nota' => $nota > 0 ? $nota : 0,
    ];
}