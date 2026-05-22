<?php

$dados = [
    "nome" => "erick",
    "nota" => 10,
    "idade" => 5
];

extract($dados); // extract converte os elementos de um array em variáveis, muito cuidado para não permitir ações maliciosas, como sobrescrever variáveis importantes do sistema, ou liberar permissões de admin, etc.

var_dump($nome);
echo 'Nota:  ' . $nota . PHP_EOL; 
echo 'Idade: ' . $idade . PHP_EOL;

$nome = "joão";
$nota = 8;
$idade = 10;


var_dump(compact("nome", "nota", "idade")); // compact cria um array a partir de variáveis, muito cuidado para não permitir ações maliciosas, como sobrescrever variáveis importantes do sistema, ou liberar permissões de admin, etc.
