<a href="contato">contato</a>

<?php

$rota = explode("/", $_GET['url'] ?? 'home');

var_dump($rota);

if (file_exists("pages/{$rota[0]}.html")){
    include "pages/{$rota[0]}.html";
}