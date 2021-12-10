<?php

#recursividade - função que chama a si mesma.
function dividir($numero, $controle = 0){
    $controle++;
    #round é usado para arredondar
    if(round($numero) > 0){
        echo $controle.' - '.$numero.PHP_EOL;
        dividir($numero/2,$controle);
    }
    return 1;
}

dividir(2);