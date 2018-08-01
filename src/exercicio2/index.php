<?php
  require_once('utils/Capcha.php');
  $capch = new Capcha();
  $capch->generateCaptcha();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="col-md-12">
    <h1>Login</h1>
      <form action="validar.php" class="form" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Usuario" name="username">
          </div>
          <div class="form-group">
          <input type="password" class="form-control" placeholder="Senha" name="pass">
          </div>

          <div class="form-group">
            <fieldset>
            <span>Capcha</span><br>
            <strong>Some os numeros</strong> <br>
            <span style="color: <?=$capch->gerarCor();?>; font-size:16pt;"><?= $capch->getN1();?></span> + <span style="color: <?=$capch->gerarCor();?>; font-size:16pt;"><?= $capch->getN2();?></span>
            <input type="text" name="captch" class="form-control" style="width:50px;" placeholder="=">
            </fieldset>
           </div>
           
          <div class="form-group">
          <input type="submit" class="btn btn-success">
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>