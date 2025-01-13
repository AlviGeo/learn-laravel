<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
  $message = "$greeting, $name!";
  return $shout ? strtoupper($message) : $message;
}

echo greet("Alvi") . "\n";
echo greet("Alvi", "Hi") . "\n";
echo greet("Alvi", "Hey", true) . "\n";

// With named argument
echo greet(name: "David", shout: false);