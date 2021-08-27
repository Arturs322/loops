<?php
//echo "The first 10 natural numbers are:";

////todo write a program that displays first 10 natural numbers

$numbers = [-1, -8, 1, 3, 5, -4, 7, -5, 8, 6, -2, 2, 4, 9, 10];

echo "The first 10 natural numbers are: " . PHP_EOL;
foreach ($numbers as $number)
{
    if ($number > 0)
    {
        echo $number . PHP_EOL;
    }
}

