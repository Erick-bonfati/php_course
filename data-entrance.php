<?php


$anoLancamento = $argv[1] ?? 2022; // Captura os valores que são passados no terminal, e passamos via indices, por ex: pegamos o indice 1 do terminal

// Terminal: php data-entrance.php === indice 0
// Terminal: php data-entrance.php 2020(indice 1)

// É como capturar o segundo valor passado no terminal, ou o equivalente ao comando que passamos

// ?? - significa um if(valor nulo) - caso o primeiro valor não existe use o segundo por padrão

echo $anoLancamento;

if($anoLancamento > 2022) {
    echo "\nsse filme é um lançamento\n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "\nEsse filme ainda é novo\n";
} else {
    echo "\nFilme antigo\n";
}

$nomeFilme = "Se beber não case";

$genero = match ($nomeFilme) { // match é uma expressão que ajuda a fazer um tipo de condição if especial, comparando o argumento passado com o parametros
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-heroi",
    "Se beber não case" => "Comédia",
    default => "Genero desconhecido" // default é um valor padrão para match caso não bata com nenhuma condição acima
};

echo "$genero\n";