<?php

use Alura\Banco\Model\CPF;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Gerente("Carlos", new CPF("456.789.123-45"), 10000);

$autenticador->tentaLogin($umDiretor, "4321");