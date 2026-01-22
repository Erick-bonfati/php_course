<?php

$pessoa = [
    'nome' => 'Erick',
    'saldo' => 500
];

echo "*********************\n";
echo "Titular: $pessoa[nome]\n";
echo "Saldo: $pessoa[saldo]\n";
echo "*********************\n";

echo "1. Consultar saldo atual\n";
echo "2. Sacar valor\n";
echo "3. Depositar valor\n";
echo "4. Sair\n";

$numero = (int) fgets(STDIN); // Captura o valor digitado no terminal e converte para inteiro

if($numero === 1) {
    echo "Seu saldo é de: $pessoa[saldo] reais\n";
} elseif($numero === 2) {
    echo "Digite o valor que deseja sacar: ";
    $valorSaque = (float) fgets(STDIN);

    if($valorSaque > $pessoa['saldo']) {
        echo "Saldo insuficiente para saque\n";
    } else {
        $pessoa['saldo'] -= $valorSaque;
        echo "Saque realizado com sucesso! Seu novo saldo é de: $pessoa[saldo] reais\n";
    }
} elseif($numero === 3) {
    echo "Digite o valor que deseja depositar: ";
    $valorDeposito = (float) fgets(STDIN);

    $pessoa['saldo'] += $valorDeposito;
    echo "Depósito realizado com sucesso! Seu novo saldo é de: $pessoa[saldo] reais\n";
} elseif($numero === 4) {
    echo "Saindo...\n";
} else {
    echo "Opção inválida\n";
}

