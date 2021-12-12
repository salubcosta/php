<?php
/**
 * A listagem de funções matemáticas estão registrada neste link:
 * php.net/manual/pt_BR/ref.math.php
 */

$numero = -8.4;

echo abs($numero).PHP_EOL; #Pega o número absoluto, a saber: 8.4

echo pi().PHP_EOL; #Mostra o PI

$numero = 2.7;

echo floor($numero).PHP_EOL; # Arredonda pra baixo

echo ceil($numero).PHP_EOL; # Arredonda pra cima

echo round(4.6).PHP_EOL; # Será arredondado para cima  = 5
echo round(4.4).PHP_EOL; # Será arredondado para baixo = 4
echo round(4.5).PHP_EOL; # Será arredondado para cima = 5
echo round(4.49).PHP_EOL; # Será arredondado para baixo = 4

$aleatorio = rand(1,10); # Gera números aleatórios entre 1 e 10 incluíndo o 1 e o 10

echo $aleatorio.PHP_EOL;

$lista = [1,4,9,8];
echo max($lista).PHP_EOL; # Mostra maior valor dentro da lista
echo min($lista).PHP_EOL; # Mostra menor valor dentro da lista

