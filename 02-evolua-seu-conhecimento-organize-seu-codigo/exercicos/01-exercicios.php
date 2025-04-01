<?php

/**
 * Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
 */
function operacaoMatematica(int $a, int $b, string $op): float{
    $result = 0;
    switch ($op){
        case "+":
            $result = $a+$b;
            break;
        case "-":
            $result = $a-$b;
            break;
        case "*":
            $result = $a*$b;
            break;
        case "/":
            $result = $a/$b;
            break;
    }
    return $result;
}

echo "Resultado da operação: " . operacaoMatematica(10,5,"/") . PHP_EOL;
 /**
  * Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
 */
function calcularIMC(float $altura, float $peso): float {
    return $peso / $altura**2;
}

$imc = calcularIMC(1.68, 84.0);

if ($imc < 18.5){
    echo "Abaixo do peso. Seu IMC é " . (number_format($imc,2,".",",")) . PHP_EOL;
} elseif ($imc >= 18.5 && $imc < 25){
    echo "Peso normal. Seu IMC é " . (number_format($imc,2,".",",")) . PHP_EOL;
} elseif ($imc >= 25 && $imc < 30){
    echo "Sobrepeso. Seu IMC é " . (number_format($imc,2,".",",")) . PHP_EOL;
} else {
    echo "Obesidade. Seu IMC é " . (number_format($imc,2,".",",")) . PHP_EOL;
}
 /**
  * Crie uma função em PHP que converta graus celsius para Fahrenheit.
 */
function converterCelsiusEmFahrenheit(float $temperaturaEmCelsius): float {
    return $temperaturaEmCelsius * 1.8 + 32;
}

$temperaturaEmCelsius = 30.4;
$temperaturaEmFahrenheit = converterCelsiusEmFahrenheit($temperaturaEmCelsius);

$mensagem = "A temperatura de {$temperaturaEmCelsius} Celsius é equivalente a {$temperaturaEmFahrenheit} Fahrenheit";

echo $mensagem;