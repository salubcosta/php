<?php

$nome = "       Salumão      "; # Atribuição à variável

echo trim($nome).PHP_EOL; # Remove espaços

echo "Nome c/ espaço: ".strlen($nome).PHP_EOL; # Qtd de caracteres com os espaços

echo "Nome s/ espaço: ".strlen(trim($nome)).PHP_EOL; # Qtd de caracteres sem os espaços

$nome = trim($nome); # Remove espaços e atribui string à variável $nome sem os espaços

echo strtolower($nome).PHP_EOL; # Saída: salumao

echo strtoupper($nome).PHP_EOL; # Saída: SALUMAO

echo str_replace('Sal', 'SAL', $nome).PHP_EOL; # Saída: SALumao

echo substr($nome, 0, 5).PHP_EOL; # Saída: Salum

echo strpos($nome, 'm').PHP_EOL; # Saída: 4

echo ucfirst('salumao barbosa da costa').PHP_EOL; # Saída: Salumão barbosa da costa

echo ucwords('salumao barbosa da costa').PHP_EOL; # Saída: Salumão Barbosa Da Costa

$nomeArr = explode(' ', 'Salumao Barbosa da Costa'); # Transforma em um Array

print_r($nomeArr); # Exibe array: array ([0]=> Salumao [1] => Barbosa [2] => da [3] => Costa)

$numero = 12913.12;

echo number_format($numero, 2,',','.'); # Saída: 12.913,12