<?php

#Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
$notas = [8, 2, 5, 7, 8.2, 9, 8.1];
rsort($notas);
for($i = 0; $i < 3; $i++){
    echo $notas[$i] . PHP_EOL;
}
#Crie um programa em PHP que transforme a string “Salumão Barbosa,1991,Programador” em um array em que cada item está separado por vírgulas.
$texto = "Salumão Barbosa,1991,Programador";
$arrTexto = explode(",", $texto);
var_dump($arrTexto);
#Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.
function ordenarArray(array $texto){
    sort($texto);
    return $texto;
}

$arrTeste = ["B", "D", "F", "A", "C", "G", "E"];

var_dump(ordenarArray($arrTeste));

