<?php
// compras.php
require_once('twig_carregar.php');
require_once('inc/banco.php');

$dados = $pdo->query('SELECT * FROM compras');

// fatchAll
$compras = $dados->fetchAll(PDO::FETCH_ASSOC); // fetchAll(PDO::FETCH_ASSOC) trás só os nomes dos campos

echo $twig->render(
    'compras.html', 
    ['compras' => $compras,    
    'titulo' => 'Compras']
);
