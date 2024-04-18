<?php
// # usuarios.php

require_once("twig_carregar.php");
require_once('inc/banco.php');

$dados = $pdo->query('SELECT * FROM usuarios');

$usuarios = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('usuarios.html', [
    'usuarios' => $usuarios,
    'titulo' => 'Usuários'
]);