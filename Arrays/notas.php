<?php

$notas = [
  "Ana" => 10,
  "Roberto" => 3,
  "Maria" => 9,
  "João" => 8,
];

//rsort($notas); // rsort ordena o array em ordem decrescente - sort ordena o array em ordem crescente

var_dump($notas);

asort($notas); // asort ordena o array em ordem crescente, mantendo a associação entre chave e valor

var_dump($notas);

arsort($notas); // arsort ordena o array em ordem decrescente, mantendo a associação entre chave e valor

var_dump($notas);

ksort($notas); // ksort ordena o array em ordem crescente, mantendo a associação entre chave e valor, ordenando pelas chaves, considerando também ordem alfabética

krsort($notas); // krsort ordena o array em ordem decrescente, mantendo a associação entre chave e valor, ordenando pelas chaves, considerando também ordem alfabética

var_dump($notas);