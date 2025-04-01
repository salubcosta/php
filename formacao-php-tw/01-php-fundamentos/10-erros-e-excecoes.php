<?php

error_reporting(E_ALL);

/**
 * Warning - Alerta
 */
// $valor = 10;
// echo $valo; #Erro

/**
 * Fatal error: Esse erro para a execução da aplicação
 */
// $numero = NAO_EXISTE_ESSA_CONSTANTE;

/**
 * Parse error: É um erro de sintaxe
 */
// $numero = 10 # Gera o parse error

# uma forma de tratar
try {
    $divisor = 0;
    $valor = 100 / $divisor;
} catch(\Throwable $th){
    echo "Error: {$th->getMessage()}<br>";
}

# outra forma de tratar
try{
    $divisor = 0;
    if($divisor === 0){
        throw new Exception("Não é possível dividir um valor por zero. Informe um valor maior que 0.", 1);
    }
    $valor = 100 / $divisor;
} catch(\Throwable $th){
    echo $th->getMessage();
}