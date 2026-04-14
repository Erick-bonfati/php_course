<?php

function exibeMensagemLancamento(int $ano): void
{
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array
{
    return [
        'nome' => $nome,
        'anoLancamento' => $anoLancamento,
        'genero' => $genero,
        'nota' => $nota > 0 ? $nota : 0,
    ];
}

$stringEmpty = "";
$stringNotEmpty = $stringEmpty ?: "Valor padrão"; // operador elvis faz a comparação diretamente com o valor vazio, sem precisar comparar com ele

$array1 = [1, 2, 3];
$valorNull = $array1[3] ?? null; //?? ou ??= | operador de coalescência nula, verifica se o valor existe, se não existir retorna null

$resultado = isset($valorNull) ? "Valor existe" : "Valor não existe"; //isset verifica se a variável existe e não é nula

// OU 

$resultado2 = @$valorNull ? "Valor existe" : "Valor não existe"; // operador de controle de erro suprime mensagens de erro, mas não é recomendado usar

echo $resultado . "\n";

echo $resultado2 . "\n";
