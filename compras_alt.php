<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');


$id = $_POST["id"] ?? NULL;
$item = $_POST["item"] ?? NULL;

if($id && $item){
    $query = $pdo->prepare('UPDATE compras SET item = :item WHERE id = :id');

    $query->execute([
        ':id' => $id,
        ':item' => $item
    ]);
}

header('location: compras.php');