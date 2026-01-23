<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme("");

/*
$filme->nome = "Caẽs de caça";
$filme->ano = 2020;
$filme->nota = 8.5;
$filme->genero = "Ação"; 
*/

$filme->avalia(10);
$filme->avalia(2);
$filme->avalia(5.4);
$filme->avalia(3);

var_dump($filme);

echo $filme->media() . "\n";

$filme->defineNovoFilme(2043, "Thor", "Super-heroi"); // Utilizando o setter para criar um novo filme

$dadoFilme = $filme->dadosFilme();

echo $dadoFilme["ano"] . " " . $dadoFilme["genero"] . " " . $dadoFilme["nome"];

print_r($filme->dadosFilme());