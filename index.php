<?php

echo "Hello! What is your name? \n";

$name = fgetc(STDIN);
while(fgetc(STDIN) != "\n");

echo "Your name is $name. \n";

echo "$name please type first number \n";

$a = fgetc(STDIN);
while(fgetc(STDIN) != "\n");
echo "$name please type second number \n";

$b = fgetc(STDIN);
while(fgetc(STDIN) != "\n");

$c = $a + $b;
$d = ($a + $b) /2;

echo "The sum $a and $b = $c \n";
echo "The arithmetic mean $a and $b = $d \n";