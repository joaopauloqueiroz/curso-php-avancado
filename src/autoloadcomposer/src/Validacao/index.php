<?php
require 'vendor/autoload.php';

use Respect\Validation\Validator;

var_dump(Validator::cpf()->validate('79731627804')); // true
var_dump(Validator::cpf()->validate('79731627801')); // false
