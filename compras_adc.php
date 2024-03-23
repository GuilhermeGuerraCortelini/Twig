<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');

$item = $_POST['item'] ?? null;

if($item) {
    $query = $pdo->prepare('INSERT INTO compras (item) VALUES (:item)'); // filtrar 

    $query->bindValue(':item', $item); // 

    $query->execute();
}

header('location:compras.php');