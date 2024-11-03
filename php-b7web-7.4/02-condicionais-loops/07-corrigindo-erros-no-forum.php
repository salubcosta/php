<?php

$ingredientes = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó'
];
echo '<ul>';
foreach ($ingredientes as $chave => $valor) {
  echo '<li>Item ' . $chave . ': ' . $valor . '</li>';
};
echo '</ul>';