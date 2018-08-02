<?php
require_once('utils/Capcha.php');
require_once('utils/Save.php');
//$sav = new Save('mysql:dbname=loginphp', 'root', '');
$pdo = new PDO('mysql:dbname=loginphp', 'root', '');
// $passHash = password_hash($_POST['pass'], PASSWORD_BCRYPT);
// $insert = "INSERT INTO users VALUES (NULL, ? , ?)";
// $stmt = $pdo->prepare($insert);

//  $stmt->execute([$_POST['username'], $passHash]);
//  exit;


$cath = new Capcha();
if ($cath->resultSession($_POST['captch'])) {
    $pdo = new Save($pdo);

    $result = $pdo->isLogin([$_POST['username'], $_POST['pass']]);
} else {
    echo "Erro ao validar os dados do captcha";
}
