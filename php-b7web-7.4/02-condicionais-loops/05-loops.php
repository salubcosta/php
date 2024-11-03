<?php

################### while ###################
$contador = 0;

// while($contador < 10):
//     echo "Número: {$contador}\n";
//     $contador++;
// endwhile;

# Equivalente ao código acima
// while($contador < 10){
//     echo "Número: {$contador}\n";
//     $contador++;
// }

################### for ###################

// for($i=0; $i<=10; $i++):
//     echo "Número: {$i}\n";
// endfor;

# Equivalente ao código acima
// for($i = 0; $i <= 10; $i++){
//     echo "Número: {$i}\n";
// }

################### do while ###################

// do {
//     echo $contador++;
// } while ($contador <= 10);

################### for each ###################

$lista = ["computador", "mouse", "teclado", "headset", "hard disk", "memória ram"];

foreach ($lista as $chave => $valor) {
    echo "Chave: [{$chave}] => Valor: {$valor}\n";
}