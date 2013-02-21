<!DOCTYPE html>
<html>
  <head>
    <title>SimpleCalc example application</title>
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

use Gajdaw\TddExamples\SimpleCalc\SimpleCalc;

echo SimpleCalc::add(1111, 333) . "<br/>\n";

echo SimpleCalc::zero() . "<br/>\n";

?>

</body>
</html>