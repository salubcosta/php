<?php

/**
 * Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.
 */

 # 1 - Escreva um programa em PHP que exiba seu nome na tela.
echo "Meu nome é Salumão\n";

# 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$n1 = 10;
$n2 = 6;
$n3 = 8;

$media = ($n1+$n2+$n3)/3;

echo "A média de três notas é: {$media}\n";

# 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$metro = 10;
$metroEmCentimetro = $metro * 100;

echo "${metro} metros em centímetros equivalem a ${metroEmCentimetro} centímetros\n";

# 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = 2025;
if(($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0){
    echo "${ano} é bissexto.\n";
} else {
    echo "${ano} não é bissexto.\n";
}

# 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$temperaturaEmCelsius = 30.4;
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "A temperatura de ${temperaturaEmCelsius} Celsius é equivalente a ${temperaturaEmFahrenheit} Fahrenheit";

echo $mensagem;