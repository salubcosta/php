<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme          = "Se beber não case";
$nomeFilme          = "Top Gun - Maverick";

$anoLancamento      = 2022;

$quantidadeDeNotas = $argc - 1;

$notas = [];

for($i = 0; $i < $quantidadeDeNotas; $i++){
    $notas[] = (float) $argv[$i+1];
}

// $somaDeNotas = 0;
// foreach ($notas as $nota) {
//     $somaDeNotas += nota;
// }

$notaFilme          = array_sum($notas) / $quantidadeDeNotas;

$planoPrime         = true;

$incluidoNoPlano    = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: {$nomeFilme}\n";
echo "Nota do filme: {$notaFilme}\n";
echo "Ano de Lançamento: {$anoLancamento}\n";

if ($anoLancamento > 2024){
    echo "Esse filme é um lançamento!\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2024) {
    echo "Esse filme ainda é novo!\n"; 
}
else {
    echo "Esse filme não é um lançamento!\n"; 
}

$genereo = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};

echo "O gênero do filme é {$genereo}";