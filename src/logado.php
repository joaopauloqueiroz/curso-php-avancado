<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<?php
session_start();
//logica para verificar se a sessão do usuario e valida
if (!isset($_SESSION['sessIdTime'])) {
    $_SESSION['sessIdTime'] = time();
} elseif (time()- $_SESSION['sessIdTime'] > 10) {
    $_SESSION = [];
    session_destroy();
} else {
    $_SESSION['sessIdTime'] = time();
}
if (!isset($_SESSION['logado'])) {
    header('location: login.php');
    exit;
}

?>
<body>
  <div class="container">
    <h1>Seja bem vido </h1>
      <p>Login: <?=$_SESSION['login']?></p>
      <p>Session_id <?=session_id();?></p>
      <p>Session_name <?=session_name();?></p>
  </div>
</body>
</html>