<?php

function somar(int $n1, int $n2, int $n3 = 0, int &$ultimaSoma){
    $ultimaSoma = $n1+$n2+$n3;
    return $ultimaSoma;
}

$ultimaSoma = 0;

# COMO ESTOU USANDO TERMINAL PARA RODAR OS SCRIPTS, 
# CONCATENO COM PHP_EOL PARA QUEBRAR LINHA E FICAR MELHOR A VISUALIZAÇÃO
echo somar(3,2,5,$ultimaSoma).PHP_EOL; 

echo "Resultado da ultima soma: {$ultimaSoma}".PHP_EOL;