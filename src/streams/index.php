<?php

if ($_POST) {
    echo "Olá ".$_POST['nome'] . " Seja bem vido a <strong>".$_POST['empresa']."</strong>!";
}


// $input = file_get_contents('php://input');

// echo $input;


// $arquivo = file_get_contents('https://treinaweb-arquivos.s3.amazonaws.com/cursos/php/teste.txt');
// echo $arquivo;


//camadas de transportes
//print_r(stream_get_transports());

//wrapers de protocolos
//print_r(stream_get_wrappers());

// Filtros
//print_r(stream_get_filters());
