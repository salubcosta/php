<?php

$nome = "Salumão";

$nomeCompleto = $nome;

// $nomeCompleto .= isset($sobrenome) ? $sobrenome : "";  # O que antes era feito assim, agora pode ser feito como abaixo:
$nomeCompleto .= $sobrenome ?? "";

echo $nomeCompleto;