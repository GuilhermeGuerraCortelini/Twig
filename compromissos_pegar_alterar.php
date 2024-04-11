<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');

$id = $_GET['id'] ?? null;

if($id){
    $query = $pdo->prepare('SELECT * FROM compromissos WHERE id = :id');

    $query->execute([
        ':id' => $id,
    ]);

    $compromisso = $query->fetch(PDO::FETCH_ASSOC);
}


echo $twig->render('compromissos_alt.html',[
    'id' => $id,
    'descricao' => $compromisso['descricao'],
    'data' => $compromisso['data']
]);