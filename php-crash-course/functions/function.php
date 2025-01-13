<?php

function greet($name) {
     return "Hello, $name!";
}

echo greet("Alvi");

function greetWithTime($name, $time = "day")  {
    return "Good $time, $name!\n";
}

echo greetWithTime("Alvi");
echo greetWithTime("Alvi", "evening");