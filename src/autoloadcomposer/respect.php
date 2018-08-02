<?php
require __DIR__ . "/vendor/autoload.php";

use Respect\Validation\Validator;

$num = Validator::numeric()->positive();

var_dump($num->validate(10));
