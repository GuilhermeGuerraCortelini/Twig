<?php
// contato.php
require_once('twig_carregar.php');

echo $twig->render('contato.html', [
    'titulo' => 'Contato'
]);