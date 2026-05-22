<?php

$notas = [
  "Ana" => 10,
  "Roberto" => 3,
  "Maria" => 9,
  "João" => 8,
];

if(is_array($notas)) {
  echo "É um array" . PHP_EOL;
} else {
  echo "Não é um array" . PHP_EOL;
}

var_dump(array_key_exists("Ana", $notas)); // array_key_exists verifica se a chave existe no array

var_dump(isset($notas["Ana"])); // isset verifica se a chave existe no array e se o valor é diferente de null

var_dump(in_array(20, $notas)); // in_array verifica se o valor existe no array / retorno = false

var_dump(array_search(9, $notas)); // array_search retorna a chave do valor encontrado no array / retorno = "Maria"