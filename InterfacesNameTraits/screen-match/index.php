<?php

require 'autoload.php';

// use ScreenMatch\Modelo\Genero;
// use ScreenMatch\Modelo\Filme;
// use ScreenMatch\Modelo\Serie;
// use ScreenMatch\Modelo\Episodio;

// ou

use ScreenMatch\Modelo\{
    Genero, 
    Filme, 
    Serie, 
    Episodio
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela
};

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(2);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Pilot', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(9);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos disponíveis.\n";

$conversor = new ConversorNotaEstrela();

echo $conversor->converte($serie) . "\n"; // Passamos a série como argumento, e o método converte irá chamar o método media() da série para obter a nota média e realizar a conversão para o sistema de estrelas.

echo $conversor->converte($filme) . "\n";