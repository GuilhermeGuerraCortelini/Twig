<?php
# usuarios_dlt.php

require_once("inc/banco.php");

$id = $_GET["id"] ?? null;

if($id){
    $query = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");

    $query->execute([
        ":id" => $id
    ]);
}

header('location:usuarios.php');