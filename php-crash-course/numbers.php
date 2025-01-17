<?php

$int = 42;
$float = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.99;

var_dump($int, $float, $stringToInt, $floatToInt);
// var_dump(7 % 2 === 0);

var_dump(
  round(3.7),
  round(3.4),
  floor(3.8),
  ceil(3.1),
  min(2, 3, 1, 7),
  max(2, 3, 1, 7),
  rand(1, 10),
  abs(-5)
);

$number = 1234.894545;

// Second parameter = The number of decimal places to round to (2 decimal places in this case).
// Third parameter = The character to use as the decimal separator (a dot . in this case).
// Fourth parameter = The character to use as the thousands separator (a comma , in this case).
// Output is 1,234.89
echo "Fromatted: " . number_format($number, 2, '.', ',');