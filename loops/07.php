<?php

$input = (int) readline("Desired sum: ");

while (true)
{
    $dice = [1, 2, 3, 4, 5, 6];
    $roll= array_rand($dice);
    $roll2 = array_rand($dice);
    $rollResult = $roll + $roll2;
    $choice = readline("Roll again? type \"yes\" or \"no\": ");

    switch ($choice)
    {
        case $rollResult === $input:
            echo "You rolled a {$roll} and {$roll2} = {$rollResult}" . PHP_EOL;
            echo "Congratulations, you won!" . PHP_EOL;
            exit;
        case "yes":
            echo "You rolled a {$roll} and {$roll2} = {$rollResult}" . PHP_EOL;
            echo PHP_EOL;
            break;
        case "no":
            echo PHP_EOL;
            exit;


    }
}
