<?php

$lista = ['str01','str02','str03','str04','str05'];

echo "Total: ".count($lista).PHP_EOL;

$selecionado = ['str01', 'str02'];

$naoSelecionados = array_diff($lista, $selecionado);

print_r($naoSelecionados);

$numeros = [10, 20, 25, 91, 18, 41];

$filtrados = array_filter($numeros, function($item){
    return $item > 20; #retornar o item que é maior que 20.
});

print_r($filtrados);

$dobrarValores = array_map(function($item){
    return $item * 2;
}, $numeros);

print_r($dobrarValores);

array_pop($numeros); # remove o último item do array
array_shift($numeros); # remove o primeiro item

print_r($numeros);

if(in_array(91, $numeros)){
    echo 'Existe o número buscado';
} else {
    echo 'Não existe o número buscado';
}
echo PHP_EOL;

$pos = array_search(91, $numeros);

echo $pos.PHP_EOL;

sort($numeros); # ordena os numeros em ordem crescente

print_r($numeros);

rsort($numeros); # ordena os numeros em ordem decrescente

print_r($numeros);


asort($numeros); # ordena os numeros em ordem crescente MAS, mantem a chave original

print_r($numeros);

arsort($numeros); # ordena os numeros em ordem decrescente MAS, mantem a chave original

print_r($numeros);

/**
 * explode transforma uma string em array
 * implode transforma um array em string
 */

 echo implode(' ',['Salumao', 'Barbosa']);
 print_r(explode(' ', 'Salumão Barbosa'));