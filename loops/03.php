<?php

//Write a program that asks the user to enter two words. The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30:
//
//Enter first word:
//turtle
//Enter second word
//153
//turtle....................153

$first = readline("Enter first word: ");
$second =  readline("Enter second word: ") . PHP_EOL;
$maxLength = 30;
$concat = strlen($first) + strlen($second);

$lettersLeft = $maxLength - $concat;
echo "Space to fill with dots: {$lettersLeft}". PHP_EOL;

echo $first;
for ($i = 0; $i <= $lettersLeft; $i++)
{
    echo ".";
}
echo $second . PHP_EOL;



