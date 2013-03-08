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

?>

<hr />

<?php

echo '1 + 3 = ' . SimpleCalc::add(1, 3);

?>


<hr />

<?php

echo '5 - 2 = ' . SimpleCalc::subtract(5, 2);

?>

<hr />

<?php

echo '3 * 33 = ' . SimpleCalc::multiply(3, 33);

?>

<hr />

<?php

echo '33 / 11 = ' . SimpleCalc::divide(33, 11);

?>

<hr />

<?php

echo 'zero() = ' . SimpleCalc::zero();

?>

<hr />

<?php
    echo 'OneDivX(5) = '. SimpleCalc::oneDivX(5);
?>

<hr />

<?php
    echo 'Exponentiation(2.5,3) = '. SimpleCalc::exponentiation(2.5,3);
?>

<hr />

<?php
echo 'fOnePlusXOneMinusX($x) = (1 + x) / (1 - x) = '. SimpleCalc::fOnePlusXOneMinusX(3);
?>

</body>
</html>
