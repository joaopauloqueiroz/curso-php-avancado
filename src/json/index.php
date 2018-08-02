<?php

$json = <<<JSON

{
  "nome" : "João Paulo",
  "endereco" : "Rua do meu coração",
  "telefone" : "11 9 95096974"
}

JSON;

$obbj_json = json_decode($json);
$arr_json = json_decode($json, true);

var_dump($obbj_json, $arr_json);
