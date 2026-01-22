<?php

$quantidadeDeNotas = $argc - 1;// Captura a quantidade de argumentos passados no terminal, subtraindo 1 para não contar o nome do arquivo

$somaDeNotas = 0;

for($i = 1; $i < $argc; $i++) { // Loop para somar todas as notas passadas no terminal
    $somaDeNotas += $argv[$i];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas; // Calcula a média das notas

echo $notaFilme;

// for($i = 0; $i <= 100; $i++) {
//     //Pegar impar e par
//     if($i % 2 !== 0) {
//         echo "\n$i é impar";
//     }
// }

//var_dump = função que mostra o valor de uma variável, mostrando o tipo dela também

var_dump($argv); // Mostra os argumentos passados no terminal em formato de array
var_dump($argc); // Mostra a quantidade de argumentos passados no terminal

// Diferenças entra argv e argc
// $argv é um array que guarda os valores passados no terminal
// $argc é um inteiro que guarda a quantidade de valores passados no terminal

$notasParaOFilme = [10, 8, 9.5, 7.562342342, "Oiii"];

var_dump($notasParaOFilme);

$filme = [
    "titulo" => "O poderoso chefão",
    "ano_lancamento" => 1972,
    "genero" => "Crime",
    "nota" => 10
];

echo $filme["titulo"]; // Acessa o valor do array associativo pela chave






//


$notas = [];

for($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador]; // Converte o valor passado no terminal para float e converte em um array
}

var_dump($notas);

$soma = 0;

//count = função que conta a quantidade de elementos em um array

for($i = 0; $i < count($notas); $i++) { // Loop para somar todas as notas do array
    $soma += $notas[$i];
}

echo $soma;

$somaForeach = 0;

foreach($notas as $nota) { // Loop para somar todas as notas do array usando foreach
    $somaForeach += $nota;
}

echo "\n$somaForeach";

//Agora fazendo tudo da maneira mais simples possível

//array_sum = função que soma todos os valores de um array

$notaFinal = array_sum($notas) / count($notas); // Calcula a média das notas usando array_sum e count

echo "\nNota final: $notaFinal\n";