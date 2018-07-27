<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - session</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if ($_POST['login'] == 'root' && $_POST['senha'] == '123456') {
          session_start();
          $_SESSION['logado'] = true;
          $_SESSION['login'] == true;
          header('location: logado.php');
      }
  }

?>

<body>

  <div class="container">
  <h2>Login</h2>
    <form action="login.php" class="form" method="post">
      <input type="text" class="form-control" name="login">
      <input type="password" class="form-control" name="senha">
      <input type="submit" class="form-control">
    </form>
  </div>
  
</body>
</html>