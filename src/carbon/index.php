<?php
require __DIR__ . "/vendor/autoload.php";

use Carbon\Carbon;

echo Carbon::now('America/Sao_Paulo')->format('d/m/Y H:i:s');
