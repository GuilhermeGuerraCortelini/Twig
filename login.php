<?php
# login.php

require_once("twig_carregar.php");
require_once("inc/banco.php");



echo $twig->render("login.html", [
    "titulo" => "Login"
]);