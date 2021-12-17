<?php

$texto = file_get_contents('texto.txt');

echo $texto;

/**
 * Outra forma poderia ser:
 * echo file_get_contentes('https://www.google.com.br') 
 */

# echo file_get_contents('https://www.google.com.br');