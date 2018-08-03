<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>reCapcha</title>
</head>
<body>
<div class="container">
<h1>Formulario Captcha</h1>
 <form action="" class="form">
 <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
    <input type="password" class="form-control" name="senha" placeholder="Password">
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-success">
  </div>
  <div class="g-recaptcha" data-sitekey="6Lc3DWgUAAAAAK5lwov1IZ13lP-uTLSgCCgTWVr0"></div>
  <script src='https://www.google.com/recaptcha/api.js'></script>
 </form>
</div>
</body>
</html>