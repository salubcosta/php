<?php

$idade = 18;

if($idade >= 18){
    echo "maior de idade";
} else {
    echo "menor de idade";
}

echo "<br/>";

echo $idade>18? "maior de idade" : "menor de idade"; // ternário

echo "<br/>";

unset($idade); //Apaga variável

echo $idade ?? 'Idade não Informada'; // Condicional Null CAO