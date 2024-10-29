<?php

use function PHPSTORM_META\type;

echo "Hello, world!";


/**
 * Variáveis
 */
$valorA = 10;
$valorB = 2;
$soma = $valorA+$valorB;

echo "<hr />A soma de {$valorA} mais {$valorB} é igual a {$soma}!";

$nome = "Salumão";

echo "<hr />Nome do autor: {$nome}";

echo "<hr>Variável nome é do tipo: ".(gettype($nome));
?>