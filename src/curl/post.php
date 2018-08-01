<?php
$postar = curl_init();

//setar as configurações

$settings = [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://phpavancado.com/curl/criarArquivo.php',
        CURLOPT_USERAGENT => 'App TreinaWeb Curl Test 1.0',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => [
            'titulo' => 'Teste de criar arquivo',
            'conteudo' => 'Teste de criação de arquivo txt'
        ]
];

curl_setopt_array($postar, $settings);

echo curl_exec($postar);

curl_close($postar);
