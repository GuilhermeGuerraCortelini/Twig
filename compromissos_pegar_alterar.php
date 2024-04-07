<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');

$id = $_GET['id'] ?? null;

if($id){
    $query = $pdo->prepare('SELECT * FROM compromissos WHERE id = :id');

    $query->execute([
        ':id' => $id,
    ]);

    $descricao = $query->fetch(PDO::FETCH_ASSOC);
    $data = $query->fetch(PDO::FETCH_ASSOC);
}

echo $twig->render('compromissos_alt.html',[
    'id' => $id,
    'descricao' => $descricao['descricao'],
    // 'data' => $data['data']
]);