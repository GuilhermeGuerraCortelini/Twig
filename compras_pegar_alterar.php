<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');


$id = $_GET["id"] ?? NULL;

if($id){
    $query = $pdo->prepare('SELECT * FROM compras WHERE id = :id'); // se tem variavel é prepare

    $query->bindValue(':id', $id);

    $query->execute();
}

echo $twig->render('alterar.html', [
    'id' => $id,
]);

