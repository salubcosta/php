<?php

$idade = 48;

/**
 * Pode ser usado : como delimitador
 * Mas o comum é o uso de chaves
 */
if ($idade >= 18):
    print("Maior de idade!");
else:
    print("Menor de idade!");
endif;

/**
 * Mesmo compartamento do código acima:
 */
// if ($idade >= 18){
//     print("Maior de idade!");
// } else {
//     print("Menor de idade!");
// }