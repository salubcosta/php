<?php

# Array
$linguagens = ["PHP", "C#", "JAVA"];
// $linguagens = array("PHP", "C#", "JAVA"); # outra forma de declarar variáveis

echo $linguagens[0].PHP_EOL;

# Array associativo
$curso = [
    "nome_curso" => "Curso de PHP - Fundamentos",
    "versao" => 8.2,
    "carga_horaria" => 40,
    "status" => true
];

echo $curso["nome_curso"].PHP_EOL;
echo $curso["versao"].PHP_EOL;
echo $curso["carga_horaria"].PHP_EOL;