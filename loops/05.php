<?php
echo "Welcome to Piglet!" . PHP_EOL;

$roll = (int) readline("Enter any key to start the game: ");
$rollTotal = 0;
while (true)
{
    $dice = [1, 2, 3, 4, 5, 6];
    $roll= array_rand($dice);
    $choice = readline("Roll again? type \"yes\" or \"no\": ");
    $rollTotal += $roll;

    switch ($choice)

    {
        case $roll == 1:
            echo "You rolled a {$roll}!" . PHP_EOL;
            echo "Awesome you lost because you rolled 1, you end up with 0 points!" . PHP_EOL;
            exit;
        case "yes":
           echo "You rolled a {$roll}!" . PHP_EOL;
            echo $rollTotal += $roll;
            echo PHP_EOL;
            break;
        case "no":
            echo "Your points: " . $rollTotal += $roll / -2;
            echo PHP_EOL;
            exit;

    }
}
