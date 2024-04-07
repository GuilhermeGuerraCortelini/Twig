<?php
# compras_adc.php
require('inc/banco.php');

use Carbon\Carbon;

$descricao = $_POST['descricao'] ?? null;
$data = $_POST['data'] ?? null;

// $data = Carbon::createFromFormatformat('d/m/Y');
// >format('d/m/Y') 

if ($descricao && $data) {
    $query = $pdo->prepare('INSERT INTO compromissos (descricao,data) VALUES (:descricao,:data)');

    $query->execute(
        [
            ':descricao' => $descricao,
            ':data' => $data
        ]
    );
}

header('location:compromissos.php');