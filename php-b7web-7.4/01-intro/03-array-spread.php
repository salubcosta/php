<?php

$boloA = [
    'Açúcar', 
    'Farinha de trigo', 
    'Ovo', 
    'Leite', 
    'fermento em pó'
];

$boloB = [
    ...$boloA, 
    'choloate'
];

echo "<pre>";
print_r($boloB);
echo "</pre>";
?>