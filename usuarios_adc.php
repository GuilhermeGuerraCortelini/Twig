<?php
# usuarios_adc.php

require_once("twig_carregar.php");
require_once("inc/banco.php");

session_start();

$nome = $_POST['nome'] ?? null;
$senha = $_POST['senha'] ?? null;
$senha_cripto = password_hash($senha, PASSWORD_BCRYPT);

$_SESSION['senha'] = $senha_cripto;
$_SESSION['usuario'] = $nome;

// echo password_hash($senha, PASSWORD_BCRYPT);
// password_verify($senha, $senha_cripto);

// $verificar_senha = password_verify($senha, $senha_cripto);

if($nome && $senha){
    $query = $pdo->prepare('INSERT INTO usuarios (nome, senha) VALUES (:nome, :senha)'); // filtrar 

    $query->execute([
        "nome" => $_SESSION['nome'],
        "senha" => $_SESSION['senha'] 
    ]);
}

header('location:usuarios.php');