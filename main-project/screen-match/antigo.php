<?php

//Caminho relativo
//require "funcoes.php"; // Não é recomendado para projetos maiores

// __DIR_ retorna o diretório do arquivo atual, dessa forma o caminho é sempre correto
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . "/src/funcoes.php";


//include = inclui o arquivo, mas não para a execução se o arquivo não for encontrado
//require = inclui o arquivo, mas para a execução se o arquivo não for encontrado

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$ano = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoPlano = incluidoNoPlano($ano, $planoPrime);

echo $filme->ano;




$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(nome: "Thor: Ragnarok", ano: 2021, nota: 7.8, genero: "super-herói");

exibeMensagemLancamento($ano);


var_dump($notas);
sort($notas); // ordena o array em ordem crescente
var_dump($notas);
$menorNota = min($notas); // menor valor do array
$maximaNota = max($notas); // maior valor do array

echo "Menor nota: $menorNota\n";
echo "Maior nota: $maximaNota\n";


//Principais métodos de arrays em PHP:

array_push($notas, 8.5); // adiciona um elemento no final do array
array_pop($notas); // remove o último elemento do array
array_shift($notas); // remove o primeiro elemento do array
array_unshift($notas, 6.5); // adiciona um elemento no início do array
array_slice($notas, 1, 3); // retorna uma parte do array
array_splice($notas, 2, 1); // remove elementos do array
array_merge($notas, [9.0, 7.5]); // mescla dois arrays
sizeof($notas); // retorna o tamanho do array

$posicaoDoisPontos = strpos($filme->nome, ":"); // procura a posição de uma substring dentro de uma string
var_dump($posicaoDoisPontos); // exibe a posição encontrada

var_dump(substr($filme->nome, 0, $posicaoDoisPontos)); // extrai uma substring a partir de uma posição inicial e um comprimento

//echo json_encode($filme); // converte o array em uma string no formato JSON

//var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-herói"}', true));  // converte uma string no formato JSON em um array associativo

$filmeComoStringJson = json_encode($filme); // converte o array em uma string no formato JSON

file_put_contents(__DIR__ . "/filme.json", $filmeComoStringJson); // grava o conteúdo em um arquivo