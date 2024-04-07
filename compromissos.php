<?php

require_once('twig_carregar.php');
require_once('inc/banco.php');

use Carbon\Carbon;

$dados = $pdo->query('SELECT * FROM compromissos');

$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

foreach($compromissos as $indice => $compromisso){
    $compromissos[$indice]['fimdesemana'] = Carbon::parse($compromisso['data'])->isWeekend();
}

echo $twig->render(
    'compromisso.html', 
    ['compromissos' => $compromissos,
    'titulo' => 'Compromissos']
);