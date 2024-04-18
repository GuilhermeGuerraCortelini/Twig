<?php
# usuarios_adc.php

require_once("twig_carregar.php");
require_once("inc/banco.php");

$nome = $_POST['nome'] ?? null;
$senha = $_POST['senha'] ?? null;

// echo password_hash($senha, PASSWORD_BCRYPT);
// password_verify($senha, $senha_cripto);

$senha_cripto = password_hash($senha, PASSWORD_BCRYPT);
// $verificar_senha = password_verify($senha, $senha_cripto);

if($nome && $senha){
    $query = $pdo->prepare('INSERT INTO usuarios (nome, senha) VALUES (:nome, :senha)'); // filtrar 

    $query->execute([
        "nome" => $nome,
        "senha" => $senha_cripto
    ]);
}

header('location:usuarios.php');