<?php

//Remover os valores duplicados de um array
$arr = [1, 2, 2, 3, 4, 4, 5];


// array_unique - função que remove os valores duplicados de um array

$semDuplicados = array_unique($arr);

print_r($semDuplicados);


$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}


$conta = [
    'titular' => 'Vinicius Dias',
    'saldo' => 100,
];

echo $conta['titular'] . ' possui ' . $conta['saldo'] . ' reais de saldo.';


$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';

print_r($familiares);