<?php
//enviar post do php e pegar retorno
$postData = http_build_query([
  'nome' => 'João Paulo',
  'empresa' => 'Cognizant'
]);

$options = [
  'http' => [
    'method' => 'POST',
    'header' => 'Content-Type:application/x-www-form-urlencoded',
    'content' => $postData
  ]
];
//motar o post
$context = stream_context_create($options);

$resultado = file_get_contents('http://phpavancado.com/streams/index.php', false, $context);

echo $resultado;
