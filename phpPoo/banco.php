<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;


$enredeco = new Endereco('São Paulo', 'Jardim Paulista', 'Rua Augusta', '123A');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $enredeco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL; // PHP_EOL é uma constante de quebra de linha, para não precisar usar \n
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $enredeco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereço = new Endereco('Rio de Janeiro', 'Copacabana', 'Rua Siqueira Campos', '456B');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereço));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
