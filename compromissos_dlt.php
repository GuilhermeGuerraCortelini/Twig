<?php
require_once('inc/banco.php');

$id = $_GET['id'] ?? null;

$query = $pdo->prepare('DELETE FROM compromissos WHERE id = :id');

$query->bindValue(':id', $id); // faz a filtragem do valor

$query->execute();

header('location:compromissos.php');