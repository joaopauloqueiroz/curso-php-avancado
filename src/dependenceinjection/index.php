<?php
require __DIR__ . "/vendor/autoload.php";
use Pimple\Container;

require_once('User.php');

$container = new Container;
//container de banco de dados
$container['pdo'] = new PDO('mysql:dbname=phpavancado', 'root', '');

//container de data
$container['datetime'] = function () {
    date_default_timezone_set('America/Sao_paulo');
    return new DateTime('now');
};


$container['user'] = function ($c) {
    $user = new User;
    $user->createdAt = $c['datetime'];
    $user->setPDO($c['pdo']);
    return $user;
};

echo "<pre>";
echo $container['user']->getNome();
//var_dump();
