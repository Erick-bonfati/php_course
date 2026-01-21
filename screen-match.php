<?php

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$incluidoNoPlano = true;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 12;
$somaDeNotas += 7.5;
$somaDeNotas += 4;

$notaFilme = $somaDeNotas / 5;


echo $notaFilme;
echo " 
";

echo "Bem vindo(a) ao \nscreen match!\n"; // \n - são caracteres de escape que seria como fazer um "TAB" no texto


//     || - ou


echo "Bem vindo(a) ao screen match!" . "Ola, fui concatenado"; // . = concatenar textos

echo "Bem vindo $nomeFilme, seu ano foi: $anoLancamento"; // a interpolação de variaveis só funciona quando colocamos dentro de aspas duplas

// As asplas simples só entregam o "conteudo puro", ex;

echo 'Bem vindo $nomeFilme, seu ano foi: $anoLancamento'; // Retorno: Bem vindo $nomeFilme, seu ano foi: $anoLancamento;

$saudacao = "Olá, meu nome é ";
$nome = "Alice ";
$continuacao = "e minha idade é ";
$idade = 17;
echo "$saudacao . $nome . $continuacao" . $idade;