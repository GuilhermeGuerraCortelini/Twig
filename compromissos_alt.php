<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');

$id = $_POST['id'] ?? null;
$descricao = $_POST['descricao'] ?? null;
$data = $_POST['data'] ?? null;

if ($id && $descricao && $data) {
    $query = $pdo->prepare('UPDATE compromissos SET descricao = :descricao, data = :data WHERE id = :id');

    $query->execute([
        ':id' => $id,
        ':descricao' => $descricao,
        ':data' => $data
    ]);
}

header('location: compromissos.php');