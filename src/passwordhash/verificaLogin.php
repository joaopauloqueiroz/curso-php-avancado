<?php
$pdo = new PDO('mysql:dbname=phpavancado', 'root', '');
$login = 'email@joao.com';
$senha = '123456';

$select = "SELECT * FROM login WHERE email=?";

$stmt = $pdo->prepare($select);

$stmt->execute([$login]);

$user = $stmt->fetch(\PDO::FETCH_OBJ);

if ($stmt->rowCount() && password_verify($senha, $user->senha)) {
    echo 'Usuario logado com sucesso';
} else {
    echo 'usuario ou senha invalidos';
}
