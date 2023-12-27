<?php

echo "Hello! What is your name? \n";
$name = fgets(STDIN);
echo "Your name is $name\n";

echo "$name please type first number \n";
$a = fgets(STDIN);

echo "$name please type second number \n";
$b = fgets(STDIN);

$c = $a + $b;
$d = ($a + $b) /2;

echo "The sum $a and $b = $c\n";
echo "The arithmetic mean $a and $b = $d\n";