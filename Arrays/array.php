<?php

$array = [
  1 => 'Um',
  2 => 'doisss',
  true => 'dois',
  1.9 => 'tres',
];

var_dump($array);

$notas = [
  10,
  9,
  8,
];

sort($notas);

var_dump($notas);


$arrayDentroDeArray = [
  [ "aluno" => "Erick", "nota" => 3 ],
  [ "aluno" => "Maria", "nota" => 9 ],
  [ "aluno" => "João", "nota" => 10 ],
];

function ordenaNotas(array $nota1, array $nota2) {
  if($nota1['nota'] > $nota2['nota']) {
    return -1;
  } 

  if($nota2['nota'] > $nota1['nota']) {
    return 1;
  }

  return 0;
}

function ordenaNotasCrescente(array $nota1, array $nota2) {
  return $nota1['nota'] <=> $nota2['nota'];
}

usort($arrayDentroDeArray, 'ordenaNotas');

var_dump($arrayDentroDeArray);

usort($arrayDentroDeArray, 'ordenaNotasCrescente');

var_dump($arrayDentroDeArray);
 
