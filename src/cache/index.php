<?php
$cacheFile = 'cache.html';
date_default_timezone_set('America/Sao_Paulo');
//definir tempo valido do cache
$cacheTimeSe = 20;
if (file_exists($cacheFile)) {
    $fileCreate = filemtime($cacheFile);
    if ((time() - $cacheTimeSe) < $fileCreate) {
        require_once($cacheFile);
        echo '<!--- ultima vez em cache '. date('H:i:s', $fileCreate) . ' fim --> ';
        exit;
    }
}
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cache</title>
</head>
<body>
    <h1>Treinaweb cursos</h1>
  <h3>Cursos:</h3>
  <ul>
    <li>PHP Básico</li>
    <li>PHP Intermediário</li>
    <li>PHP Avançado</li>
  </ul>
</body>
</html>
<?php
  //iniciar o buffer
  $cachedFile = fopen($cacheFile, 'w');
  fwrite($cachedFile, ob_get_contents());
  fclose($cachedFile);

  ob_end_flush();

?>