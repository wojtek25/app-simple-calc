<!DOCTYPE html>
<html>
  <head>
    <title>Fraction example</title>
    <meta charset="UTF-8" />
    <style>
    body {
        font-family: "Courier New", monospace;

    }
    </style>
  </head>
<body>

<?php

require_once '../vendor/autoload.php';

use Gajdaw\PhpExample\Calc\Calc;

echo Calc::add(1111, 333) . "<br/>\n";

echo Calc::zero() . "<br/>\n";

?>

</body>
</html>