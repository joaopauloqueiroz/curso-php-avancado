<?php
$pdo = new PDO('mysql:dbname=phpavancado', 'root', '');
$login = "email@joao.com";
$senha = '123456';

$passHash = password_hash($senha, PASSWORD_BCRYPT);
$insert = "INSERT INTO login VALUES (NULL, ? , ?)";
$stmt = $pdo->prepare($insert);

$stmt->execute([$login, password_hash($senha, PASSWORD_BCRYPT)]);
