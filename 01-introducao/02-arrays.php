<?php

$arrCake = ['sugar', 'egg', 'milk'];

echo $arrCake[3]; //undefined offset

$arrCake2 = [...$arrCake, 'Oil']; //Operador Array Spread (php 7.4+)

print_r($arrCake);
print_r($arrCake2);

