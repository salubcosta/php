<?php

require "Conta.php";

$pessoa = new Conta("Salumão Barbosa");
$pessoa->depositar(1000);

echo "\n*********************\n";
echo "Titular: {$pessoa->getTitular()}\n";
echo "Saldo: {$pessoa->getSaldo()}\n";
echo "*********************\n";

do {
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    $opcao = fgets(STDIN);

    switch($opcao){
        case 1:
            echo "\n*********************\n";
            echo "Titular: {$pessoa->getTitular()}\n";
            echo "Saldo: {$pessoa->getSaldo()}\n";
            echo "*********************\n";
            break;
        case 2:
            echo "Qual valor deseja sacar?\n";
            $retorno = $pessoa->sacar((float)fgets(STDIN));
            echo "{$retorno}\n";
            break;
        case 3:
            echo "Qual valor deseja depositar?\n";
            $retorno = $pessoa->depositar((float)fgets(STDIN));
            echo "{$retorno}\n";
            break;
        case 4:
            echo "Adeus!\n";
            break;
        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 4);