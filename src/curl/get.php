<?php
$recurso = curl_init('http://api.postmon.com.br/v1/cep/06786320');
curl_setopt($recurso, CURLOPT_RETURNTRANSFER, true);
$resultado = curl_exec($recurso);
$httpCode = curl_getinfo($recurso, CURLINFO_HTTP_CODE);
if ($httpCode == 200) {
    echo json_encode($resultado);
} else {
    echo "error";
}
curl_close($recurso);
