<?php
require __DIR__ . "/vendor/autoload.php";
use Knp\Snappy\Pdf;

$snappy = new Pdf('C://"Program Files (x86)"/wkhtmltopdf/bin/wkhtmltopdf.exe'. '/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
//$snappy->setTemporaryFolder('C:\Scripts');

header('Content-Type: application/pdf');

  $snappy->generateFromHtml('http://phpavancado.com/pdf/relatorio1');
