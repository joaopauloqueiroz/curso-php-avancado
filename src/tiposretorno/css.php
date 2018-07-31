<?php
//pode funcionar para outros arquivos como javascript
//ex:
//header('Content-Type: aplication/javascript');
// ||
header('Content-Type: text/css');
$cor = rand(111111, 999999);
echo <<<CSS
  h1{
    color: #$cor;
  }
CSS;
