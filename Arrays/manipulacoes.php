<?php

$frutas = array("maça", "banana", "laranja");

$frutas[] = "pera"; // adiciona um elemento no final do array

array_push($frutas, "uva"); // array_push adiciona um ou mais elementos no final do array

array_unshift($frutas, "abacaxi"); // array_unshift adiciona um ou mais elementos no início do array

array_pop($frutas); // array_pop remove o último elemento do array

array_shift($frutas); // array_shift remove o primeiro elemento do array

array_splice($frutas, 1, 1); // array_splice remove elementos do array a partir de um índice específico

var_dump($frutas);