<?php
// fruta.php

require('twig_carregar.php');

$frutas = [
    'Abacaxi',
    'Banana',
    'Maçã',
    'Bergamota',
    'Maracujá',
    'Limão',
    'Pessêgo',
];

$frutaEscolhida = $_GET['fruta'] ?? null;

echo $twig->render('fruta.html', [
    'frutas' => $frutas,
    'frutaEscolhida' => $frutas [$frutaEscolhida] ?? null, // $fruta[indice] virifica se a fruta existe se não null
    'titulo' => 'Fruta'
]);