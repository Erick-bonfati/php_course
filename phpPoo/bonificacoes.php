<?php

require_once 'autoload.php';

use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor("João", new CPF("123.456.789-10"), "Analista Jr.", 2000);
$umGerente = new Gerente("Maria", new CPF("987.654.321-09"), "Gerente", 5000);
$umDiretor = new Diretor("Carlos", new CPF("456.789.123-45"), "Diretor", 10000);
$umDev = new Desenvolvedor("Erick", new CPF("123.456.789-10"), "Desenvolvedor", 3000);

$umDev->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umGerente);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umDev);

echo "Total de bonificações: " . $controlador->recuperaTotal() . PHP_EOL;