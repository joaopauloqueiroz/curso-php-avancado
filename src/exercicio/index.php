<?php

//Pega a URL caso exista
$url = isset($_GET["pagina"]) ? $_GET["pagina"] : '';

// Explode os segmentos da URL e os armazena em um Array
$segmentos = explode('/', $url);
echo "dasd";
// Se a classe foi definida, retorna o nome, caso contrario retorna a classe padrão
$classe = ($c = array_shift($segmentos)) ? $c : 'padrao';

// Se um método foi realmente requisitado, retorna o nome dele. Caso contrário retorna main
$metodo = ($m = array_shift($segmentos)) ? $m : 'main';

//Inclui a classe necessária
require_once('src/'.$classe.".php");

//Instancia a classe
$requisitado = new $classe();

//Chama o método
$requisitado->$metodo();
