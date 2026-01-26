<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";


echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme("Cães de caça", 2020, Genero::Acao, 144);

$filme->avalia(10);
$filme->avalia(2);
$filme->avalia(5.4);
$filme->avalia(3);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->ano . "\n";

echo "---------------------\n";

echo "Series:\n\n";

$serie = new Serie("Breaking Bad", 2008, Genero::Drama, 5, 10, 10);

echo $serie->ano . "\n"; // return: 2008

$serie->avalia(9);
$serie->avalia(8.5);

echo $serie->media() . "\n"; // return: 8.75


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Duração total da maratona: " . $duracao . " minutos\n";