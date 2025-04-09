<?php

$titularConta = "Willian Saud";
$saldo = 1000;

do {
    
    // Menu de opções
    echo "-------------------------\n";
    echo "Titular: $titularConta\n";
    echo "Saldo atual: $saldo\n";
    echo "-------------------------\n";
    echo "\n";

    echo "1. Consultar saldo atual\n";
    echo "2. Realizar saque\n";
    echo "3. Realizar depósito\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);
    
    // Verificação de opção escolhida
    switch ($opcao) {
        case 1:
                echo "Seu saldo atual é: $saldo\n";
                break;

        case 2:
                echo "Qual valor deseja sacar?\n";
                $valorSaque = (float) fgets(STDIN);
                if ($valorSaque > $saldo) {
                        echo "Saldo insuficiente\n";
                } else {
                        $saldo -= $valorSaque;
                }
                break;

        case 3:
                echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
                break;
                        
        case 4:
            echo "Adeus\n";
            break;
                        
        default:
            echo "Opção inválida\n";
                break;
        }
} while ($opcao != 4);