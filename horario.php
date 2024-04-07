<?php
# horario.php
require('twig_carregar.php');

use Carbon\Carbon; // quero usar Carbon dentro do pacote carbon ( importar a classe carbon) | auto_load diz como encontar uma classe

$data = Carbon::now('America/Sao_Paulo')
->locale('pt_BR')
->isoFormat('LLLL'); // pegar a data e hora atual do servidor | isoFormat por ultimoaddDay()

$amanha = Carbon::now('America/Sao_Paulo')
->locale('pt_BR')
->addDay() // soma um dia
->isoFormat('LLLL'); // formata

// $data->toString() ou que mostra o dia, mês, etc...;

echo $twig->render('horario.html', [
    'hoje' => $data,
    'amanha' => $amanha
]);

