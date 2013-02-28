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

echo '1+3=' . SimpleCalc::add(1, 3) . "<br/>\n";

echo '5-2=' . SimpleCalc::subtract(5, 2) . "<br/>\n";

echo '3*33=' . SimpleCalc::multiply(3, 33) . "<br/>\n";

try {
    echo '1/0=';
    echo SimpleCalc::divide(1, 0) . "<br/>\n";
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage() . "<br/>\n";
}

echo 'zero()=' . SimpleCalc::zero() . "<br/>\n";

?>

</body>
</html>
