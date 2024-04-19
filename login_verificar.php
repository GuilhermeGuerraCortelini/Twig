<?php
# login_verificar.php 

require_once("twig_carregar.php");
require_once("inc/banco.php");

session_start();

$nome = $_POST['nome'] ?? null;
$senha = $_POST['senha'] ?? null;
$senha_cripto = password_hash($senha, PASSWORD_BCRYPT);

$verificar_senha = password_verify($senha, $senha_cripto);

$dados = $pdo->prepare('SELECT * FROM usuarios WHERE nome = :nome'); 

$dados->execute([
    ':nome' => $nome
]);

$usuarios = $dados->fetch(PDO::FETCH_ASSOC);

if($_SESSION['senha']){
        header('location:usuarios.php');
} else {
    header('location:login.php');
}