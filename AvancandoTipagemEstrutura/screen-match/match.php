<?php

$opcao = '213';

// Match expression é uma estrutura de controle que compara um valor com um conjunto de padrões e executa o código correspondente ao primeiro padrão que corresponder. É semelhante a uma estrutura switch, mas é mais concisa e pode retornar um valor.
$menuSelecionado = match ($opcao) {
    '1' => 'Saldo',
    '2' => 'Depósito',
    '3' => 'Saque',
    '4' => 'Sair',
    default => 'Opção inválida',
};

echo $menuSelecionado;