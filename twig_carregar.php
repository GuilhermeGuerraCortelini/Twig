<?php
// twigcarregar.php

// Carrega o carragador do composer
require_once('vendor/autoload.php');   // _once pra não instalar mais de uma vez 

// Loader é quem carrega os arquivos html
$loader = new \Twig\Loader\FilesystemLoader('./templates'); // criar um objeto chamado loader que vai carregar loader dentro da pasta templates | ( \ ) é um namespace

// Criar o objeto do Twig
$twig = new \Twig\Environment($loader);