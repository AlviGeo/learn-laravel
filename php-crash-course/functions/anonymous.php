<?php

$greet = function ($name) {
  return "Hello, $name\n";
};
echo $greet("David");

$numbers = [1, 2, 3];
$squared = array_map(function ($n) {
  return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$message = "Bye";
// Anonymous function doesnt have access two the variable declared outside so must use the "use" keyword
// The & sign in the below means that the change would also be made in the original variable
$greet2 = function ($name) use (&$message) {
  $message = $message . "!";
  return "$message, $name\n";
};
echo $greet2("David");
echo $message . "\n";