<?php

# Função anônima
$calcularPorcentagem = function($valor, $percentual):float{
    return $valor * ($percentual/100);
};

echo $calcularPorcentagem(8,10).PHP_EOL;

#arrow function
$arrowFunc = fn($value, $param) => $value * ($param/100);

echo $arrowFunc(100, 10).PHP_EOL;