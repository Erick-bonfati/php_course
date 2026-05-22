<?php

$array1 = [1, 2, 3];
$array2 = [1, 2, 3, 4, 5, 6];

var_dump(array_diff($array1, $array2)); // array_diff retorna os valores do primeiro array que não estão presentes nos outros arrays

var_dump(array_diff_assoc($array1, $array2)); // array_diff_assoc retorna os valores do primeiro array que não estão presentes nos outros arrays, comparando também as chaves