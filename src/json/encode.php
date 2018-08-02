<?php
$arr_json = [
  "nome" => "João Paulo",
  "endereco" => "Rua do meu coração",
  "telefone" => "11 9 95096974"
];

$json = json_encode($arr_json);
echo $json;
