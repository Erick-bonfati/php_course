<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\Conta\ContaCorrente;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

$contaCorrente = new ContaCorrente(new Titular(new CPF('123.456.789-10'), 'Maria', new Endereco('São Paulo', 'Jardim Paulista', 'Rua Augusta', '123A')));

$contaCorrente->depositar(1000);
echo $contaCorrente->recuperaSaldo() . PHP_EOL;

$contaCorrente->sacar(500);
echo $contaCorrente->recuperaSaldo() . PHP_EOL;

$contaPoupanca = new ContaPoupanca(new Titular(new CPF('987.654.321-09'), 'João', new Endereco('Rio de Janeiro', 'Copacabana', 'Avenida Atlântica', '456B')));

$contaCorrente->transfere(200, $contaPoupanca);

echo $contaCorrente->recuperaSaldo() . PHP_EOL;
echo $contaPoupanca->recuperaSaldo() . PHP_EOL;



