<!DOCTYPE html>
<?php
  $token = sha1(uniqid(rand(), true));
  session_start();
  $_SESSION['token'] = $token;
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width='device-width', initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>CSRF</title>
</head>
<body>
  <form action="login.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
      <label for="nome">Login</label>
        <input type="text" class="form-control" id="nome" name="login">
        <label for="pass">Senha</label>
        <input type="text" class="form-control" id="pass" name="senha">
        <br>
        <input type="submit" class="btn btn-success">
        <input type="hidden" name="token" value="<?=$token?>">
      </div>
    </div>
    </div>
  </form>
</body>
</html>