<?php

require __DIR__.'/funcoes.php';

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

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: {$nomeFilme}\n";
echo "Nota do filme: {$notaFilme}\n";
echo "Ano de Lançamento: {$anoLancamento}\n";

exibeMensagemLancamento($anoLancamento);

$genereo = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};

echo "O gênero do filme é {$genereo}\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo json_encode($filme);