<?php 

$paises = [
    'Namibia',
    'Nauru',
    'Nepal',
    'Netherlands',
    'New Zealand',
    'Nicaragua',
    'Niger',
    'Nigeria',
    'North Korea',
    'Norway'
];
$saida = "";
for($i = 0; $i < count($paises); $i++){
    $saida .= $paises[$i]." ";
}
echo $saida;