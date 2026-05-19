<?php

require_once 'autoload.php';

use Alura\Banco\Model\Endereco;

$umEndereco = new Endereco("Rua dos Bobos", "0", "Centro", "São Paulo");

$outroEndereco = new Endereco("Avenida dos Bobos", "0", "Centro", "São Paulo");

$umEndereco->rua;

echo $umEndereco;

echo $outroEndereco;
