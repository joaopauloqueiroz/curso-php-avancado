<!DOCTYPE html>
<?php

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width='device-width', initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>RCI</title>
</head>
<body>
<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      //echo htmlentities($_POST['codigo']); //interpreta os scripts as tgs como string
      //echo strip_tags($_POST['codigo']); //exclui as tags deixando só o conteudo da mensagem
      //echo strip_tags($_POST['codigo'], '<h1><h2>'); //passando como parametro as tags que você permite ser executada

      echo eval($_POST['codigo']); //eecuta a string que veio do post como um comando php
  }

?>
  <form action="index.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
      <label for="nome">Codigo</label>
        <input type="text" class="form-control" id="nome" name="codigo">
        <input type="submit" class="btn btn-success">
      </div>
    </div>
    </div>
  </form>

</body>
</html>