<?php
require_once('Session.php');
$session = new Session('TREINAWEB');

//seta os valores para a sessão
$session->set('nome', 'joao paulo');

//setar os valores da sessão
$session->set('email', 'joaopaulo.queiroz.545@gmail.com');

//quando iniciar tem que chamar o register para definir o tempo
$session->register('20 sec');
