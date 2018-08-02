<?php

$json = <<<JSON
[
  {"nome" : "João Paulo"},
  {"nome" : "Roberto"},
  {"nome" : "Carla",
    "telefones" : [
      {"celular" : "11 9 9509 6974"},
      {"comercial" : "11 293766 04"}
    ]
  }
]
JSON;
echo "<pre>";
echo $json;
