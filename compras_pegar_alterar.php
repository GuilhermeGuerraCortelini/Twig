<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');

$id = $_GET["id"] ?? NULL;

if($id){
    $query = $pdo->prepare('SELECT * FROM compras WHERE id = :id'); // se tem variavel é prepare

    $query->bindValue(':id', $id);

    $query->execute();

    $compras = $query->fetch(PDO::FETCH_ASSOC);
}

echo $twig->render('compras_alt.html', [
    'id' => $id,
    'compra' => $compras['item']
]);

