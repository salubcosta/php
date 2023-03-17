<?php

require_once "./Classes/Produto.php";
require_once "./Classes/Cliente.php";

$produto = new Produto();
$produto->titulo = "Intel Core i7";
$produto->descricao = "Processador Intel da 8ª geração";
$produto->preco = 788;

var_dump($produto);

$cliente = new Cliente();
$cliente->nome = "Salumão";
$cliente->idade = 31;
$cliente->endereco = "Brasília/DF";
$cliente->telefone = "63988880000";

$cliente->comprar();