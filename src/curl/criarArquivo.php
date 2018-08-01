<?php
if (! isset($_POST['titulo']) || !isset($_POST['conteudo'])) {
    http_response_code(400);
    exit('falha');
}

$title = $_POST['titulo']. '.txt';
$conteudo = addslashes($_POST['conteudo']);

$gravação = file_put_contents($title, $conteudo);

echo ($gravação) ? 'Sucesso' : 'Falha';
