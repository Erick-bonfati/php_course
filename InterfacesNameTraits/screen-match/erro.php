<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Modelo\Episodio;

require 'autoload.php';

$serie = new Serie("The Witcher", 2019, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, "O Início do Fim", 1);

try {
  $episodio->avalia(10);
  $episodio->avalia(-9);
  $conversor = new ConversorNotaEstrela();

  echo $conversor->converte($episodio);
} catch(NotaInvalidaException $e) {
  echo "Erro ao avaliar o episódio: " . $e->getMessage();

}
